<script>
	var tw_img_dir = "<?php echo $pluginurl; ?>";
	<?php $button_array = explode(',',get_option('tw_social_buttons'));
	    $image_info = '';
	    foreach($button_array as $p){
	        if($p != ''){
	            $image_info .= $p.':"'.$social_urls[$p].'",';
	        }
	    }
	    global $post;
	    $category = get_the_category($post->ID);
	?>
	var tw_icon_set = '<?php echo get_option('tw_icon_set'); ?>';
	var tw_site = '<?php echo get_bloginfo('name'); ?>';
	var tw_menu_layout = '<?php echo get_option('tw_menu_alignment'); ?>';
	var tw_image_info = {<?php echo $image_info; ?>};
	var tw_category = '<?php echo $category[0]->name; ?>';
	var tw_src_url = '<?php echo $post->guid; ?>';
</script>
<script>
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '1529775857263487',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>