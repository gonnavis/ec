<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 

$setting['author']='tylerchao.sh@gmail.com';
$setting['version']='v1.0';
$setting['name']='图片根据时间切换';
$setting['catalog'] = '图片切换';
$setting['description'] = '展示模板使用的根据时间切换图片的显示';
$setting['usual'] = '0';
$setting['stime'] ='2013-07';
$setting['userinfo'] = '';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );
                        $setting['limit'] = 5;          //节点下显文章数
$setting['lv'] = 2;             //深度
$setting['styleart'] = 0;       //文章样式统一
$setting['shownode'] = 1;       //是否显示节点名称
$setting['node_id']  = 1;       //默认节点
for($i=00;$i<24;$i++)
{   
    $hour["$i"] = "$i";   
}
$setting['select_time']['hour'] = $hour;
for($i=00;$i<60;$i++)
{

    $min["$i"] = "$i";

}
$setting['select_time']['min'] = $min;
?>
