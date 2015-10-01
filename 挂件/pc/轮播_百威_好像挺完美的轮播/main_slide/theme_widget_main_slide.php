<?php

/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
####################################
# by dongdong 2015/7/27 12:02      #
# 商品在该渠道是否可售             #
# 如果不可售，图片默认，链接为空   #
####################################
function theme_widget_main_slide(&$setting, &$render) {

    $setting['allimg'] = "";
    $setting['allurl'] = "";
    if ($system->theme) {
        $theme_dir = kernel::get_themes_host_url() . '/' . $smarty->theme;
    } else {
        $theme_dir = kernel::get_themes_host_url() . '/' . app::get('site')->getConf('current_theme');
    }
    $member_info = kernel::single("b2c_cart_objects")->get_current_member();
    $member_id = $member_info['member_id'];

    $banner_promotion_mdl = app::get('abimanage')->model('banner_promotion');
    $setting['slider'] = $banner_promotion_mdl->get_banner_list($member_id, 'pc');
    return $setting;
}

?>
