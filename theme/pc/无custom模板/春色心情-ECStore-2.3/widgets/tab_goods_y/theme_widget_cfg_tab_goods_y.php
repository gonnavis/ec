<?php

	function theme_widget_cfg_tab_goods_y(){

		$data['goods_order_by'] = b2c_widgets::load('Goods')->getGoodsOrderBy();

		return $data;
	}
?>
