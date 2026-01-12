<?php

/*
   Interface: iUltimaQodefLayoutNode
   A interface that implements Layout Node methods
*/

interface iUltimaQodefLayoutNode {
	public function hasChidren();

	public function getChild( $key );

	public function addChild( $key, $value );
}

/*
   Interface: iUltimaQodefRender
   A interface that implements Render methods
*/

interface iUltimaQodefRender {
	public function render( $factory );
}

/*
   Class: UltimaQodefPanel
   A class that initializes Qode Panel
*/

class UltimaQodefPanel implements iUltimaQodefLayoutNode, iUltimaQodefRender {

	public $children;
	public $title;
	public $name;
	public $hidden_property;
	public $hidden_value;
	public $hidden_values;

	function __construct( $title_label = "", $name = "", $hidden_property = "", $hidden_value = "", $hidden_values = array() ) {
		$this->children        = array();
		$this->title           = $title_label;
		$this->name            = $name;
		$this->hidden_property = $hidden_property;
		$this->hidden_value    = $hidden_value;
		$this->hidden_values   = $hidden_values;
	}

	public function hasChidren() {
		return is_array( $this->children ) && count( $this->children ) > 0;
	}

	public function getChild( $key ) {
		return $this->children[ $key ];
	}

	public function addChild( $key, $value ) {
		$this->children[ $key ] = $value;
	}

	public function render( $factory ) {
		$hidden = false;
		if ( ! empty( $this->hidden_property ) ) {
			if ( ultima_qodef_option_get_value( $this->hidden_property ) == $this->hidden_value ) {
				$hidden = true;
			} else {
				foreach ( $this->hidden_values as $value ) {
					if ( ultima_qodef_option_get_value( $this->hidden_property ) == $value ) {
						$hidden = true;
					}

				}
			}
		}
		?>
        <div class="qodef-page-form-section-holder" id="qodef_<?php echo esc_attr( $this->name ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>
            <h3 class="qodef-page-section-title"><?php echo esc_html( $this->title ); ?></h3>
			<?php
			foreach ( $this->children as $child ) {
				$this->renderChild( $child, $factory );
			}
			?>
        </div>
		<?php
	}

	public function renderChild( iUltimaQodefRender $child, $factory ) {
		$child->render( $factory );
	}
}

/*
   Class: UltimaQodefContainer
   A class that initializes Qode Container
*/

class UltimaQodefContainer implements iUltimaQodefLayoutNode, iUltimaQodefRender {

	public $children;
	public $name;
	public $hidden_property;
	public $hidden_value;
	public $hidden_values;

	function __construct( $name = "", $hidden_property = "", $hidden_value = "", $hidden_values = array() ) {
		$this->children        = array();
		$this->name            = $name;
		$this->hidden_property = $hidden_property;
		$this->hidden_value    = $hidden_value;
		$this->hidden_values   = $hidden_values;
	}

	public function hasChidren() {
		return is_array( $this->children ) && count( $this->children ) > 0;
	}

	public function getChild( $key ) {
		return $this->children[ $key ];
	}

	public function addChild( $key, $value ) {
		$this->children[ $key ] = $value;
	}

	public function render( $factory ) {
		$hidden = false;
		if ( ! empty( $this->hidden_property ) ) {
			if ( ultima_qodef_option_get_value( $this->hidden_property ) == $this->hidden_value ) {
				$hidden = true;
			} else {
				foreach ( $this->hidden_values as $value ) {
					if ( ultima_qodef_option_get_value( $this->hidden_property ) == $value ) {
						$hidden = true;
					}

				}
			}
		}
		?>
        <div class="qodef-page-form-container-holder" id="qodef_<?php echo esc_attr( $this->name ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>
			<?php
			foreach ( $this->children as $child ) {
				$this->renderChild( $child, $factory );
			}
			?>
        </div>
		<?php
	}

	public function renderChild( iUltimaQodefRender $child, $factory ) {
		$child->render( $factory );
	}
}


/*
   Class: UltimaQodefContainerNoStyle
   A class that initializes Qode Container without css classes
*/

