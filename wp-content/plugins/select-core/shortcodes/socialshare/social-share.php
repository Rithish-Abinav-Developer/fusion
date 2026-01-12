<?php
namespace UltimaQodef\Modules\Shortcodes\SocialShare;

use UltimaQodef\Modules\Shortcodes\Lib\ShortcodeInterface;

class SocialShare implements ShortcodeInterface {

    private $base;
    private $socialNetworks;

    function __construct() {
        $this->base           = 'qodef_social_share';
        $this->socialNetworks = array(
            'facebook',
            'twitter',
            'linkedin',
            'tumblr',
            'pinterest',
            'vk'
        );
        add_action('vc_before_init', array($this, 'vcMap'));
    }

    /**
     * Returns base for shortcode
     * @return string
     */
    public function getBase() {
        return $this->base;
    }

    public function getSocialNetworks() {
        return $this->socialNetworks;
    }

    /**
     * Maps shortcode to Visual Composer. Hooked on vc_before_init
     */
    public function vcMap() {

        vc_map(array(
            'name'                      => esc_html__('Select Social Share', 'select-core'),
            'base'                      => $this->getBase(),
            'icon'                      => 'icon-wpb-social-share extended-custom-icon',
            'category'                  => esc_html__('by SELECT', 'select-core'),
            'allowed_container_element' => 'vc_row',
            'params'                    => array(
                array(
                    'type'        => 'dropdown',
                    'heading'     => esc_html__('Type', 'select-core'),
                    'param_name'  => 'type',
                    'admin_label' => true,
                    'description' => esc_html__('Choose type of Social Share', 'select-core'),
                    'value'       => array(
                        esc_html__('List', 'select-core')     => 'list',
                        esc_html__('Dropdown', 'select-core') => 'dropdown'
                    ),
                    'save_always' => true
                ),
                array(
                    'type'        => 'dropdown',
                    'heading'     => esc_html__('Icons Type', 'select-core'),
                    'param_name'  => 'icon_type',
                    'admin_label' => true,
                    'description' => esc_html__('Choose type of Icons', 'select-core'),
                    'value'       => array(
                        esc_html__('Normal', 'select-core') => 'normal',
                        esc_html__('Circle', 'select-core') => 'circle'
                    ),
                    'save_always' => true
                ),
            )
        ));
    }

    /**
     * Renders shortcodes HTML
     *
     * @param $atts array of shortcode params
     * @param $content string shortcode content
     *
     * @return string
     */
    public function render($atts, $content = null) {

        $args = array(
            'type'      => 'list',
            'icon_type' => 'normal'
        );

        //Shortcode Parameters
        $params = shortcode_atts($args, $atts);

        //Is social share enabled
        $params['enable_social_share'] = (ultima_qodef_options()->getOptionValue('enable_social_share') == 'yes') ? true : false;

        //Is social share enabled for post type
        $post_type         = get_post_type();
        $params['enabled'] = (ultima_qodef_options()->getOptionValue('enable_social_share_on_'.$post_type) == 'yes') ? true : false;

        //Social Networks Data
        $params['networks'] = $this->getSocialNetworksParams($params);

        //Social Networks Number
        $params['number'] = $this->getSocialNetworksCount($params);

        $html = '';

        if($params['enable_social_share']) {
            if($params['enabled']) {
                $html .= select_core_get_shortcode_template_part('templates/'.$params['type'], 'socialshare', '', $params);
            }
        }

        return $html;

    }

    /**
     * Get Social Networks data to display
     * @return array
     */
    private function getSocialNetworksParams($params) {

        $networks   = array();
        $icons_type = $params['icon_type'];

        foreach($this->socialNetworks as $net) {

            $html = '';
            if(ultima_qodef_options()->getOptionValue('enable_'.$net.'_share') == 'yes') {

                $image                 = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                $params                = array(
                    'name' => $net
                );
                $params['link']        = $this->getSocialNetworkShareLink($net, $image);
                $params['icon']        = $this->getSocialNetworkIcon($net, $icons_type);
                $params['data_value']  = $this->getSocialNetworkLabel($net);
                $params['custom_icon'] = (ultima_qodef_options()->getOptionValue($net.'_icon')) ? ultima_qodef_options()->getOptionValue($net.'_icon') : '';
                $html                  = select_core_get_shortcode_template_part('templates/parts/network', 'socialshare', '', $params);

            }

            $networks[$net] = $html;

        }

        return $networks;

    }

