<?php
    /*
    Plugin Name: TW Image Hover effect
    Plugin URI: http://www.taureanwooley.com
    Description: This plugin uses the ability to download as well as share images based on hover effect.
    Author: Taurean Wooley
    Version: 1.0
    Author URI: http://www.taureanwooley.com
    */
    if (!function_exists('twp_admin_actions')) {
        function tw_image_share_admin_actions() {
			add_menu_page(
				'TW Image Sharer', 
				'TW Image Sharer', 
				'manage_options', 
				'tw_image_share_admin',
				'tw_image_share_admin'
			);
		}
        add_action('admin_menu', 'tw_image_share_admin_actions');
        
        function tw_image_share_theme_options(){
            include("views/theme_options.php");
        }
        
        function tw_image_share_enqueue_style() {
			wp_enqueue_style( 'style-name',plugins_url('css/style.css',__FILE__));
		}
		add_action( 'wp_enqueue_scripts', 'tw_image_share_enqueue_style' );
		
		function tw_image_share_header(){
		    $social_urls = array('twitter'=>'http://twitter.com/intent/tweet?status=Quantic%20Image%20Sharer%20-TW_Site+TW_URL',
    					'facebook'=>'http://www.facebook.com/share.php?u=TW_URL&title=Quantic%20Image%20Sharer%20-TW_Site',
    					'reddit'=>'http://www.reddit.com/submit?url=TW_URL&title=Quantic%20Image%20Sharer%20-TW_Site',
   						'google_plus'=>'https://plus.google.com/share?url=TW_URL',
   						'pinterest'=>'https://pinterest.com/pin/create/bookmarklet/?media=TW_URL&url=TW_URL&is_video=false&description=Quantic%20Image%20Sharer%20-TW_Site',
   						'digg'=>'http://digg.com/submit?url=TW_URL&title=Quantic%20Image%20Sharer%20-TW_Site',
   						'tumblr'=>'http://www.tumblr.com/share/link?url=TW_URL&name=Quantic%20Image%20Sharer%20TW_Site&description=Quantic%20Image%20Sharer%20-TW_Site',
   						'stumbleupon'=>'http://www.stumbleupon.com/submit?url=TW_URL&title=Quantic%20Image%20Sharer%20-TW_Site');
            $icons = get_option('tw_social_image_icons');
            if($icons == '') $icons = 'bw-circle';
            
            $pluginurl = plugins_url('icons/png/lg_icon_kit/'.$icons.'/small',__FILE__);
    
		    include_once(plugin_dir_path(__FILE__).'/layout/scripts.php');
		}
		add_action('wp_head','tw_image_share_header');
		
		function tw_image_share_enqueue_scripts() {
            wp_enqueue_script( 'script-name', plugins_url('js/tw_image_share_hover.js',__FILE__), array(), '1.0.0', true );
        }
        add_action( 'wp_enqueue_scripts', 'tw_image_share_enqueue_scripts' );
        
        function tw_image_share_admin() {
            $social_buttons = '';
            if(isset($_POST['tw_social_image_sharer'])){
                delete_option('tw_social_buttons');
                delete_option('tw_menu_alignment');
                delete_option('tw_social_image_icons');
                foreach($_POST['tw_social_image_sharer'] as $k=>$f){
                    $social_buttons .= sanitize_text_field($k).',';
                }
                add_option('tw_social_buttons',$social_buttons);
                add_option('tw_menu_alignment',sanitize_text_field($_POST['tw_social_image_menu']));
                add_option('tw_social_image_icons',str_replace('tw_image_share_','',sanitize_text_field($_POST['tw_social_image_icons'])));
                $selected = explode(',',$social_buttons);
                
                $social_select = array();
                foreach($selected as $f){
                    $social_select[$f] = true;
                }
                $social_menu = $_POST['tw_social_image_menu'];
                $social_icon = $_POST['tw_social_image_icons'];
            } else {
                $social_buttons = get_option('tw_social_buttons');
                $social_menu = get_option('tw_menu_alignment');
                $social_icon = 'tw_image_share_'.get_option('tw_social_image_icons');
                
                $selected = explode(',',$social_buttons);
                
                $social_select = array();
                foreach($selected as $f){
                    $social_select[$f] = true;
                }
            }
        	include('admin_page.php');
        }
    }
?>