class UltimaQodefContainerNoStyle implements iUltimaQodefLayoutNode, iUltimaQodefRender {

	public $children;
	public $name;
	public $hidden_property;
	public $hidden_value;
	public $hidden_values;

	function __construct( $name = "", $hidden_property = "", $hidden_value = "", $hidden_values = array() ) {
		$this->children        = array();
		$this->name            = $name;
		$this->hidden_property = $hidden_property;
		$this->hidden_value    = $hidden_value;
		$this->hidden_values   = $hidden_values;
	}

	public function hasChidren() {
		return is_array( $this->children ) && count( $this->children ) > 0;
	}

	public function getChild( $key ) {
		return $this->children[ $key ];
	}

	public function addChild( $key, $value ) {
		$this->children[ $key ] = $value;
	}

	public function render( $factory ) {
		$hidden = false;
		if ( ! empty( $this->hidden_property ) ) {
			if ( ultima_qodef_option_get_value( $this->hidden_property ) == $this->hidden_value ) {
				$hidden = true;
			} else {
				foreach ( $this->hidden_values as $value ) {
					if ( ultima_qodef_option_get_value( $this->hidden_property ) == $value ) {
						$hidden = true;
					}

				}
			}
		}
		?>
        <div id="qodef_<?php echo esc_attr( $this->name ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>
			<?php
			foreach ( $this->children as $child ) {
				$this->renderChild( $child, $factory );
			}
			?>
        </div>
		<?php
	}

	public function renderChild( iUltimaQodefRender $child, $factory ) {
		$child->render( $factory );
	}
}

/*
   Class: UltimaQodefGroup
   A class that initializes Qode Group
*/

class UltimaQodefGroup implements iUltimaQodefLayoutNode, iUltimaQodefRender {

	public $children;
	public $title;
	public $description;

	function __construct( $title_label = "", $description = "" ) {
		$this->children    = array();
		$this->title       = $title_label;
		$this->description = $description;
	}

	public function hasChidren() {
		return is_array( $this->children ) && count( $this->children ) > 0;
	}

	public function getChild( $key ) {
		return $this->children[ $key ];
	}

	public function addChild( $key, $value ) {
		$this->children[ $key ] = $value;
	}

	public function render( $factory ) {
		?>

        <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $this->title ); ?></h4>

                <p><?php echo esc_html( $this->description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
					<?php
					foreach ( $this->children as $child ) {
						$this->renderChild( $child, $factory );
					}
					?>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php
	}

	public function renderChild( iUltimaQodefRender $child, $factory ) {
		$child->render( $factory );
	}
}

/*
   Class: UltimaQodefNotice
   A class that initializes Qode Notice
*/

class UltimaQodefNotice implements iUltimaQodefRender {

	public $children;
	public $title;
	public $description;
	public $notice;
	public $hidden_property;
	public $hidden_value;
	public $hidden_values;

	function __construct( $title_label = "", $description = "", $notice = "", $hidden_property = "", $hidden_value = "", $hidden_values = array() ) {
		$this->children        = array();
		$this->title           = $title_label;
		$this->description     = $description;
		$this->notice          = $notice;
		$this->hidden_property = $hidden_property;
		$this->hidden_value    = $hidden_value;
		$this->hidden_values   = $hidden_values;
	}

	public function render( $factory ) {
		$hidden = false;
		if ( ! empty( $this->hidden_property ) ) {
			if ( ultima_qodef_option_get_value( $this->hidden_property ) == $this->hidden_value ) {
				$hidden = true;
			} else {
				foreach ( $this->hidden_values as $value ) {
					if ( ultima_qodef_option_get_value( $this->hidden_property ) == $value ) {
						$hidden = true;
					}

				}
			}
		}
		?>

        <div class="qodef-page-form-section"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $this->title ); ?></h4>

                <p><?php echo esc_html( $this->description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="alert alert-warning">
						<?php echo esc_html( $this->notice ); ?>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php
	}
}

/*
   Class: UltimaQodefRow
   A class that initializes Qode Row
*/

