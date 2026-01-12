<?php
if ( ! function_exists( 'add_action' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

class UltimaQodefImport {
	public $message = "";
	public $attachments = false;
	
	/**
	 * Name of folder where revolution slider will stored
	 * @var string
	 */
	private $revSliderFolder;

	function __construct() {
		$this->revSliderFolder = 'qodef-rev-sliders';
		$this->importURI       = 'http://export.select-themes.com/';
		
		add_action( 'admin_menu', array( &$this, 'qode_admin_import' ) );
		add_action( 'admin_init', array( &$this, 'qode_register_theme_settings' ) );

	}

	function qode_register_theme_settings() {
		register_setting( 'qode_options_import_page', 'qode_options_import' );
	}

	public function import_content( $file ) {
		ob_start();
		require_once( QODE_CORE_ABS_PATH . '/import/class.wordpress-importer.php' );
		$qode_import = new WP_Import();
		set_time_limit( 0 );

		$qode_import->fetch_attachments = $this->attachments;
		$returned_value                 = $qode_import->import( $file );
		if ( is_wp_error( $returned_value ) ) {
			$this->message = esc_html__( "An Error Occurred During Import", "select-core" );
		} else {
			$this->message = esc_html__( "Content imported successfully", "select-core" );
		}
		ob_get_clean();
	}

	public function import_widgets( $file, $file2 ) {
		$this->import_custom_sidebars( $file2 );
		$options = $this->file_options( $file );
		foreach ( (array) $options['widgets'] as $qode_widget_id => $qode_widget_data ) {
			update_option( 'widget_' . $qode_widget_id, $qode_widget_data );
		}
		$this->import_sidebars_widgets( $file );
		$this->message = esc_html__( "Widgets imported successfully", "select-core" );
	}

	public function import_sidebars_widgets( $file ) {
		$qode_sidebars = get_option( "sidebars_widgets" );
		unset( $qode_sidebars['array_version'] );
		$data = $this->file_options( $file );
		if ( is_array( $data['sidebars'] ) ) {
			$qode_sidebars = array_merge( (array) $qode_sidebars, (array) $data['sidebars'] );
			unset( $qode_sidebars['wp_inactive_widgets'] );
			$qode_sidebars                  = array_merge( array( 'wp_inactive_widgets' => array() ), $qode_sidebars );
			$qode_sidebars['array_version'] = 2;
			wp_set_sidebars_widgets( $qode_sidebars );
		}
	}

	public function import_custom_sidebars( $file ) {
		$options = $this->file_options( $file );
		update_option( 'qode_sidebars', $options );
		$this->message = esc_html__( "Custom sidebars imported successfully", "select-core" );
	}

	public function import_options( $file ) {
		$options = $this->file_options( $file );
		update_option( 'qode_options_ultima', $options );
		$this->message = esc_html__( "Options imported successfully", "select-core" );
	}

	public function import_menus( $file ) {
		global $wpdb;
		$qode_terms_table = $wpdb->prefix . "terms";
		$this->menus_data = $this->file_options( $file );
		$menu_array       = array();
		foreach ( $this->menus_data as $registered_menu => $menu_slug ) {
			$term_rows = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $qode_terms_table where slug=%s", $menu_slug ), ARRAY_A );
			if ( isset( $term_rows[0]['term_id'] ) ) {
				$term_id_by_slug = $term_rows[0]['term_id'];
			} else {
				$term_id_by_slug = null;
			}
			$menu_array[ $registered_menu ] = $term_id_by_slug;
		}
		set_theme_mod( 'nav_menu_locations', array_map( 'absint', $menu_array ) );

	}

	public function import_settings_pages( $file ) {
		$fields = array(
			'show_on_front'  => get_option( 'show_on_front' ),
			'page_on_front'  => get_option( 'page_on_front' ),
			'page_for_posts' => get_option( 'page_for_posts' ),
		);
		
		$pages = $this->file_options( $file );
		
		$new_ids = get_transient( '_select_core_imported_posts' );
		
		if ( $pages['show_on_front'] != $fields['show_on_front'] ) {
			update_option( 'show_on_front', $pages['show_on_front'] );
		}
		
		if ( ! empty( $new_ids ) ) {
			if ( 0 != $pages['page_on_front'] && ( $new_ids[ $pages['page_on_front'] ] != $fields['page_on_front'] ) ) {
				update_option( 'page_on_front', $new_ids[ $pages['page_on_front'] ] );
			}
			if ( 0 != $pages['page_for_posts'] && ( $new_ids[ $pages['page_for_posts'] ] != $fields['page_for_posts'] ) ) {
				update_option( 'page_for_posts', $new_ids[ $pages['page_for_posts'] ] );
			}
		} else {
			if ( 0 != $pages['page_on_front'] && ( $pages['page_on_front'] != $fields['page_on_front'] ) ) {
				update_option( 'page_on_front', $pages['page_on_front'] );
			}
			if ( 0 != $pages['page_for_posts'] && ( $pages['page_for_posts'] != $fields['page_for_posts'] ) ) {
				update_option( 'page_for_posts', $pages['page_for_posts'] );
			}
		}
	}
	
	public function rev_sliders() {
		return array(
			'agency.zip',
			'app-1.zip',
			'app-2.zip',
			'boxes.zip',
			'corporate.zip',
			'fashion.zip',
			'furniture.zip',
			'grid.zip',
			'gym.zip',
			'landing-1.zip',
			'landing-2.zip',
			'main-home.zip',
			'music.zip',
			'product_2.zip',
			'product.zip',
			'seo.zip'
		);
	}
	
	public function create_rev_slider_files( $folder ) {
		$rev_list = $this->rev_sliders();
		$dir_name = $this->revSliderFolder;
		
		$upload     = wp_upload_dir();
		$upload_dir = $upload['basedir'];
		$upload_dir = $upload_dir . '/' . $dir_name;
		if ( ! is_dir( $upload_dir ) ) {
			mkdir( $upload_dir, 0700 );
		}
		mkdir( $upload_dir . '/' . $folder, 0700 );
		
		foreach ( $rev_list as $rev_slider ) {
			file_put_contents( WP_CONTENT_DIR . '/uploads/' . $dir_name . '/' . $folder . '/' . $rev_slider, file_get_contents( $this->importURI . '/' . $folder . '/revslider/' . $rev_slider ) );
		}
	}
	
	public function rev_slider_import( $folder ) {
		$this->create_rev_slider_files( $folder );
		
		$rev_sliders   = $this->rev_sliders();
		$dir_name      = $this->revSliderFolder;
		$absolute_path = __FILE__;
		$path_to_file  = explode( 'wp-content', $absolute_path );
		$path_to_wp    = $path_to_file[0];
		
		require_once( $path_to_wp . '/wp-load.php' );
		require_once( $path_to_wp . '/wp-includes/functions.php' );
		require_once( $path_to_wp . '/wp-admin/includes/file.php' );
		
		$rev_slider_instance = new RevSlider();
		
		foreach ( $rev_sliders as $rev_slider ) {
			$nf = WP_CONTENT_DIR . '/uploads/' . $dir_name . '/' . $folder . '/' . $rev_slider;
			$rev_slider_instance->importSliderFromPost( true, true, $nf );
		}
	}

	public function file_options( $file ) {
		$file_content = $this->qode_file_contents( $file );
		if ( $file_content ) {
			$unserialized_content = unserialize( base64_decode( $file_content ) );
			if ( $unserialized_content ) {
				return $unserialized_content;
			}
		}

		return false;
	}

	function qode_file_contents( $path ) {
		$url      = $this->importURI . $path;
		$response = wp_remote_get( $url );
		$body     = wp_remote_retrieve_body( $response );

		return $body;
	}

	function qode_admin_import() {
		if ( qode_core_theme_installed() ) {
			global $ultima_qodef_Framework;

			$slug           = "_tabimport";
			$this->pagehook = add_submenu_page(
				'ultima_qodef_theme_menu',
				'Select Options - Select Import',                   // The value used to populate the browser's title bar when the menu page is active
				'Import',                   // The text of the menu in the administrator's sidebar
				'administrator',                  // What roles are able to access the menu
				'ultima_qodef_theme_menu' . $slug,                // The ID used to bind submenu items to this menu
				array( $ultima_qodef_Framework->getSkin(), 'renderImport' )
			);

			add_action( 'admin_print_scripts-' . $this->pagehook, 'ultima_qodef_enqueue_admin_scripts' );
			add_action( 'admin_print_styles-' . $this->pagehook, 'ultima_qodef_enqueue_admin_styles' );
		}
	}

	// fixme - begin ///////////////////////////////////////////////////////////////////////////////////////////////////

	function update_meta_fields_after_import( $folder ) {
		global $wpdb;

		$url       = home_url( '/' );
		$demo_urls = $this->import_get_demo_urls( $folder );

		foreach ( $demo_urls as $demo_url ) {
			$sql_query   = "SELECT meta_id, meta_value FROM wp_postmeta WHERE meta_key LIKE 'qodef%' AND meta_value LIKE '" . esc_url( $demo_url ) . "%';";
			$meta_values = $wpdb->get_results( $sql_query );

			if ( ! empty( $meta_values ) ) {
				foreach ( $meta_values as $meta_value ) {
					$new_value = $this->recalc_serialized_lengths( str_replace( $demo_url, $url, $meta_value->meta_value ) );
					$wpdb->update( $wpdb->postmeta, array( 'meta_value' => $new_value ), array( 'meta_id' => $meta_value->meta_id ) );
				}
			}
		}
	}

	function update_options_after_import( $folder ) {
		$url       = home_url( '/' );
		$demo_urls = $this->import_get_demo_urls( $folder );

		foreach ( $demo_urls as $demo_url ) {
			$global_options    = get_option( 'qode_options_ultima' );
			$new_global_values = str_replace( $demo_url, $url, $global_options );

			update_option( 'qode_options_ultima', $new_global_values );
		}
	}

	function import_get_demo_urls( $folder ) {
		$demo_urls  = array();
		$domain_url = defined( 'QODE_PROFILE_SLUG' ) ? str_replace( '/', '', $folder ) . '.' . QODE_PROFILE_SLUG . '-themes.com/' : '';

		$demo_urls[] = ! empty( $domain_url ) ? 'http://' . $domain_url : '';
		$demo_urls[] = ! empty( $domain_url ) ? 'https://' . $domain_url : '';

		return $demo_urls;
	}

	function recalc_serialized_lengths( $sObject ) {
		$ret = preg_replace_callback( '!s:(\d+):"(.*?)";!', array( $this, 'recalc_serialized_lengths_callback' ), $sObject );

		return $ret;
	}

	function recalc_serialized_lengths_callback( $matches ) {
		return "s:" . strlen( $matches[2] ) . ":\"$matches[2]\";";
	}

	// fixme - end /////////////////////////////////////////////////////////////////////////////////////////////////////
}

function qode_init_import_object() {
	global $ultima_qodef_import_object;
	$ultima_qodef_import_object = new UltimaQodefImport();
}

add_action( 'init', 'qode_init_import_object' );

if ( ! function_exists( 'ultima_qodef_dataImport' ) ) {
	function ultima_qodef_dataImport() {
		global $ultima_qodef_import_object;

		if ( $_POST['import_attachments'] == 1 ) {
			$ultima_qodef_import_object->attachments = true;
		} else {
			$ultima_qodef_import_object->attachments = false;
		}

		$folder = "ultima/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}

		$ultima_qodef_import_object->import_content( $folder . $_POST['xml'] );

        $ultima_qodef_import_object->update_meta_fields_after_import( $folder );

		die();
	}

	add_action( 'wp_ajax_qode_dataImport', 'ultima_qodef_dataImport' );
}

if ( ! function_exists( 'ultima_qodef_widgetsImport' ) ) {
	function ultima_qodef_widgetsImport() {
		global $ultima_qodef_import_object;

		$folder = "ultima/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}

		$ultima_qodef_import_object->import_widgets( $folder . 'widgets.txt', $folder . 'custom_sidebars.txt' );

		die();
	}

	add_action( 'wp_ajax_qode_widgetsImport', 'ultima_qodef_widgetsImport' );
}

if ( ! function_exists( 'ultima_qodef_optionsImport' ) ) {
	function ultima_qodef_optionsImport() {
		global $ultima_qodef_import_object;

		$folder = "ultima/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}

		$ultima_qodef_import_object->import_options( $folder . 'options.txt' );

        $ultima_qodef_import_object->update_options_after_import( $folder );

		die();
	}

	add_action( 'wp_ajax_qode_optionsImport', 'ultima_qodef_optionsImport' );
}

if ( ! function_exists( 'ultima_qodef_otherImport' ) ) {
	function ultima_qodef_otherImport() {
		global $ultima_qodef_import_object;

		$folder = "ultima/";

		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}

		$ultima_qodef_import_object->import_options( $folder . 'options.txt' );
		$ultima_qodef_import_object->import_widgets( $folder . 'widgets.txt', $folder . 'custom_sidebars.txt' );
		$ultima_qodef_import_object->import_menus( $folder . 'menus.txt' );
		$ultima_qodef_import_object->import_settings_pages( $folder . 'settingpages.txt' );

		$ultima_qodef_import_object->update_meta_fields_after_import( $folder );
		$ultima_qodef_import_object->update_options_after_import( $folder );
		
		if ( qode_core_is_rev_slider_installed() ) {
			$ultima_qodef_import_object->rev_slider_import( $folder );
		}

		die();
	}

	add_action( 'wp_ajax_qode_otherImport', 'ultima_qodef_otherImport' );
}