    /**
     * Get Social Networks number of active networks
     * @return int
     */
    private function getSocialNetworksCount($params) {
        $total = 0;

        foreach($this->socialNetworks as $net) {
            if(ultima_qodef_options()->getOptionValue('enable_'.$net.'_share') == 'yes') {
                $total++;
            }
        }

        return $total;
    }

    /**
     * Get share link for networks
     *
     * @param $net
     * @param $image
     *
     * @return string
     */
    private function getSocialNetworkShareLink($net, $image) {
	    $image = ! empty( $image ) && isset( $image[0] ) ? $image : array('');
	    switch ($net) {
		    case 'facebook':
			    if (wp_is_mobile()) {
				    $link = 'window.open(\'http://m.facebook.com/sharer.php?u=' . urlencode(get_permalink()) . '\');';
			    } else {
				    $link = 'window.open(\'http://www.facebook.com/sharer.php?u=' . urlencode(get_permalink()) . '\', \'sharer\', \'toolbar=0,status=0,width=620,height=280\');';
			    }
			    break;
		    case 'twitter':
			    $count_char = is_ssl() ? 23 : 22;
			    $twitter_via_option_val = ultima_qodef_options()->getOptionValue('twitter_via');
			    $twitter_via = '' !== $twitter_via_option_val ? esc_attr__( ' via ', 'select-core' ) . esc_attr( $twitter_via_option_val ) : '';
			    $link = 'window.open(\'https://twitter.com/intent/tweet?text=' . urlencode( ultima_qodef_the_excerpt_max_charlength( $count_char ) . $twitter_via ) . get_permalink() . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');';
			    break;
		    case 'linkedin':
			    $link = 'popUp=window.open(\'https://linkedin.com/shareArticle?mini=true&amp;url=' . urlencode(get_permalink()) . '&amp;title=' . urlencode(get_the_title()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;';
			    break;
		    case 'tumblr':
			    $link = 'popUp=window.open(\'https://www.tumblr.com/share/link?url=' . urlencode(get_permalink()) . '&amp;name=' . urlencode(get_the_title()) . '&amp;description=' . urlencode(get_the_excerpt()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;';
			    break;
		    case 'pinterest':
			    $link = 'popUp=window.open(\'https://pinterest.com/pin/create/button/?url=' . urlencode(get_permalink()) . '&amp;description=' . urlencode(get_the_title()) . '&amp;media=' . urlencode($image[0]) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;';
			    break;
		    case 'vk':
			    $link = 'popUp=window.open(\'https://vkontakte.ru/share.php?url=' . urlencode(get_permalink()) . '&amp;title=' . urlencode(get_the_title()) . '&amp;description=' . urlencode(get_the_excerpt()) . '&amp;image=' . urlencode($image[0]) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;';
			    break;
		    default:
			    $link = '';
	    }
	
	    return $link;
    }

    private function getSocialNetworkIcon($net, $type) {

        switch($net) {
            case 'facebook':
                $icon = ($type == 'circle') ? 'social_facebook_circle' : 'social_facebook';
                break;
            case 'twitter':
                $icon = ($type == 'circle') ? 'social_twitter_circle' : 'social_twitter';
                break;
            case 'linkedin':
                $icon = ($type == 'circle') ? 'social_linkedin_circle' : 'social_linkedin';
                break;
            case 'tumblr':
                $icon = ($type == 'circle') ? 'social_tumblr_circle' : 'social_tumblr';
                break;
            case 'pinterest':
                $icon = ($type == 'circle') ? 'social_pinterest_circle' : 'social_pinterest';
                break;
            case 'vk':
                $icon = 'fa fa-vk';
                break;
            default:
                $icon = '';
        }

        return $icon;

    }

    private function getSocialNetworkLabel($net) {
        $socialData = array();
        switch($net) {
            case 'facebook':
                $label = esc_html__("Share on Facebook", "ultima");
                break;
            case 'twitter':
                $label = esc_html__("Share on Twitter", "ultima");
                break;
            case 'linkedin':
                $label = esc_html__("Share on Linkedin", "ultima");
                break;
            case 'tumblr':
                $label = esc_html__("Share on Tumblr", "ultima");
                break;
            case 'pinterest':
                $label = esc_html__("Share on Pinterest", "ultima");
                break;
            case 'vk':
                $label = esc_html__("Share on Vk", "ultima");
                break;
            default:
                $label = "";
        }

        $socialData['data-label'] = $label;

        return $socialData;
    }

}