<?php
    function theme_widget_imgchange(&$setting,&$smarty) {
       
        $setting = _preparePostData($setting);
        //print_r("<pre/>");print_r($setting);exit;
       
        return $setting;
    }
    /*
     *参数中时间处理
     */
     function _preparePostData($aData)
    {
		//print_r("<pre/>");print_r($aData);
        $aResult = $aData;  
         
        // 开始时间&结束时间
        foreach ($aData['_DTIME_'] as $val) {
            $temp['act_pic_from_time'][] = $val['act_pic_from_time'];
            $temp['act_pic_to_time'][] = $val['act_pic_to_time'];
           
        }
        $aResult['act_pic_from_time'] = strtotime($aData['act_pic_from_time'].' '. implode(':', $temp['act_pic_from_time']));
        $aResult['act_pic_to_time'] = strtotime($aData['act_pic_to_time'].' '. implode(':', $temp['act_pic_to_time']));
        if( $aResult['act_pic_to_time']<$aResult['act_pic_from_time'] )
        {
            $this->end( false,'结束时间不能早于开始时间！' );
        } 
        $aResult['act_pic_txt'] = "this is act_pic";
        //print_r("<pre/>");print_r($aResult);exit;
        return $aResult;
        
    }
?>