class UltimaQodefRow implements iUltimaQodefLayoutNode, iUltimaQodefRender {

	public $children;
	public $next;

	function __construct( $next = false ) {
		$this->children = array();
		$this->next     = $next;
	}

	public function hasChidren() {
		return is_array( $this->children ) && count( $this->children ) > 0;
	}

	public function getChild( $key ) {
		return $this->children[ $key ];
	}

	public function addChild( $key, $value ) {
		$this->children[ $key ] = $value;
	}

	public function render( $factory ) {
		?>
        <div class="row<?php if ( $this->next ) {
			echo " next-row";
		} ?>">
			<?php
			foreach ( $this->children as $child ) {
				$this->renderChild( $child, $factory );
			}
			?>
        </div>
		<?php
	}

	public function renderChild( iUltimaQodefRender $child, $factory ) {
		$child->render( $factory );
	}
}

/*
   Class: UltimaQodefTitle
   A class that initializes Qode Title
*/

class UltimaQodefTitle implements iUltimaQodefRender {
	private $name;
	private $title;
	public $hidden_property;
	public $hidden_values = array();

	function __construct( $name = "", $title_label = "", $hidden_property = "", $hidden_value = "" ) {
		$this->title           = $title_label;
		$this->name            = $name;
		$this->hidden_property = $hidden_property;
		$this->hidden_value    = $hidden_value;
	}

	public function render( $factory ) {
		$hidden = false;
		if ( ! empty( $this->hidden_property ) ) {
			if ( ultima_qodef_option_get_value( $this->hidden_property ) == $this->hidden_value ) {
				$hidden = true;
			}
		}
		?>
        <h5 class="qodef-page-section-subtitle" id="qodef_<?php echo esc_attr( $this->name ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>><?php echo esc_html( $this->title ); ?></h5>
		<?php
	}
}

/*
   Class: UltimaQodefField
   A class that initializes Qode Field
*/

class UltimaQodefField implements iUltimaQodefRender {
	private $type;
	private $name;
	private $default_value;
	private $label;
	private $description;
	private $options = array();
	private $args = array();
	public $hidden_property;
	public $hidden_values = array();


	function __construct( $type, $name, $default_value = "", $label = "", $description = "", $options = array(), $args = array(), $hidden_property = "", $hidden_values = array() ) {
		global $ultima_qodef_Framework;
		$this->type            = $type;
		$this->name            = $name;
		$this->default_value   = $default_value;
		$this->label           = $label;
		$this->description     = $description;
		$this->options         = $options;
		$this->args            = $args;
		$this->hidden_property = $hidden_property;
		$this->hidden_values   = $hidden_values;
		$ultima_qodef_Framework->qodeOptions->addOption( $this->name, $this->default_value, $type );
	}

	public function render( $factory ) {
		$hidden = false;
		if ( ! empty( $this->hidden_property ) ) {
			foreach ( $this->hidden_values as $value ) {
				if ( ultima_qodef_option_get_value( $this->hidden_property ) == $value ) {
					$hidden = true;
				}

			}
		}
		$factory->render( $this->type, $this->name, $this->label, $this->description, $this->options, $this->args, $hidden );
	}
}

/*
   Class: UltimaQodefMetaField
   A class that initializes Qode Meta Field
*/

class UltimaQodefMetaField implements iUltimaQodefRender {
	private $type;
	private $name;
	private $default_value;
	private $label;
	private $description;
	private $options = array();
	private $args = array();
	public $hidden_property;
	public $hidden_values = array();


	function __construct( $type, $name, $default_value = "", $label = "", $description = "", $options = array(), $args = array(), $hidden_property = "", $hidden_values = array() ) {
		global $ultima_qodef_Framework;
		$this->type            = $type;
		$this->name            = $name;
		$this->default_value   = $default_value;
		$this->label           = $label;
		$this->description     = $description;
		$this->options         = $options;
		$this->args            = $args;
		$this->hidden_property = $hidden_property;
		$this->hidden_values   = $hidden_values;
		$ultima_qodef_Framework->qodeMetaBoxes->addOption( $this->name, $this->default_value );
	}

