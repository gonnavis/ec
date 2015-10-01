<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 
function theme_widget_im2(&$setting,&$app){

    if($setting['align']=='1'){
        $setting['plug']='<br>';
    }
    $setting['res_url'] = $app->res_url;
    return $setting['im'];
}
?>
