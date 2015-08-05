<style>
    .information{
        padding: 10px;
        margin-right: 20px;
        margin-top: 50px;
        color: #545454;
    }
    .clear{
        clear: both;
    }
    .share-holder div{
        float: left;
        width: 150px;
        margin-bottom: 10px;
    }
    .share-hover-style div{
        float: left;
        width: 120px;
        margin-bottom: 10px;
    }
    .share-hover-style p{
        clear: both;
    }
    .information p{
        border-bottom: 1px solid #ababab;
        padding: 5px;
        font-weight: bold;
        clear: both;
    }
    .share-icon-holder .image-holder{
        width: 100px;
        float: left;
    }
    .image-holder{
        text-align: center;
        margin: 10px;
        background: #000;
        padding: 10px;
        color: #fff;
        box-shadow: 0px 2px 5px rgba(0,0,0,.3);
    }
</style>
<div class="information">
    <h1>TW Image Sharer</h1>
    <form action="" method="POST">
        <p>
            Choose the social networks that you would like to share on.
        </p>
        <div class="share-holder">
            <div>
                <input type="checkbox" name="tw_social_image_sharer[facebook]" value="tw_facebook" <?php if(isset($social_select['facebook'])) echo 'checked'; ?>/>
                Facebook
            </div>
            <div>
                <input type="checkbox" name="tw_social_image_sharer[twitter]" value="tw_twitter" <?php if(isset($social_select['twitter'])) echo 'checked'; ?>/>
                Twitter
            </div>
            <div>
                <input type="checkbox" name="tw_social_image_sharer[google_plus]" value="tw_google_plus" <?php if(isset($social_select['google_plus'])) echo 'checked'; ?>/>
                Google +
            </div>
            <div>
                <input type="checkbox" name="tw_social_image_sharer[pinterest]" value="tw_pinterest" <?php if(isset($social_select['pinterest'])) echo 'checked'; ?>/>
                Pinterest
            </div>
            <div>
                <input type="checkbox" name="tw_social_image_sharer[digg]" value="tw_digg" <?php if(isset($social_select['digg'])) echo 'checked'; ?>/>
                Digg
            </div>
            <div>
                <input type="checkbox" name="tw_social_image_sharer[tumblr]" value="tw_tumblr" <?php if(isset($social_select['tumblr'])) echo 'checked'; ?>/>
                Tumblr
            </div>
            <div>
                <input type="checkbox" name="tw_social_image_sharer[reddit]" value="tw_reddit" <?php if(isset($social_select['reddit'])) echo 'checked'; ?>/>
                Reddit
            </div>
            <div>
                <input type="checkbox" name="tw_social_image_sharer[stumbleupon]" value="tw_stumbleupon" <?php if(isset($social_select['stumbleupon'])) echo 'checked'; ?>/>
                Stumbleupon
            </div>
            <div class="clear"></div>
        </div>
        <p>
            Choose style of hover menu (3 thus far)
        </p>
        <div class="share-hover-style">
            <div class="image-holder">
                left aligned
                <input type="radio" name="tw_social_image_menu" value="tw_image_share_menu1" <?php if($social_menu == 'tw_image_share_menu1') echo 'checked'; ?>/>
            </div>
            <div class="image-holder">
                right aligned
                <input type="radio" name="tw_social_image_menu" value="tw_image_share_menu2" <?php if($social_menu == 'tw_image_share_menu2') echo 'checked'; ?>/>
            </div>
            <div class="image-holder">
                bottom aligned
                <input type="radio" name="tw_social_image_menu" value="tw_image_share_menu3" <?php if($social_menu == 'tw_image_share_menu3') echo 'checked'; ?>/>
            </div>
            <div class="image-holder">
                top aligned
                <input type="radio" name="tw_social_image_menu" value="tw_image_share_menu4" <?php if($social_menu == 'tw_image_share_menu4') echo 'checked'; ?>/>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="share-icon-holder">
            <div class="image-holder">
                Black Circle
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/mini-circle/small/facebook.png"/>
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/mini-circle/small/google_plus.png"/>
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/mini-circle/small/pinterest.png"/>
                <div><input type="radio" name="tw_social_image_icons" value="tw_image_share_mini-circle" <?php if($social_icon == 'tw_image_share_mini-circle') echo 'checked'; ?>/></div>
            </div>
            <div class="image-holder">
                Black Square
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/mini-square/small/facebook.png"/>
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/mini-square/small/google_plus.png"/>
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/mini-square/small/pinterest.png"/>
                <div><input type="radio" name="tw_social_image_icons" value="tw_image_share_mini-square" <?php if($social_icon == 'tw_image_share_mini-square') echo 'checked'; ?>/></div>
            </div>
            <div class="image-holder">
                Color Circle
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/ko-circle/small/facebook.png"/>
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/ko-circle/small/google_plus.png"/>
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/ko-circle/small/pinterest.png"/>
                <div><input type="radio" name="tw_social_image_icons" value="tw_image_share_ko-circle" <?php if($social_icon == 'tw_image_share_ko-circle') echo 'checked'; ?>/></div>
            </div>
            <div class="image-holder">
                Color Square
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/ko-square/small/facebook.png"/>
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/ko-square/small/google_plus.png"/>
                <img src="<?php echo plugins_url(); ?>/tw-image-hover/icons/png/lg_icon_kit/ko-square/small/pinterest.png"/>
                <div><input type="radio" name="tw_social_image_icons" value="tw_image_share_ko-square" <?php if($social_icon == 'tw_image_share_ko-square') echo 'checked'; ?>/></div>
            </div>
            <div class="clear"></div>
        </div>
        <p><input type="submit" name="submit" value="Submit"/></p>
    </form>
    
</div>