	public function render( $factory ) {
		$hidden = false;
		if ( ! empty( $this->hidden_property ) ) {
			foreach ( $this->hidden_values as $value ) {
				if ( ultima_qodef_option_get_value( $this->hidden_property ) == $value ) {
					$hidden = true;
				}

			}
		}
		$factory->render( $this->type, $this->name, $this->label, $this->description, $this->options, $this->args, $hidden );
	}
}

abstract class UltimaQodefFieldType {

	abstract public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false );

}

class UltimaQodefFieldText extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		$col_width = 12;
		if ( isset( $args["col_width"] ) ) {
			$col_width = $args["col_width"];
		}

		$suffix = ! empty( $args['suffix'] ) ? $args['suffix'] : false;

		$class = '';

		if ( ! empty( $repeat ) ) {
			$id    = $name . '-' . $repeat['index'];
			$name  .= '[]';
			$value = $repeat['value'];
			$class = 'qodef-repeater-field';
		} else {
			$id    = $name;
			$value = ultima_qodef_option_get_value( $name );
		}

		?>

        <div class="qodef-page-form-section <?php echo esc_attr( $class ); ?>" id="qodef_<?php echo esc_attr( $id ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-<?php echo esc_attr( $col_width ); ?>">
							<?php if ( $suffix ) : ?>
                            <div class="input-group">
								<?php endif; ?>
                                <input type="text"
                                        class="form-control qodef-input qodef-form-element"
                                        name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( htmlspecialchars( $value ) ); ?>"/>
								<?php if ( $suffix ) : ?>
                                    <div class="input-group-addon"><?php echo esc_html( $args['suffix'] ); ?></div>
								<?php endif; ?>
								<?php if ( $suffix ) : ?>
                            </div>
						<?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldTextSimple extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {

		$suffix = ! empty( $args['suffix'] ) ? $args['suffix'] : false;
		$class  = '';

		if ( ! empty( $repeat ) ) {
			$id    = str_replace( array( '[', ']' ), '', $name ) . '-' . rand();
			$name  .= '[]';
			$value = $repeat['value'];
			$class = 'qodef-repeater-field';
		} else {
			$id    = $name;
			$value = ultima_qodef_option_get_value( $name );
		}

		?>


        <div class="col-lg-3 <?php echo esc_attr( $class ); ?>" id="qodef_<?php echo esc_attr( $id ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>
            <em class="qodef-field-description"><?php echo esc_html( $label ); ?></em>
			<?php if ( $suffix ) : ?>
            <div class="input-group">
				<?php endif; ?>
                <input type="text"
                        class="form-control qodef-input qodef-form-element"
                        name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( htmlspecialchars( $value ) ); ?>"/>
				<?php if ( $suffix ) : ?>
                    <div class="input-group-addon"><?php echo esc_html( $args['suffix'] ); ?></div>
				<?php endif; ?>
				<?php if ( $suffix ) : ?>
            </div>
		<?php endif; ?>
        </div>
		<?php

	}

}

class UltimaQodefFieldTextArea extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		$class = '';

		if ( ! empty( $repeat ) ) {
			$name  .= '[]';
			$value = $repeat['value'];
			$class = 'qodef-repeater-field';
		} else {
			$value = ultima_qodef_option_get_value( $name );
		}

		?>

        <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 <?php echo esc_attr( $class ); ?>">
							<textarea class="form-control qodef-form-element"
                                    name="<?php echo esc_attr( $name ); ?>"
                                    rows="5"><?php echo esc_html( htmlspecialchars( $value ) ); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldTextAreaHtml extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		$class = '';

		if ( ! empty( $repeat ) ) {
			$name  .= '[]';
			$value = $repeat['value'];
			$class = 'qodef-repeater-field';
		} else {
			$value = ultima_qodef_option_get_value( $name );
		}

		?>

        <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 <?php echo esc_attr( $class ); ?>">
							<?php wp_editor( $value, esc_attr( $name ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldTextAreaSimple extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		$class = '';

		if ( ! empty( $repeat ) ) {
			$name  .= '[]';
			$value = $repeat['value'];
			$class = 'qodef-repeater-field';
		} else {
			$value = ultima_qodef_option_get_value( $name );
		}

		?>

        <div class="col-lg-3 <?php echo esc_attr( $class ); ?>">
            <em class="qodef-field-description"><?php echo esc_html( $label ); ?></em>
            <textarea class="form-control qodef-form-element"
                    name="<?php echo esc_attr( $name ); ?>"
                    rows="5"><?php echo esc_html( $value ); ?></textarea>
        </div>
		<?php

	}

}

class UltimaQodefFieldColor extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		$class = '';

		if ( ! empty( $repeat ) ) {
			$id    = $name . '-' . $repeat['index'];
			$name  .= '[]';
			$value = $repeat['value'];
			$class = 'qodef-repeater-field';
		} else {
			$id    = $name;
			$value = ultima_qodef_option_get_value( $name );
		}

		?>

        <div class="qodef-page-form-section <?php echo esc_attr( $class ); ?>" id="qodef_<?php echo esc_attr( $id ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $value ); ?>" class="my-color-field"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldColorSimple extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		$class = '';

		if ( ! empty( $repeat ) ) {
			$id    = $name . '-' . $repeat['index'];
			$name  .= '[]';
			$value = $repeat['value'];
			$class = 'qodef-repeater-field';
		} else {
			$id    = $name;
			$value = ultima_qodef_option_get_value( $name );
		}

		?>

        <div class="col-lg-3 <?php echo esc_attr( $class ); ?>" id="qodef_<?php echo esc_attr( $id ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>
            <em class="qodef-field-description"><?php echo esc_html( $label ); ?></em>
            <input type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $value ); ?>" class="my-color-field"/>
        </div>
		<?php

	}

}

class UltimaQodefFieldImage extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		$class = '';

		if ( ! empty( $repeat ) ) {
			$name      .= '[]';
			$value     = $repeat['value'];
			$class     = 'qodef-repeater-field';
			$has_value = empty( $value ) ? false : true;
		} else {
			$value     = ultima_qodef_option_get_value( $name );
			$has_value = ultima_qodef_option_has_value( $name );
		}

		?>

        <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 <?php echo esc_attr( $class ); ?>">
                            <div class="qodef-media-uploader">
                                <div<?php if ( ! $has_value ) { ?> style="display: none"<?php } ?>
                                        class="qodef-media-image-holder">
                                    <img src="<?php if ( $has_value ) {
										echo esc_url( ultima_qodef_get_attachment_thumb_url( $value ) );
									} ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'ultima' ); ?>"
                                            class="qodef-media-image img-thumbnail"/>
                                </div>
                                <div style="display: none"
                                        class="qodef-media-meta-fields">
                                    <input type="hidden" class="qodef-media-upload-url"
                                            name="<?php echo esc_attr( $name ); ?>"
                                            value="<?php echo esc_attr( $value ); ?>"/>
                                </div>
                                <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                        href="javascript:void(0)"
                                        data-frame-title="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"
                                        data-frame-button-text="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                                <a style="display: none;" href="javascript: void(0)"
                                        class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'ultima' ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldImageSimple extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		$class = '';

		if ( ! empty( $repeat ) ) {
			$id        = $name . '-' . $repeat['index'];
			$name      .= '[]';
			$value     = $repeat['value'];
			$class     = 'qodef-repeater-field';
			$has_value = empty( $value ) ? false : true;
		} else {
			$id        = $name;
			$value     = ultima_qodef_option_get_value( $name );
			$has_value = ultima_qodef_option_has_value( $name );
		}

		?>


        <div class="col-lg-3 <?php echo esc_attr( $class ); ?>" id="qodef_<?php echo esc_attr( $id ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>
            <em class="qodef-field-description"><?php echo esc_html( $label ); ?></em>
            <div class="qodef-media-uploader">
                <div<?php if ( ! $has_value ) { ?> style="display: none"<?php } ?>
                        class="qodef-media-image-holder">
                    <img src="<?php if ( $has_value ) {
						echo esc_url( ultima_qodef_get_attachment_thumb_url( $value ) );
					} ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'ultima' ); ?>"
                            class="qodef-media-image img-thumbnail"/>
                </div>
                <div style="display: none"
                        class="qodef-media-meta-fields">
                    <input type="hidden" class="qodef-media-upload-url"
                            name="<?php echo esc_attr( $name ); ?>"
                            value="<?php echo esc_attr( $value ); ?>"/>
                </div>
                <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                        href="javascript:void(0)"
                        data-frame-title="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"
                        data-frame-button-text="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                <a style="display: none;" href="javascript: void(0)"
                        class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'ultima' ); ?></a>
            </div>
        </div>
		<?php

	}

}

class UltimaQodefFieldFont extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		global $ultima_qodef_fonts_array;

		$class = '';

		if ( ! empty( $repeat ) ) {
			$name  .= '[]';
			$value = $repeat['value'];
			$class = 'qodef-repeater-field';
		} else {
			$value = ultima_qodef_option_get_value( $name );
		}
		?>

        <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 <?php echo esc_attr( $class ); ?>">
                            <select class="form-control qodef-form-element"
                                    name="<?php echo esc_attr( $name ); ?>">
                                <option value="-1"><?php esc_html_e( 'Default', 'ultima' ); ?></option>
								<?php foreach ( $ultima_qodef_fonts_array as $fontArray ) { ?>
                                    <option <?php if ( $value == str_replace( ' ', '+', $fontArray["family"] ) ) {
										echo "selected='selected'";
									} ?> value="<?php echo esc_attr( str_replace( ' ', '+', $fontArray["family"] ) ); ?>"><?php echo esc_html( $fontArray["family"] ); ?></option>
								<?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldFontSimple extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		global $ultima_qodef_fonts_array;

		$class = '';

		if ( ! empty( $repeat ) ) {
			$name  .= '[]';
			$value = $repeat['value'];
			$class = 'qodef-repeater-field';
		} else {
			$value = ultima_qodef_option_get_value( $name );
		}
		?>


        <div class="col-lg-3 <?php echo esc_attr( $class ); ?>">
            <em class="qodef-field-description"><?php echo esc_html( $label ); ?></em>
            <select class="form-control qodef-form-element"
                    name="<?php echo esc_attr( $name ); ?>">
                <option value="-1"><?php esc_html_e( 'Default', 'ultima' ); ?></option>
				<?php foreach ( $ultima_qodef_fonts_array as $fontArray ) { ?>
                    <option <?php if ( $value == str_replace( ' ', '+', $fontArray["family"] ) ) {
						echo "selected='selected'";
					} ?> value="<?php echo esc_attr( str_replace( ' ', '+', $fontArray["family"] ) ); ?>"><?php echo esc_html( $fontArray["family"] ); ?></option>
				<?php } ?>
            </select>
        </div>
		<?php

	}

}

class UltimaQodefFieldSelect extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {

		$class = '';

		if ( ! empty( $repeat ) ) {
			$id     = $name . '-' . $repeat['index'];
			$name   .= '[]';
			$rvalue = $repeat['value'];
			$class  = 'qodef-repeater-field';
		} else {
			$id     = $name;
			$rvalue = ultima_qodef_option_get_value( $name );
		}

		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$show = array();
		if ( isset( $args["show"] ) ) {
			$show = $args["show"];
		}
		$hide = array();
		if ( isset( $args["hide"] ) ) {
			$hide = $args["hide"];
		}
		?>

        <div class="qodef-page-form-section <?php echo esc_attr( $class ); ?>" id="qodef_<?php echo esc_attr( $id ); ?>" <?php if ( $hidden ) { ?> style="display: none"<?php } ?>>


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <select class="form-control qodef-form-element<?php if ( $dependence ) {
								echo " dependence";
							} ?>"
								<?php foreach ( $show as $key => $value ) { ?>
                                    data-show-<?php echo str_replace( ' ', '', $key ); ?>="<?php echo esc_attr( $value ); ?>"
								<?php } ?>
								<?php foreach ( $hide as $key => $value ) { ?>
                                    data-hide-<?php echo str_replace( ' ', '', $key ); ?>="<?php echo esc_attr( $value ); ?>"
								<?php } ?>
                                    name="<?php echo esc_attr( $name ); ?>">
								<?php foreach ( $options as $key => $value ) {
									if ( $key == "-1" ) {
										$key = "";
									} ?>
                                    <option <?php if ( $rvalue == $key ) {
										echo "selected='selected'";
									} ?> value="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $value ); ?></option>
								<?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldSelectBlank extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		global $ultima_qodef_options;

		$class = '';

		if ( ! empty( $repeat ) ) {
			$name   .= '[]';
			$rvalue = $repeat['value'];
			$class  = 'qodef-repeater-field';
		} else {
			$rvalue = ultima_qodef_option_get_value( $name );
		}

		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$show = array();
		if ( isset( $args["show"] ) ) {
			$show = $args["show"];
		}
		$hide = array();
		if ( isset( $args["hide"] ) ) {
			$hide = $args["hide"];
		}
		?>

        <div class="qodef-page-form-section"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content <?php echo esc_attr( $class ); ?>">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <select class="form-control qodef-form-element<?php if ( $dependence ) {
								echo " dependence";
							} ?>"
								<?php foreach ( $show as $key => $value ) { ?>
                                    data-show-<?php echo str_replace( ' ', '', $key ); ?>="<?php echo esc_attr( $value ); ?>"
								<?php } ?>
								<?php foreach ( $hide as $key => $value ) { ?>
                                    data-hide-<?php echo str_replace( ' ', '', $key ); ?>="<?php echo esc_attr( $value ); ?>"
								<?php } ?>
                                    name="<?php echo esc_attr( $name ); ?>">
                                <option <?php if ( $rvalue == "" ) {
									echo "selected='selected'";
								} ?> value=""></option>
								<?php foreach ( $options as $key => $value ) {
									if ( $key == "-1" ) {
										$key = "";
									} ?>
                                    <option <?php if ( $rvalue == $key ) {
										echo "selected='selected'";
									} ?> value="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $value ); ?></option>
								<?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldSelectSimple extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		global $ultima_qodef_options;

		$class = '';
		if ( ! empty( $repeat ) ) {
			$name   .= '[]';
			$rvalue = $repeat['value'];
			$class  = 'qodef-repeater-field';
		} else {
			$rvalue = ultima_qodef_option_get_value( $name );
		}

		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$show = array();
		if ( isset( $args["show"] ) ) {
			$show = $args["show"];
		}
		$hide = array();
		if ( isset( $args["hide"] ) ) {
			$hide = $args["hide"];
		}
		?>


        <div class="col-lg-3 <?php echo esc_attr( $class ); ?>" id="qodef_<?php echo esc_attr( $name ); ?>" <?php if ( $hidden ) { ?> style="display: none"<?php } ?>>
            <em class="qodef-field-description"><?php echo esc_html( $label ); ?></em>
            <select class="form-control qodef-form-element<?php if ( $dependence ) {
				echo " dependence";
			} ?>"
				<?php foreach ( $show as $key => $value ) { ?>
                    data-show-<?php echo str_replace( ' ', '', $key ); ?>="<?php echo esc_attr( $value ); ?>"
				<?php } ?>
				<?php foreach ( $hide as $key => $value ) { ?>
                    data-hide-<?php echo str_replace( ' ', '', $key ); ?>="<?php echo esc_attr( $value ); ?>"
				<?php } ?>
                    name="<?php echo esc_attr( $name ); ?>">
                <option <?php if ( $rvalue == "" ) {
					echo "selected='selected'";
				} ?> value=""></option>
				<?php foreach ( $options as $key => $value ) {
					if ( $key == "-1" ) {
						$key = "";
					} ?>
                    <option <?php if ( $rvalue == $key ) {
						echo "selected='selected'";
					} ?> value="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $value ); ?></option>
				<?php } ?>
            </select>
        </div>
		<?php

	}

}

class UltimaQodefFieldSelectBlankSimple extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		global $ultima_qodef_options;

		$class = '';
		if ( ! empty( $repeat ) ) {
			$name   .= '[]';
			$rvalue = $repeat['value'];
			$class  = 'qodef-repeater-field';
		} else {
			$rvalue = ultima_qodef_option_get_value( $name );
		}

		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$show = array();
		if ( isset( $args["show"] ) ) {
			$show = $args["show"];
		}
		$hide = array();
		if ( isset( $args["hide"] ) ) {
			$hide = $args["hide"];
		}
		?>


        <div class="col-lg-3 <?php echo esc_attr( $class ); ?>">
            <em class="qodef-field-description"><?php echo esc_html( $label ); ?></em>
            <select class="form-control qodef-form-element<?php if ( $dependence ) {
				echo " dependence";
			} ?>"
				<?php foreach ( $show as $key => $value ) { ?>
                    data-show-<?php echo str_replace( ' ', '', $key ); ?>="<?php echo esc_attr( $value ); ?>"
				<?php } ?>
				<?php foreach ( $hide as $key => $value ) { ?>
                    data-hide-<?php echo str_replace( ' ', '', $key ); ?>="<?php echo esc_attr( $value ); ?>"
				<?php } ?>
                    name="<?php echo esc_attr( $name ); ?>">
                <option <?php if ( $rvalue == "" ) {
					echo "selected='selected'";
				} ?> value=""></option>
				<?php foreach ( $options as $key => $value ) {
					if ( $key == "-1" ) {
						$key = "";
					} ?>
                    <option <?php if ( $rvalue == $key ) {
						echo "selected='selected'";
					} ?> value="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $value ); ?></option>
				<?php } ?>
            </select>
        </div>
		<?php

	}

}

class UltimaQodefFieldYesNo extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		global $ultima_qodef_options;

		$class = '';

		if ( ! empty( $repeat ) ) {
			$id     = $name . '-' . $repeat['index'];
			$name   .= '[]';
			$rvalue = $repeat['value'];
			$class  = 'qodef-repeater-field';
		} else {
			$id     = $name;
			$rvalue = ultima_qodef_option_get_value( $name );
		}

		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $id ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 <?php echo esc_attr( $class ); ?>">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( $rvalue == "yes" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Yes', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( $rvalue == "no" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'No', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_yesno" value="yes"<?php if ( $rvalue == "yes" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_yesno" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $rvalue ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}
}

class UltimaQodefFieldYesNoSimple extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {
		global $ultima_qodef_options;

		$class = '';

		if ( ! empty( $repeat ) ) {
			$name   .= '[]';
			$rvalue = $repeat['value'];
			$class  = 'qodef-repeater-field';
		} else {
			$rvalue = ultima_qodef_option_get_value( $name );
		}

		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="col-lg-3 <?php echo esc_attr( $class ); ?>">
            <em class="qodef-field-description"><?php echo esc_html( $label ); ?></em>
            <p class="field switch">
                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                        class="cb-enable<?php if ( $rvalue == "yes" ) {
							echo " selected";
						} ?><?php if ( $dependence ) {
							echo " dependence";
						} ?>"><span><?php esc_html_e( 'Yes', 'ultima' ) ?></span></label>
                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                        class="cb-disable<?php if ( $rvalue == "no" ) {
							echo " selected";
						} ?><?php if ( $dependence ) {
							echo " dependence";
						} ?>"><span><?php esc_html_e( 'No', 'ultima' ) ?></span></label>
                <input type="checkbox" id="checkbox" class="checkbox"
                        name="<?php echo esc_attr( $name ); ?>_yesno" value="yes"<?php if ( $rvalue == "yes" ) {
					echo " selected";
				} ?>/>
                <input type="hidden" class="checkboxhidden_yesno" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $rvalue ); ?>"/>
            </p>
        </div>
		<?php

	}
}