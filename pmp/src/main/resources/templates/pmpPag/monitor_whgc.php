<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <?php $this->load->view("common")?>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>static/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>static/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>static/css/dianlu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>static/css/dianlu_yby.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>static/css/minHai.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>static/css/lwm.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>static/css/kd.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>static/css/whswc.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>static/css/whgc.css"/>
    <script type="text/javascript" src="<?php echo $base_url;?>static/js/jquery.md5.js"></script>
    <title>武汉工厂T1配电室监控</title>
    <style>
        *{font-size:13px;}
        .top{width:1903px;z-index:999;}
        .logo{width:170px;}
        .logo img{margin:0;}
        .nav{z-index:999;margin-top:27px;}
        body,.dianlu1, .dianlu2{background: #212429;}
        .content{background:none;}
        .newDL1{padding-left:0;}
        .topRight{display:none;}
        .kdDT{width:40px;}
        .lwm2Group li .whgcDw1{width:25px;}
        .lwm2Group li span{text-align:center;}
        #nav{height:2083px;}
        .header-box{width:100%;padding-right: 77px;}
        .header{width:105%}
    </style>
    <!--[if IE 7]> <style>.whgc1IE7{margin-left:16px;}</style> <![endif]--><strong></strong>
</head>
<body>
<!------------------header begin-------------------->
<?php $this->load->view("top")?>

<div class="content clearfix left" style="width:1980px;position:relative;">
<?php $this->load->view("lefter")?>
    <div class="left dianlu1 newDL1" style="width:1765px;min-height:2050px;margin-top: 30px;">
        <div style="margin-left:20px;text-align:left;">
            <input style="width:80px;background:red;border:none;cursor:pointer;padding:4px 4px;border-radius:5px;-webkit-border-radius:4px;-moz-border-radius:4px;" type="button" value="T1" onclick="window.location.href='<?php echo $base_url;?>power_monitor/monitor/TG10'"/>
            
            <input style="width:80px;position:relative;left:-2px;background:#efea3a;border:none;cursor:pointer;padding:4px 4px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"  type="button" value="T2" onclick="window.location.href='<?php echo $base_url;?>power_monitor/monitor/TG10/1'"/>

            <input style="position:relative;left:-2px;background:#efea3a;border:none;cursor:pointer;padding:4px 4px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"  type="button" value="高压配电室" onclick="window.location.href='<?php echo $base_url;?>power_monitor/monitor/TG10/2'"/>
            
            <input style="position:relative;left:-2px;background:#efea3a;border:none;cursor:pointer;padding:4px 4px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"  type="button" value="Ipanel" onclick="window.location.href='<?php echo $base_url;?>power_monitor/monitor/TG56/ipanel'"/>
        
            <input style="position:relative;left:-2px;background:#efea3a;border:none;cursor:pointer;padding:4px 4px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;"  type="button" value="Ipanel2" onclick="window.location.href='<?php echo $base_url;?>power_monitor/monitor/TG56/ipanel1'"/>
        </div>

        <div style="padding-left:120px;">
            <div class="clearfix whgc1IE7" style="width:1644px;margin-top:60px;">
                <div class="left hcfs4" style="position:relative; ">
                    <div class="left jinxian2Position" style="width:200px;">
                        
                        <div class="clearfix">
                            <div class="left hcfsModel1Station">
                                
                                <p>
                                    <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg1.png" alt=""/>
                                </p>
                                <ul class="whswcInfor whgcHeight">
                                    <li class="save_name" style="cursor: pointer;"><span><?php echo $alias[2]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b3" style="display: none;cursor: pointer;"></li>
                                </ul>
                                <ul class="lwm2Group whgcW2">
                                    <li class="clearfix"><span class="kdDT-title">Ta</span><span id="a1_b3_ep" class="lwmData">55.0</span><span class="kdDT whgcDw1">°C</span></li>
                                    <li class="clearfix"><span class="kdDT-title">Tb</span><span id="a1_b3_ep" class="lwmData">54.0</span><span class="kdDT whgcDw1">°C</span></li>
                                    <li class="clearfix"><span class="kdDT-title">Tc</span><span id="a1_b3_ep" class="lwmData">54.5</span><span class="kdDT whgcDw1">°C</span></li>
                                </ul>


                                <div class="pie-chart-left clearfix mb20" style="position:relative;width:280px; height:280px; left:-63px; top:13px;">
                                    <div class="left pie-pic" style="width:280px; height:280px;background:#212429;">
                                        <div id="rate_a1_b1_s" class="pie_detail" style="width:280px;height:280px;"></div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                     
                </div>
                
                <div class="left whswcBlock1" style="width:220px;height:960px;">
                    <div class="whswcBlock1">
                        <P class="minHaiLT2 kdImg1DataTit whgcT1">1AA1</P>
                        <img class="kaidiPin1" src="<?php echo $base_url;?>static/images/line/whgc/whgcImg2.png" alt="" />
                        <span id="a1_b1_kgzt3" class="OC1 cursor_pointer cursor_pointer <?php if ($res_yb['a1']['b1']['a1_b1_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP1"></span>
                        
                    </div>
                    <ul class="whswcInfor whgcHeight">
                        <li class="save_name" style="cursor: pointer;"><span><?php echo $alias[0]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b1" style="display: none;cursor: pointer;"></span></li>
                    </ul>
                    <ul class="lwm2Group whgcW2" style="margin-bottom:95px;">
                        <li class="clearfix"><span class="kdDT-title">Ua</span><span id="a1_b1_ua" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_ua']['val']?></span><span class="kdDT whgcDw1">V</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ub</span><span id="a1_b1_ub" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_ub']['val']?></span><span class="kdDT whgcDw1">V</span></li>
                        <li class="clearfix"><span class="kdDT-title">Uc</span><span id="a1_b1_uc" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_uc']['val']?></span><span class="kdDT whgcDw1">V</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ia</span><span id="a1_b1_ia" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_ia']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ib</span><span id="a1_b1_ib" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_ib']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ic</span><span id="a1_b1_ic" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_ic']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">P</span><span id="a1_b1_p" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_p']['val']?></span><span class="kdDT whgcDw1">W</span></li>
                        <li class="clearfix"><span class="kdDT-title">Q</span><span id="a1_b1_q" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_q']['val']?></span><span class="kdDT whgcDw1">var</span></li>
                        <li class="clearfix"><span class="kdDT-title">S</span><span id="a1_b1_s" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_s']['val']?></span><span class="kdDT whgcDw1">VA</span></li>
                        
                        <li class="clearfix"><span class="kdDT-title">Ep</span><span id="a1_b1_ep" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_ep']['val']?></span><span class="kdDT whgcDw1">kWh</span></li>
                        <li class="clearfix"><span class="kdDT-title">Eq</span><span id="a1_b1_eq" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_eq']['val']?></span><span class="kdDT whgcDw1">kvarh</span></li>
                        <li class="clearfix"><span class="kdDT-title">cosφ</span><span id="" class="lwmData"><?php echo $res_yb['a1']['b1']['a1_b1_cosq']['val']?></span><span class="kdDT whgcDw1"></span></li>
                        <li class="clearfix"><span class="kdDT-title">F</span><span id="a1_b1_f" class="lwmData"><?php echo sprintf('%.2f', $res_yb['a1']['b1']['a1_b1_f']['val'])?></span><span class="kdDT whgcDw1">Hz</span></li>
                        <li class="clearfix"><span class="kdDT-title">负载率</span><span id="a1_b1_η" class="lwmData"><?php echo round($res_yb['a1']['b1']['a1_b1_s']['val']/1250000, 2)*100?></span><span class="kdDT whgcDw1">%</span></li>
                        <li class="clearfix"><span class="kdDT-title">THD-Va</span><span id="a1_b1_g1_thd-va" class="lwmData"><?php echo $res_yb['a1']['b1']['g1']['a1_b1_g1_thd-va']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                        <li class="clearfix"><span class="kdDT-title">THD-Vb</span><span id="a1_b1_g1_thd-vb" class="lwmData"><?php echo $res_yb['a1']['b1']['g1']['a1_b1_g1_thd-vb']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                        <li class="clearfix"><span class="kdDT-title">THD-Vc</span><span id="a1_b1_g1_thd-vc" class="lwmData"><?php echo $res_yb['a1']['b1']['g1']['a1_b1_g1_thd-vc']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                        <li class="clearfix"><span class="kdDT-title">THD-Ia</span><span id="a1_b1_g1_thd-ia" class="lwmData"><?php echo $res_yb['a1']['b1']['g1']['a1_b1_g1_thd-ia']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                        <li class="clearfix"><span class="kdDT-title">THD-Ib</span><span id="a1_b1_g1_thd-ib" class="lwmData"><?php echo $res_yb['a1']['b1']['g1']['a1_b1_g1_thd-ib']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                        <li class="clearfix"><span class="kdDT-title">THD-Ic</span><span id="a1_b1_g1_thd-ic" class="lwmData"><?php echo $res_yb['a1']['b1']['g1']['a1_b1_g1_thd-ic']['val']?></span><span class="kdDT whgcDw1">%</span></li>

                    </ul>
                </div>
                <div class="left whswcBlock1" style="width:200px;margin-left:-10px;">
                    <div class="whswcBlock1">
                        <P class="minHaiLT2 kdImg1DataTit whgcT2">1AA2</P>
                        <img class="kaidiPin1" src="<?php echo $base_url;?>static/images/line/whgc/whgcImg3.png" alt="" />
                        <span id="a1_b2_kgzt3" class="OC1 cursor_pointer cursor_pointer <?php if ($res_yb['a1']['b2']['a1_b2_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP2"></span>
                        
                    </div>
                    <ul class="whswcInfor whgcHeight">
                        <li class="save_name" style="cursor: pointer;"><span><?php echo $alias[1]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b2" style="display: none;cursor: pointer;"></span></li>
                    </ul>
                    
                    <ul class="lwm2Group whgcW2">
                        <li class="clearfix"><span class="kdDT-title">Ua</span><span id="a1_b2_ua" class="lwmData"><?php echo $res_yb['a1']['b2']['a1_b2_ua']['val']?></span><span class="kdDT whgcDw1">V</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ub</span><span id="a1_b2_ub" class="lwmData"><?php echo $res_yb['a1']['b2']['a1_b2_ub']['val']?></span><span class="kdDT whgcDw1">V</span></li>
                        <li class="clearfix"><span class="kdDT-title">Uc</span><span id="a1_b2_uc" class="lwmData"><?php echo $res_yb['a1']['b2']['a1_b2_uc']['val']?></span><span class="kdDT whgcDw1">V</span></li>
                        
                        <li class="clearfix"><span class="kdDT-title">Ia</span><span id="a1_b2_ia" class="lwmData"><?php echo $res_yb['a1']['b2']['a1_b2_ia']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ib</span><span id="a1_b2_ib" class="lwmData"><?php echo $res_yb['a1']['b2']['a1_b2_ib']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ic</span><span id="a1_b2_ic" class="lwmData"><?php echo $res_yb['a1']['b2']['a1_b2_ic']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">P</span><span id="a1_b2_p" class="lwmData"><?php echo $res_yb['a1']['b2']['a1_b2_p']['val']?></span><span class="kdDT whgcDw1">W</span></li>
                        <li class="clearfix"><span class="kdDT-title">Q</span><span id="a1_b2_q" class="lwmData"><?php echo $res_yb['a1']['b2']['a1_b2_q']['val']?></span><span class="kdDT whgcDw1">var</span></li>
                        <li class="clearfix"><span class="kdDT-title">S</span><span id="a1_b2_s" class="lwmData"><?php echo $res_yb['a1']['b2']['a1_b2_s']['val']?></span><span class="kdDT whgcDw1">VA</span></li>
                    </ul>
                </div>
                <div class="left whswcBlock1" style="width:200px;">
                    <div class="whswcBlock1">
                        <P class="minHaiLT2 kdImg1DataTit  whgcT2">1AA3</P>
                        <img id="c7_b1_di3" class="kaidiPin1" src="<?php echo $base_url;?>static/images/line/whgc/<?php echo $res_yb_tg55['c7']['b1']['c7_b1_di3']['val']?'whgcImg4_new_open':'whgcImg4_new_close';?>.png" alt="" />
                        <span id="c7_b1_di1" class="OC1 cursor_pointer cursor_pointer <?php if ($res_yb_tg55['c7']['b1']['c7_b1_di1']['val']) {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP2"></span>
                        
                    </div>
                    <ul class="whswcInfor whgcHeight">
                         <li class="save_name" style="cursor: pointer;"><span><?php echo $alias[22]['alias']?></span><input type="text" class="up_name" name="alias" ids="c7_b1" style="display: none;cursor: pointer;"></span></li>
                           <!-- var ids = $(this).parent().parent().next().children().children()[1].id -->
                    </ul>
                    
                    <ul class="lwm2Group whgcW2">
                        <li class="clearfix"><span class="kdDT-title">Ua</span><span id="c7_b1_ua" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_ua']['val']?></span><span class="kdDT whgcDw1">V</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ub</span><span id="c7_b1_ub" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_ub']['val']?></span><span class="kdDT whgcDw1">V</span></li>
                        <li class="clearfix"><span class="kdDT-title">Uc</span><span id="c7_b1_uc" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_uc']['val']?></span><span class="kdDT whgcDw1">V</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ia</span><span id="c7_b1_ia" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_ia']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ib</span><span id="c7_b1_ib" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_ib']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ic</span><span id="c7_b1_ic" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_ic']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">Iaa</span><span id="c7_b1_iaa" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_iaa']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ibb</span><span id="c7_b1_ibb" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_ibb']['val']?></span><span class="kdDT whgcDw1">A</span></li>
                        <li class="clearfix"><span class="kdDT-title">Icc</span><span id="c7_b1_icc" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_icc']['val']?></span><span class="kdDT whgcDw1">A</span></li>


                        <li class="clearfix"><span class="kdDT-title">Va-THD</span><span id="c7_b1_thd-va" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_thd-va']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                        <li class="clearfix"><span class="kdDT-title">Vb-THD</span><span id="c7_b1_thd-vb" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_thd-vb']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                        <li class="clearfix"><span class="kdDT-title">Vc-THD</span><span id="c7_b1_thd-vc" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_thd-vc']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                        
                        <li class="clearfix"><span class="kdDT-title">Ia-THD</span><span id="c7_b1_thd-ia" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_thd-ia']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ib-THD</span><span id="c7_b1_thd-ib" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_thd-ib']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                        <li class="clearfix"><span class="kdDT-title">Ic-THD</span><span id="c7_b1_thd-ic" class="lwmData"><?php echo $res_yb_tg55['c7']['b1']['c7_b1_thd-ic']['val']?></span><span class="kdDT whgcDw1">%</span></li>
                    </ul>
                </div>
                
                
                <div class="left hcfs4">
                    <div>
                       
                        <div class="hcfsModel2Station">
                        	<P class="minHaiLT2 kdImg1DataTit whgcT3">1AA4</P>
                            <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5.png" alt="" />
                            <ul class="hcfs4modelAllData hcfs4model3Data">
                                <li class=""></li>
                                <li class="clearfix"></li>
                                <li class="clearfix"></li>
                                <li class="clearfix"></li>
                                <li class="clearfix"></li>
                            </ul>
                        </div>
                        
                        <div class="clearfix" style=" margin-left:71px; position:relative;">
                            <ul class="whgc_dataTit">
                                <li class="hcfs4model2DataDT">Ua</li>
                                <li class="hcfs4model2DataDT">Ub</li>
                                <li class="hcfs4model2DataDT">Uc</li>
                                <li class="hcfs4model2DataDT">Ia</li>
                                <li class="hcfs4model2DataDT">Ib</li>
                                <li class="hcfs4model2DataDT">Ic</li>
                                <li class="hcfs4model2DataDT">Ep</li>
                                <li class="hcfs4model2DataDT" style="width: 80px;margin-left: -10px;">THD-Va</li>
                                <li class="hcfs4model2DataDT" style="width: 80px;margin-left: -10px;">THD-Vb</li>
                                <li class="hcfs4model2DataDT" style="width: 80px;margin-left: -10px;">THD-Vc</li>
                                <li class="hcfs4model2DataDT" style="width: 80px;margin-left: -10px;">THD-Ia</li>
                                <li class="hcfs4model2DataDT" style="width: 80px;;margin-left: -10px;">THD-Ib</li>
                                <li class="hcfs4model2DataDT" style="width: 80px;;margin-left: -10px;">THD-Ic</li>
                            </ul>
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition whgcH2">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_1.png" alt="" />
                                        <span id="a1_b5_kgzt3" class="OC1 cursor_pointer cursor_pointer <?php if ($res_yb['a1']['b4']['a1_b4_di']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA4-1</dd>
                                    <!-- <dd class="mb"></dd> -->
                                    <!-- <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[3]['alias']?></span><input type="text" class="up_name" name="alias" style="display: none;cursor: pointer;"></dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[3]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b4" style="display: none;cursor: pointer;"></span></dd>
                                      <!-- var ids = $(this).parent().parent().next().children().children()[1].id -->
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="a1_b4_ua" class="lwmData"><span><?php echo $res_yb['a1']['b4']['a1_b4_ua']['val']?></span></li>
                                    <li id="a1_b4_ub" class="lwmData"><span><?php echo $res_yb['a1']['b4']['a1_b4_ub']['val']?></span></li>
                                    <li id="a1_b4_uc" class="lwmData"><span><?php echo $res_yb['a1']['b4']['a1_b4_uc']['val']?></span></li>
                                    <li id="a1_b4_ia" class="lwmData"><span><?php echo $res_yb['a1']['b4']['a1_b4_ia']['val']?></span></li>
                                    <li id="a1_b4_ib" class="lwmData"><span><?php echo $res_yb['a1']['b4']['a1_b4_ib']['val']?></span></li>
                                    <li id="a1_b4_ic" class="lwmData"><span><?php echo $res_yb['a1']['b4']['a1_b4_ic']['val']?></span></li>
                                    <li id="a1_b4_ep" class="lwmData"><span><?php echo $res_yb['a1']['b4']['a1_b4_ep']['val']?></span></li>
                                </ul>
                            </div>
                            
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                        <span id="a1_b5_kgzt3" class="OC1 cursor_pointer cursor_pointer <?php if ($res_yb['a1']['b5']['a1_b5_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA4-2</dd>
                                    <!-- <dd class="mb">二楼办公室照明</dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[4]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b5" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="a1_b5_ua" class="lwmData"><?php echo $res_yb['a1']['b5']['a1_b5_ua']['val']?></li>
                                    <li id="a1_b5_ub" class="lwmData"><?php echo $res_yb['a1']['b5']['a1_b5_ub']['val']?></li>
                                    <li id="a1_b5_uc" class="lwmData"><?php echo $res_yb['a1']['b5']['a1_b5_uc']['val']?></li>
                                    <li id="a1_b5_ia" class="lwmData"><?php echo $res_yb['a1']['b5']['a1_b5_ia']['val']?></li>
                                    <li id="a1_b5_ib" class="lwmData"><?php echo $res_yb['a1']['b5']['a1_b5_ib']['val']?></li>
                                    <li id="a1_b5_ic" class="lwmData"><?php echo $res_yb['a1']['b5']['a1_b5_ic']['val']?></li>
                                    <li id="a1_b5_ep" class="lwmData"><?php echo $res_yb['a1']['b5']['a1_b5_ep']['val']?></li>
                                </ul>
                            </div>
                            
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                        <span id="a1_b6_kgzt3" class="OC1 cursor_pointer cursor_pointer <?php if ($res_yb['a1']['b6']['a1_b6_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA4-3</dd>
                                    <!-- <dd class="mb">一楼办公室照明</dd> -->
                                     <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[5]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b6" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="a1_b6_ua" class="lwmData"><?php echo $res_yb['a1']['b6']['a1_b6_ua']['val']?></li>
                                    <li id="a1_b6_ub" class="lwmData"><?php echo $res_yb['a1']['b6']['a1_b6_ub']['val']?></li>
                                    <li id="a1_b6_uc" class="lwmData"><?php echo $res_yb['a1']['b6']['a1_b6_uc']['val']?></li>
                                    <li id="a1_b6_ia" class="lwmData"><?php echo $res_yb['a1']['b6']['a1_b6_ia']['val']?></li>
                                    <li id="a1_b6_ib" class="lwmData"><?php echo $res_yb['a1']['b6']['a1_b6_ib']['val']?></li>
                                    <li id="a1_b6_ic" class="lwmData"><?php echo $res_yb['a1']['b6']['a1_b6_ic']['val']?></li>
                                    <li id="a1_b6_ep" class="lwmData"><?php echo $res_yb['a1']['b6']['a1_b6_ep']['val']?></li>
                                </ul>
                            </div>
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                        <span id="a1_b7_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['a1']['b7']['a1_b7_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA4-4</dd>
                                    <!-- <dd class="mb">充电柜</dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[6]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b7" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="a1_b7_ua" class="lwmData"><?php echo $res_yb['a1']['b7']['a1_b7_ua']['val']?></li>
                                    <li id="a1_b7_ub" class="lwmData"><?php echo $res_yb['a1']['b7']['a1_b7_ub']['val']?></li>
                                    <li id="a1_b7_uc" class="lwmData"><?php echo $res_yb['a1']['b7']['a1_b7_uc']['val']?></li>
                                    <li id="a1_b7_ia" class="lwmData"><?php echo $res_yb['a1']['b7']['a1_b7_ia']['val']?></li>
                                    <li id="a1_b7_ib" class="lwmData"><?php echo $res_yb['a1']['b7']['a1_b7_ib']['val']?></li>
                                    <li id="a1_b7_ic" class="lwmData"><?php echo $res_yb['a1']['b7']['a1_b7_ic']['val']?></li>
                                    <li id="a1_b7_ep" class="lwmData"><?php echo $res_yb['a1']['b7']['a1_b7_ep']['val']?></li>
                                </ul>
                            </div>
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                        <span id="a1_b8_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['a1']['b8']['a1_b8_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA4-5</dd>
                                    <!-- <dd class="mb">消防泵</dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[7]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b8" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="a1_b8_ua" class="lwmData"><?php echo $res_yb['a1']['b8']['a1_b8_ua']['val']?></li>
                                    <li id="a1_b8_ub" class="lwmData"><?php echo $res_yb['a1']['b8']['a1_b8_ub']['val']?></li>
                                    <li id="a1_b8_uc" class="lwmData"><?php echo $res_yb['a1']['b8']['a1_b8_uc']['val']?></li>
                                    <li id="a1_b8_ia" class="lwmData"><?php echo $res_yb['a1']['b8']['a1_b8_ia']['val']?></li>
                                    <li id="a1_b8_ib" class="lwmData"><?php echo $res_yb['a1']['b8']['a1_b8_ib']['val']?></li>
                                    <li id="a1_b8_ic" class="lwmData"><?php echo $res_yb['a1']['b8']['a1_b8_ic']['val']?></li>
                                    <li id="a1_b8_ep" class="lwmData"><?php echo $res_yb['a1']['b8']['a1_b8_ep']['val']?></li>
                                </ul>
                            </div>
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_3.png" alt="" />
                                        <span id="a1_b9_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['a1']['b9']['a1_b9_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA4-6</dd>
                                    <!-- <dd class="mb">拉拔机等设备</dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[8]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b9" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="a1_b9_ua" class="lwmData"><?php echo $res_yb['a1']['b9']['a1_b9_ua']['val']?></li>
                                    <li id="a1_b9_ub" class="lwmData"><?php echo $res_yb['a1']['b9']['a1_b9_ub']['val']?></li>
                                    <li id="a1_b9_uc" class="lwmData"><?php echo $res_yb['a1']['b9']['a1_b9_uc']['val']?></li>
                                    <li id="a1_b9_ia" class="lwmData"><?php echo $res_yb['a1']['b9']['a1_b9_ia']['val']?></li>
                                    <li id="a1_b9_ib" class="lwmData"><?php echo $res_yb['a1']['b9']['a1_b9_ib']['val']?></li>
                                    <li id="a1_b9_ic" class="lwmData"><?php echo $res_yb['a1']['b9']['a1_b9_ic']['val']?></li>
                                    <li id="a1_b9_ep" class="lwmData"><?php echo $res_yb['a1']['b9']['a1_b9_ep']['val']?></li>
                                    <li id="a1_b9_g1_thd-va" class="lwmData"><?php echo $res_yb['a1']['b9']['g1']['a1_b9_g1_thd-va']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>
                                    <li id="a1_b9_g1_thd-vb" class="lwmData"><?php echo $res_yb['a1']['b9']['g1']['a1_b9_g1_thd-vb']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>
                                    <li id="a1_b9_g1_thd-vc" class="lwmData"><?php echo $res_yb['a1']['b9']['g1']['a1_b9_g1_thd-vc']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>

                                    <li id="a1_b9_g1_thd-ia" class="lwmData"><?php echo $res_yb['a1']['b9']['g1']['a1_b9_g1_thd-ia']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>
                                    <li id="a1_b9_g1_thd-ib" class="lwmData"><?php echo $res_yb['a1']['b9']['g1']['a1_b9_g1_thd-ib']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>
                                    <li id="a1_b9_g1_thd-ic" class="lwmData"><?php echo $res_yb['a1']['b9']['g1']['a1_b9_g1_thd-ic']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>
                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="left hcfs4" style="margin-left: -2px;"><img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg7_01.png" alt="" /></div>
                                
            </div>
            
            
            <div class="clearfix" style="width:1590px; margin-left:30px;">
                <div class="left hcfs4">
                    <div class="left">
                        
                        <div class="clearfix">
                            
                            <div>
                                <div class="hcfsModel2Station">
                                	<P class="minHaiLT2 kdImg1DataTit whgcT4">1AA7</P>
                                    <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg6.png" alt="" />
                                    <ul class="hcfs4modelAllData hcfs4model3Data">
                                        <li class=""></li>
                                        <li class="clearfix"></li>
                                        <li class="clearfix"></li>
                                        <li class="clearfix"></li>
                                        <li class="clearfix"></li>
                                    </ul>
                                </div>
                                
                                <div class="clearfix" style="position:relative; margin-left:40px;">
                                    <ul class="whgc_dataTit whgc_dataTitP2">
                                        <li class="hcfs4model2DataDT">Ua</li>
                                        <li class="hcfs4model2DataDT">Ub</li>
                                        <li class="hcfs4model2DataDT">Uc</li>
                                        <li class="hcfs4model2DataDT">Ia</li>
                                        <li class="hcfs4model2DataDT">Ib</li>
                                        <li class="hcfs4model2DataDT">Ic</li>
                                        <li class="hcfs4model2DataDT">Ep</li>
                                        <li class="hcfs4model2DataDT">P</li>
                                        <li class="hcfs4model2DataDT">Q</li>
                                        <li class="hcfs4model2DataDT">Cosφ</li>
                                        <li class="hcfs4model2DataDT" style="width: 80px;margin-left: -10px;">THD-Va</li>
                                        <li class="hcfs4model2DataDT" style="width: 80px;margin-left: -10px;">THD-Vb</li>
                                        <li class="hcfs4model2DataDT" style="width: 80px;margin-left: -10px;">THD-Vc</li>
                                        <li class="hcfs4model2DataDT" style="width: 80px;margin-left: -10px;">THD-Ia</li>
                                        <li class="hcfs4model2DataDT" style="width: 80px;;margin-left: -10px;">THD-Ib</li>
                                        <li class="hcfs4model2DataDT" style="width: 80px;;margin-left: -10px;">THD-Ic</li>
                                    </ul>
                                    <div class="left hcfsModel1Station whgcW1">
                                        <dl>
                                            <dt class="MZBtnPosition whgcH2">
                                                <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_1.png" alt="" />
                                                <span id="c1_b10_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['c1']['b10']['c1_b10_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                            </dt>
                                            <dd class="mt">1AA7-1</dd>
                                            <!-- <dd class="mb">备用</dd> -->
                                            <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[21]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b10" style="display: none;cursor: pointer;"></span></dd>
                                        </dl>
                                        <ul class="lwm2Group whswcGroup">
                                            <li id="c1_b10_ua" class="lwmData"><?php echo $res_yb['c1']['b10']['c1_b10_ua']['val']?></li>
                                            <li id="c1_b10_ub" class="lwmData"><?php echo $res_yb['c1']['b10']['c1_b10_ub']['val']?></li>
                                            <li id="c1_b10_uc" class="lwmData"><?php echo $res_yb['c1']['b10']['c1_b10_uc']['val']?></li>
                                            <li id="c1_b10_ia" class="lwmData"><?php echo $res_yb['c1']['b10']['c1_b10_ia']['val']?></li>
                                            <li id="c1_b10_ib" class="lwmData"><?php echo $res_yb['c1']['b10']['c1_b10_ib']['val']?></li>
                                            <li id="c1_b10_ic" class="lwmData"><?php echo $res_yb['c1']['b10']['c1_b10_ic']['val']?></li>
                                            <li id="c1_b10_ep" class="lwmData"><?php echo $res_yb['c1']['b10']['c1_b10_ep']['val']?></li>
                                            <li id="c1_b10_ib" class="lwmData"><?php echo $res_yb['c1']['b10']['c1_b10_ib']['val']?></li>
                                            <li id="c1_b10_ic" class="lwmData"><?php echo $res_yb['c1']['b10']['c1_b10_ic']['val']?></li>
                                            <li id="c1_b10_ep" class="lwmData"><?php echo $res_yb['c1']['b10']['c1_b10_ep']['val']?></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="left hcfsModel1Station whgcW1">
                                        <dl>
                                            <dt class="MZBtnPosition">
                                                <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_3.png" alt="" />
                                                <span id="c1_b10_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['c1']['b11']['c1_b11_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                            </dt>
                                            <dd class="mt">1AA7-2</dd>
                                            <!-- <dd class="mb">铜牌挤压机</dd> -->
                                            <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[22]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b11" style="display: none;cursor: pointer;"></span></dd>
                                        </dl>
                                        <ul class="lwm2Group whswcGroup">
                                            <li id="c1_b11_ua" class="lwmData"><?php echo $res_yb['c1']['b11']['c1_b11_ua']['val']?></li>
                                            <li id="c1_b11_ub" class="lwmData"><?php echo $res_yb['c1']['b11']['c1_b11_ub']['val']?></li>
                                            <li id="c1_b11_uc" class="lwmData"><?php echo $res_yb['c1']['b11']['c1_b11_uc']['val']?></li>
                                            <li id="c1_b11_ia" class="lwmData"><?php echo $res_yb['c1']['b11']['c1_b11_ia']['val']?></li>
                                            <li id="c1_b11_ib" class="lwmData"><?php echo $res_yb['c1']['b11']['c1_b11_ib']['val']?></li>
                                            <li id="c1_b11_ic" class="lwmData"><?php echo $res_yb['c1']['b11']['c1_b11_ic']['val']?></li>
                                            <li id="c1_b11_ep" class="lwmData"><?php echo $res_yb['c1']['b11']['c1_b11_ep']['val']?></li>
                                            <li id="c1_b11_ib" class="lwmData"><?php echo $res_yb['c1']['b11']['c1_b11_p']['val']?></li>
                                            <li id="c1_b11_ic" class="lwmData"><?php echo $res_yb['c1']['b11']['c1_b11_q']['val']?></li>
                                            <li id="c1_b11_ep" class="lwmData"><?php echo $res_yb['c1']['b11']['c1_b11_cosq']['val']?></li>
                                            <li id="c1_b11_g1_thd-va" class="lwmData"><?php echo $res_yb['c1']['b11']['g1']['c1_b11_g1_thd-va']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>
                                            <li id="c1_b11_g1_thd-vb" class="lwmData"><?php echo $res_yb['c1']['b11']['g1']['c1_b11_g1_thd-vb']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>
                                            <li id="c1_b11_g1_thd-vc" class="lwmData"><?php echo $res_yb['c1']['b11']['g1']['c1_b11_g1_thd-vc']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>

                                            <li id="c1_b11_g1_thd-ia" class="lwmData"><?php echo $res_yb['c1']['b11']['g1']['c1_b11_g1_thd-ia']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>
                                            <li id="c1_b11_g1_thd-ib" class="lwmData"><?php echo $res_yb['c1']['b11']['g1']['c1_b11_g1_thd-ib']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>
                                            <li id="c1_b11_g1_thd-ic" class="lwmData"><?php echo $res_yb['c1']['b11']['g1']['c1_b11_g1_thd-ic']['val']?><span class="kdDT whgcDw1" style="float: right;margin-right: -40px;">%</span></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                 
                <div class="left hcfs4">
                    
                    
                    <div>
                        <div class="hcfsModel2Station">
                        	<P class="minHaiLT2 kdImg1DataTit whgcT5">1AA6</P>
                            <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg8.png" alt="" />
                            
                            <ul class="hcfs4modelAllData hcfs4model3Data">
                                <li class=""></li>
                                <li class="clearfix"></li>
                                <li class="clearfix"></li>
                                <li class="clearfix"></li>
                                <li class="clearfix"></li>
                            </ul>
                        </div>
                        
                        <div class="clearfix" style=" margin-left:13px; position:relative;">
                            <ul class="whgc_dataTit">
                                <li class="hcfs4model2DataDT">Ua</li>
                                <li class="hcfs4model2DataDT">Ub</li>
                                <li class="hcfs4model2DataDT">Uc</li>
                                <li class="hcfs4model2DataDT">Ia</li>
                                <li class="hcfs4model2DataDT">Ib</li>
                                <li class="hcfs4model2DataDT">Ic</li>
                                <li class="hcfs4model2DataDT">Ep</li>
                            </ul>
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition whgcH2">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_1.png" alt="" />
                                        <span id="c1_b4_kz1" style="cursor:pointer;" class="OC1 switch_span <?php if ($res_yb['c1']['b4']['c1_b4_kz1']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                        <input type="hidden" class="switch" id="c1_b4_kz1" value="<?php echo $res_yb['c1']['b4']['c1_b4_kz1']['val'];?>" />
                                    </dt>
                                    <dd class="mt">1AA6-1</dd>
                                    <!-- <dd class="mb">自控演示</dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[15]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b4" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="c1_b4_ua" class="lwmData"><?php echo $res_yb['c1']['b4']['c1_b4_ua']['val']?></li>
                                    <li id="c1_b4_ub" class="lwmData"><?php echo $res_yb['c1']['b4']['c1_b4_ub']['val']?></li>
                                    <li id="c1_b4_uc" class="lwmData"><?php echo $res_yb['c1']['b4']['c1_b4_uc']['val']?></li>
                                    <li id="c1_b4_ia" class="lwmData"><?php echo $res_yb['c1']['b4']['c1_b4_ia']['val']?></li>
                                    <li id="c1_b4_ib" class="lwmData"><?php echo $res_yb['c1']['b4']['c1_b4_ib']['val']?></li>
                                    <li id="c1_b4_ic" class="lwmData"><?php echo $res_yb['c1']['b4']['c1_b4_ic']['val']?></li>
                                    <li id="c1_b4_ep" class="lwmData"><?php echo $res_yb['c1']['b4']['c1_b4_ep']['val']?></li>
                                </ul>
                            </div>
                            
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                        <span id="c1_b5_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['c1']['b5']['c1_b5_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA6-2</dd>
                                    <!-- <dd class="mb">备用</dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[16]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b5" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="c1_b5_ua" class="lwmData"><?php echo $res_yb['c1']['b5']['c1_b5_ua']['val']?></li>
                                    <li id="c1_b5_ub" class="lwmData"><?php echo $res_yb['c1']['b5']['c1_b5_ub']['val']?></li>
                                    <li id="c1_b5_uc" class="lwmData"><?php echo $res_yb['c1']['b5']['c1_b5_uc']['val']?></li>
                                    <li id="c1_b5_ia" class="lwmData"><?php echo $res_yb['c1']['b5']['c1_b5_ia']['val']?></li>
                                    <li id="c1_b5_ib" class="lwmData"><?php echo $res_yb['c1']['b5']['c1_b5_ib']['val']?></li>
                                    <li id="c1_b5_ic" class="lwmData"><?php echo $res_yb['c1']['b5']['c1_b5_ic']['val']?></li>
                                    <li id="c1_b5_ep" class="lwmData"><?php echo $res_yb['c1']['b5']['c1_b5_ep']['val']?></li>
                                </ul>
                            </div>
                            
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                        <span id="c1_b6_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['c1']['b6']['c1_b6_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA6-3</dd>
                                    <!-- <dd class="mb">备用</dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[17]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b6" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="c1_b6_ua" class="lwmData"><?php echo $res_yb['c1']['b6']['c1_b6_ua']['val']?></li>
                                    <li id="c1_b6_ub" class="lwmData"><?php echo $res_yb['c1']['b6']['c1_b6_ub']['val']?></li>
                                    <li id="c1_b6_uc" class="lwmData"><?php echo $res_yb['c1']['b6']['c1_b6_uc']['val']?></li>
                                    <li id="c1_b6_ia" class="lwmData"><?php echo $res_yb['c1']['b6']['c1_b6_ia']['val']?></li>
                                    <li id="c1_b6_ib" class="lwmData"><?php echo $res_yb['c1']['b6']['c1_b6_ib']['val']?></li>
                                    <li id="c1_b6_ic" class="lwmData"><?php echo $res_yb['c1']['b6']['c1_b6_ic']['val']?></li>
                                    <li id="c1_b6_ep" class="lwmData"><?php echo $res_yb['c1']['b6']['c1_b6_ep']['val']?></li>
                                </ul>
                            </div>
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                        <span id="c1_b7_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['c1']['b7']['c1_b7_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA6-4</dd>
                                    <!-- <dd class="mb">工厂用电AP10</dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[18]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b7" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="c1_b7_ua" class="lwmData"><?php echo $res_yb['c1']['b7']['c1_b7_ua']['val']?></li>
                                    <li id="c1_b7_ub" class="lwmData"><?php echo $res_yb['c1']['b7']['c1_b7_ub']['val']?></li>
                                    <li id="c1_b7_uc" class="lwmData"><?php echo $res_yb['c1']['b7']['c1_b7_uc']['val']?></li>
                                    <li id="c1_b7_ia" class="lwmData"><?php echo $res_yb['c1']['b7']['c1_b7_ia']['val']?></li>
                                    <li id="c1_b7_ib" class="lwmData"><?php echo $res_yb['c1']['b7']['c1_b7_ib']['val']?></li>
                                    <li id="c1_b7_ic" class="lwmData"><?php echo $res_yb['c1']['b7']['c1_b7_ic']['val']?></li>
                                    <li id="c1_b7_ep" class="lwmData"><?php echo $res_yb['c1']['b7']['c1_b7_ep']['val']?></li>
                                </ul>
                            </div>
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                        <span id="c1_b8_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['c1']['b8']['c1_b8_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA6-5</dd>
                                    <!-- <dd class="mb">工厂用电AP11</dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[19]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b8" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="c1_b8_ua" class="lwmData"><?php echo $res_yb['c1']['b8']['c1_b8_ua']['val']?></li>
                                    <li id="c1_b8_ub" class="lwmData"><?php echo $res_yb['c1']['b8']['c1_b8_ub']['val']?></li>
                                    <li id="c1_b8_uc" class="lwmData"><?php echo $res_yb['c1']['b8']['c1_b8_uc']['val']?></li>
                                    <li id="c1_b8_ia" class="lwmData"><?php echo $res_yb['c1']['b8']['c1_b8_ia']['val']?></li>
                                    <li id="c1_b8_ib" class="lwmData"><?php echo $res_yb['c1']['b8']['c1_b8_ib']['val']?></li>
                                    <li id="c1_b8_ic" class="lwmData"><?php echo $res_yb['c1']['b8']['c1_b8_ic']['val']?></li>
                                    <li id="c1_b8_ep" class="lwmData"><?php echo $res_yb['c1']['b8']['c1_b8_ep']['val']?></li>
                                </ul>
                            </div>
                            <div class="left hcfsModel1Station whgcW1">
                                <dl>
                                    <dt class="MZBtnPosition">
                                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_3.png" alt="" />
                                        <span id="c1_b9_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['c1']['b9']['c1_b9_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                    </dt>
                                    <dd class="mt">1AA6-6</dd>
                                    <!-- <dd class="mb">工厂用电AP12</dd> -->
                                    <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[20]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b9" style="display: none;cursor: pointer;"></span></dd>
                                </dl>
                                <ul class="lwm2Group whswcGroup">
                                    <li id="c1_b9_ua" class="lwmData"><?php echo $res_yb['c1']['b9']['c1_b9_ua']['val']?></li>
                                    <li id="c1_b9_ub" class="lwmData"><?php echo $res_yb['c1']['b9']['c1_b9_ub']['val']?></li>
                                    <li id="c1_b9_uc" class="lwmData"><?php echo $res_yb['c1']['b9']['c1_b9_uc']['val']?></li>
                                    <li id="c1_b9_ia" class="lwmData"><?php echo $res_yb['c1']['b9']['c1_b9_ia']['val']?></li>
                                    <li id="c1_b9_ib" class="lwmData"><?php echo $res_yb['c1']['b9']['c1_b9_ib']['val']?></li>
                                    <li id="c1_b9_ic" class="lwmData"><?php echo $res_yb['c1']['b9']['c1_b9_ic']['val']?></li>
                                    <li id="c1_b9_ep" class="lwmData"><?php echo $res_yb['c1']['b9']['c1_b9_ep']['val']?></li>                             
                                </ul>
                            </div>
                    </div>
                </div>
            </div> 
            <div class="left hcfs4">
                
                
                <div>
                    <div class="hcfsModel2Station">
                    	<P class="minHaiLT2 kdImg1DataTit whgcT5">1AA5</P>
                        <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg8.png" alt="" />
                        
                        <ul class="hcfs4modelAllData hcfs4model3Data">
                            <li class=""></li>
                            <li class="clearfix"></li>
                            <li class="clearfix"></li>
                            <li class="clearfix"></li>
                            <li class="clearfix"></li>
                        </ul>
                    </div>
                    
                    <div class="clearfix" style=" margin-left:23px; position:relative;">
                        <ul class="whgc_dataTit">
                            <li class="hcfs4model2DataDT">Ua</li>
                            <li class="hcfs4model2DataDT">Ub</li>
                            <li class="hcfs4model2DataDT">Uc</li>
                            <li class="hcfs4model2DataDT">Ia</li>
                            <li class="hcfs4model2DataDT">Ib</li>
                            <li class="hcfs4model2DataDT">Ic</li>
                            <li class="hcfs4model2DataDT">Ep</li>
                        </ul>
                        <div class="left hcfsModel1Station whgcW1">
                            <dl>
                                <dt class="MZBtnPosition whgcH2">
                                    <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_1.png" alt="" />
                                    <span id="a1_b10_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['a1']['b10']['a1_b10_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                </dt>
                                <dd class="mt">1AA5-1</dd>
                                <!-- <dd class="mb">备用</dd> -->
                                <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[9]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b10" style="display: none;cursor: pointer;"></span></dd>
                            </dl>
                            <ul class="lwm2Group whswcGroup">
                                <li id="a1_b10_ua" class="lwmData"><?php echo $res_yb['a1']['b10']['a1_b10_ua']['val']?></li>
                                <li id="a1_b10_ub" class="lwmData"><?php echo $res_yb['a1']['b10']['a1_b10_ub']['val']?></li>
                                <li id="a1_b10_uc" class="lwmData"><?php echo $res_yb['a1']['b10']['a1_b10_uc']['val']?></li>
                                <li id="a1_b10_ia" class="lwmData"><?php echo $res_yb['a1']['b10']['a1_b10_ia']['val']?></li>
                                <li id="a1_b10_ib" class="lwmData"><?php echo $res_yb['a1']['b10']['a1_b10_ib']['val']?></li>
                                <li id="a1_b10_ic" class="lwmData"><?php echo $res_yb['a1']['b10']['a1_b10_ic']['val']?></li>
                                <li id="a1_b10_ep" class="lwmData"><?php echo $res_yb['a1']['b10']['a1_b10_ep']['val']?></li>
                            </ul>
                        </div>
                        
                        <div class="left hcfsModel1Station whgcW1">
                            <dl>
                                <dt class="MZBtnPosition">
                                    <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                    <span id="a1_b11_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['a1']['b11']['a1_b11_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                </dt>
                                <dd class="mt">1AA5-2</dd>
                                <!-- <dd class="mb">备用</dd> -->
                                   <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[10]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b11" style="display: none;cursor: pointer;"></span></dd>
                            </dl>
                            <ul class="lwm2Group whswcGroup">
                                <li id="a1_b11_ua" class="lwmData"><?php echo $res_yb['a1']['b11']['a1_b11_ua']['val']?></li>
                                <li id="a1_b11_ub" class="lwmData"><?php echo $res_yb['a1']['b11']['a1_b11_ub']['val']?></li>
                                <li id="a1_b11_uc" class="lwmData"><?php echo $res_yb['a1']['b11']['a1_b11_uc']['val']?></li>
                                <li id="a1_b11_ia" class="lwmData"><?php echo $res_yb['a1']['b11']['a1_b11_ia']['val']?></li>
                                <li id="a1_b11_ib" class="lwmData"><?php echo $res_yb['a1']['b11']['a1_b11_ib']['val']?></li>
                                <li id="a1_b11_ic" class="lwmData"><?php echo $res_yb['a1']['b11']['a1_b11_ic']['val']?></li>
                                <li id="a1_b11_ep" class="lwmData"><?php echo $res_yb['a1']['b11']['a1_b11_ep']['val']?></li>
                            </ul>
                        </div>
                        
                        <div class="left hcfsModel1Station whgcW1">
                            <dl>
                                <dt class="MZBtnPosition">
                                    <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                    <span id="a1_b12_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['a1']['b12']['a1_b12_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                </dt>
                                <dd class="mt">1AA5-3</dd>
                                <!-- <dd class="mb">范东平</dd> -->
                                   <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[11]['alias']?></span><input type="text" class="up_name" name="alias" ids="a1_b12" style="display: none;cursor: pointer;"></span></dd>
                            </dl>
                            <ul class="lwm2Group whswcGroup">
                                <li id="a1_b12_ua" class="lwmData"><?php echo $res_yb['a1']['b12']['a1_b12_ua']['val']?></li>
                                <li id="a1_b12_ub" class="lwmData"><?php echo $res_yb['a1']['b12']['a1_b12_ub']['val']?></li>
                                <li id="a1_b12_uc" class="lwmData"><?php echo $res_yb['a1']['b12']['a1_b12_uc']['val']?></li>
                                <li id="a1_b12_ia" class="lwmData"><?php echo $res_yb['a1']['b12']['a1_b12_ia']['val']?></li>
                                <li id="a1_b12_ib" class="lwmData"><?php echo $res_yb['a1']['b12']['a1_b12_ib']['val']?></li>
                                <li id="a1_b12_ic" class="lwmData"><?php echo $res_yb['a1']['b12']['a1_b12_ic']['val']?></li>
                                <li id="a1_b12_ep" class="lwmData"><?php echo $res_yb['a1']['b12']['a1_b12_ep']['val']?></li>
                            </ul>
                        </div>
                        <div class="left hcfsModel1Station whgcW1">
                            <dl>
                                <dt class="MZBtnPosition">
                                    <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                    <span id="c1_b1_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['c1']['b1']['c1_b1_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                </dt>
                                <dd class="mt">1AA5-4</dd>
                                <!-- <dd class="mb">工厂用电AP13</dd> -->
                                   <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[12]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b1" style="display: none;cursor: pointer;"></span></dd>
                            </dl>
                            <ul class="lwm2Group whswcGroup">
                                <li id="c1_b1_ua" class="lwmData"><?php echo $res_yb['c1']['b1']['c1_b1_ua']['val']?></li>
                                <li id="c1_b1_ub" class="lwmData"><?php echo $res_yb['c1']['b1']['c1_b1_ub']['val']?></li>
                                <li id="c1_b1_uc" class="lwmData"><?php echo $res_yb['c1']['b1']['c1_b1_uc']['val']?></li>
                                <li id="c1_b1_ia" class="lwmData"><?php echo $res_yb['c1']['b1']['c1_b1_ia']['val']?></li>
                                <li id="c1_b1_ib" class="lwmData"><?php echo $res_yb['c1']['b1']['c1_b1_ib']['val']?></li>
                                <li id="c1_b1_ic" class="lwmData"><?php echo $res_yb['c1']['b1']['c1_b1_ic']['val']?></li>
                                <li id="c1_b1_ep" class="lwmData"><?php echo $res_yb['c1']['b1']['c1_b1_ep']['val']?></li>
                            </ul>
                        </div>
                        <div class="left hcfsModel1Station whgcW1">
                            <dl>
                                <dt class="MZBtnPosition">
                                    <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_2.png" alt="" />
                                    <span id="c1_b2_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['c1']['b2']['c1_b2_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                </dt>
                                <dd class="mt">1AA5-5</dd>
                                <!-- <dd class="mb">工厂用电AP14</dd> -->
                                   <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[13]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b2" style="display: none;cursor: pointer;"></span></dd>
                            </dl>
                            <ul class="lwm2Group whswcGroup">
                                <li id="c1_b2_ua" class="lwmData"><?php echo $res_yb['c1']['b2']['c1_b2_ua']['val']?></li>
                                <li id="c1_b2_ub" class="lwmData"><?php echo $res_yb['c1']['b2']['c1_b2_ub']['val']?></li>
                                <li id="c1_b2_uc" class="lwmData"><?php echo $res_yb['c1']['b2']['c1_b2_uc']['val']?></li>
                                <li id="c1_b2_ia" class="lwmData"><?php echo $res_yb['c1']['b2']['c1_b2_ia']['val']?></li>
                                <li id="c1_b2_ib" class="lwmData"><?php echo $res_yb['c1']['b2']['c1_b2_ib']['val']?></li>
                                <li id="c1_b2_ic" class="lwmData"><?php echo $res_yb['c1']['b2']['c1_b2_ic']['val']?></li>
                                <li id="c1_b2_ep" class="lwmData"><?php echo $res_yb['c1']['b2']['c1_b2_ep']['val']?></li>
                            </ul>
                        </div>
                        <div class="left hcfsModel1Station whgcW1">
                            <dl>
                                <dt class="MZBtnPosition">
                                    <img src="<?php echo $base_url;?>static/images/line/whgc/whgcImg5_3.png" alt="" />
                                    <span id="c1_b3_kgzt3" class="OC1 cursor_pointer <?php if ($res_yb['c1']['b3']['c1_b3_kgzt3']['val']=='1') {echo "newDianLu1C";}else{ echo "newDianLu1O";}?> whgcOCP3"></span>
                                </dt>
                                <dd class="mt">1AA5-6</dd>
                                <!-- <dd class="mb">工厂用电AP15</dd> -->
                                   <dd class="save_name mb" style="cursor: pointer;"><span><?php echo $alias[14]['alias']?></span><input type="text" class="up_name" name="alias" ids="c1_b3" style="display: none;cursor: pointer;"></span></dd>
                            </dl>
                            <ul class="lwm2Group whswcGroup">
                                <li id="c1_b3_ua" class="lwmData"><?php echo $res_yb['c1']['b3']['c1_b3_ua']['val']?></li>
                                <li id="c1_b3_ub" class="lwmData"><?php echo $res_yb['c1']['b3']['c1_b3_ub']['val']?></li>
                                <li id="c1_b3_uc" class="lwmData"><?php echo $res_yb['c1']['b3']['c1_b3_uc']['val']?></li>
                                <li id="c1_b3_ia" class="lwmData"><?php echo $res_yb['c1']['b3']['c1_b3_ia']['val']?></li>
                                <li id="c1_b3_ib" class="lwmData"><?php echo $res_yb['c1']['b3']['c1_b3_ib']['val']?></li>
                                <li id="c1_b3_ic" class="lwmData"><?php echo $res_yb['c1']['b3']['c1_b3_ic']['val']?></li>
                                <li id="c1_b3_ep" class="lwmData"><?php echo $res_yb['c1']['b3']['c1_b3_ep']['val']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
             
                
        </div>
        </div>
                
    </div>
    <div id="dialog_form" title="分合闸操作">
      <p class="validateTips">您正在进行<label id="confirm_oper"></label>操作。</p>
      <form id="confirm_form" method="post">
        <fieldset>
            <label>操作线路：</label><label id="confirm_tag"></label><br/><br/>
            <input type="hidden" id="tag_val" />
            <input type="hidden" id="val" />
            <input type="hidden" id="sn" />
            <input type="hidden" id="boxname" />
            <label for="password">操作密码</label>
            <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
     
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
      </form>
    </div>
</div>

</body>
<script type="application/javascript">
    $(".save_name").click(function(){
        var name = $(this).children().first()[0].innerHTML;
        $(this).children().first().hide();
        $(this).children().next().last().val(name);
        $(this).children().next().last().show();
    })
    $(".up_name").blur(function(){
        var name = $(this).val();
        $(this).hide();
        $(this).prev().html(name);
        $(this).prev().show();
        var ids= $(this).attr('ids');
        $.ajax({
            type:'post',
            url: "<?php echo $base_url?>power_monitor/ajax_save_alias/",
            data:{'name':name,'ids':ids},
            success:function(msg){
                // alert(msg)
                if(msg!='success'){
                    alert('修改失败');
                }else{
                    alert('修改成功');
                }
            }
        })
        //console.log(a);
    })
    
    $(".monitorItim").click(function(){
        fl.show();
    }); 

    dialog = $( "#dialog_form" ).dialog({
        autoOpen: false,
        height: 300,
        width: 350,
        modal: true,
        buttons: {
          "确定": post_data,
          Cancel: function() {
            dialog.dialog( "close" );
            interval = setInterval(function () {
                flash();
            }, 1000);
          }
        }
    });
    $(".cursor_pointer").click(function(){
        var tg_id = "<?php echo $tg_id;?>";
        var tag = $(this).attr('id');
        tag = tag.replace('_kgzt3','_uab');
        var date = "day";
        var type = "uab";
        window.location.href="<?php echo $base_url?>power_analysis/analysis_by_tag/"+tg_id+"/"+tag+"/"+date+"/"+type;
        
    })

    $(".analysis_total_line").click(function(){
        var tg_id = "<?php echo $tg_id;?>";
        var tag = $(this).find(".analysis label").next().attr('id');
        tag = tag.replace('_ua','_uab');
        var date = "day";
        var type = "uab";
        window.location.href="<?php echo $base_url?>power_analysis/analysis_by_tag/"+tg_id+"/"+tag+"/"+date+"/"+type;
        
    })

    $(".switch_span").click(function(){
        clearInterval(interval);
        var tag = $(this).next().attr('id');
        var tag_name = $(this).parent().next().next().text();
        var val = parseInt($(this).next().val()) == 0 ? 1:0;
        var sn = "<?php echo $_SESSION['sn_dic'][$tg_id]?>";
        var boxname = "<?php echo $tg_id?>";
        //dialog赋值
        $("#confirm_tag").html(tag_name+' '+tag);
        //提交值
        $("#tag_val").val(tag);
        $("#val").val(val);
        $("#sn").val(sn);
        $("#boxname").val(boxname);
        if (val == 1) {
            $("#confirm_oper").html("<font color='red'>合闸</font>");
        } else {
            $("#confirm_oper").html("<font color='green'>分闸</font>");
        }

        dialog.dialog( "open" );
    });
    function post_data() {
        var tag = $("#tag_val").val();
        var val = $("#val").val();
        var sn = $("#sn").val();
        var boxname = $("#boxname").val();
        var passwd = $("#password").val();
        
        $.ajax({
          type: 'POST',
          url: "<?php echo $base_url?>cmd_manage/switching/",
          data: {'tag':tag, 'val':val, 'sn':sn, 'boxname':boxname, 'passwd':$.md5(passwd)},
          success: function(msg){
              dialog.dialog( "close" );
              if (msg=='200') {
                  alert("操作成功！");
              } else {
                  alert("操作失败！"+msg);
              }
          }
        });
        interval = setInterval(function () {
            flash();
        }, 1000);
    }

    //饼图  
    var ajaxrate = [{'name':'实时负载率','y':parseInt($('#a1_b1_η').text())},{'name':'剩余可支配容量比','y':parseInt(100-parseInt($('#a1_b1_η').text()))}];//负载率比值
    var options = {
        chart: {
            backgroundColor: 'rgba(255, 255, 255, 0)', 
            plotBackgroundColor: null,
            plotBackgroundImage:null,  
            plotBorderWidth: null,
            plotShadow: false
        },
        legend: { //图例设置
            align:'center',
            labelFormat:'{name}',
            itemStyle:{
                color:'#fff'
            }
        },
        title: {
            text: '进线柜负载率',
            style:{
                color:'#fff',
                fontSize: '12pt',
            }
        },
        credits: {
            enabled: false
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b> ',

        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#fff',
                    connectorColor: '#fff',
                    formatter: function() {
                        return Highcharts.numberFormat(this.percentage,2) +' %';
                    }
                },
                showInLegend: true,
                
            },
        },
        series: [{
            type: 'pie',
            name: '占比',
            data: ajaxrate,            
            colors:['#fff362','#34bd76'],
            animation: false
            
        }]
    };  
    $('#rate_a1_b1_s').highcharts(options);
   

    //    flash();
    function flash()
    {
        var tg = "<?php echo $tg_id?>";

        $.ajax({
            type: 'GET',
            url: "<?php echo $base_url;?>power_monitor/get_ajax_data/"+tg+"/ajax/",
            async:false,
            success: function(data){
                if(data){
                    var obj = eval('(' + data + ')');

//                    console.log(obj);

                    for(var i in obj)
                    {

                        /* old_val = $('#'+i).html();
                        if(old_val != obj[i]['val'])
                        {
                            $('#'+i).html(obj[i]['val']).css('color','yellow');
                        }
                        var tag_arr = i.split('_');
                        if (tag_arr[2] == 'di') {
                            if ($('#'+i).attr('val') != obj[i]['val'] && obj[i]['val'] == 0) {
                               $('#'+i).html('<b class="backRed first"></b>');
                            } else {
                               $('#'+i).html('<b class="backGreen first"></b>');
                            }
                        } */
                        var tag_obj = $('#'+i);
                        var tag_arr = i.split('_');
                        if (tag_obj.attr('class')=='switch') {
                            if (obj[i]['val'] ==1 && !tag_obj.hasClass('newDianLu1C')) {
                                //$('#'+i).val(obj[i]['val']);
                                $('#'+i).prev().attr('class', 'OC1 cursor_pointer newDianLu1C whgcOCP3');
                            } else if (obj[i]['val'] ==0 && !tag_obj.hasClass('newDianLu1O')) {
                                $('#'+i).val(obj[i]['val']);
                                $('#'+i).prev().attr('class', 'OC1 cursor_pointer newDianLu1O whgcOCP3');
                            }   
                        } else if(tag_arr[2] == 'kgzt3') {
                        /* 两个页面不一样的地方在之前用上面的这个方法刷新开关变量，在显示开关变量的下一行有个hidden的input
                                                            这个页面你去掉了，所以没办法用之前方式，基于本页面开关变量都写kgzt3可以用这个，但是，最好和史工确认开关变量
                                                            之前有三种 */                        
                        	if (obj[i]['val'] ==1 && !tag_obj.hasClass('newDianLu1C')) {

                                $('#'+i).attr('class', 'OC1 cursor_pointer newDianLu1C whgcOCP3');
                            } else if (obj[i]['val'] ==0 && !tag_obj.hasClass('newDianLu1O')) {

                                $('#'+i).attr('class', 'OC1 cursor_pointer newDianLu1O whgcOCP3');
                            }   
                        } else if(i == 'c1_b4_kz1') {
                        /* 两个页面不一样的地方在之前用上面的这个方法刷新开关变量，在显示开关变量的下一行有个hidden的input
                                                            这个页面你去掉了，所以没办法用之前方式，基于本页面开关变量都写kgzt3可以用这个，但是，最好和史工确认开关变量
                                                            之前有三种 */                        
                            if (obj[i]['val'] ==1 && !tag_obj.hasClass('newDianLu1C')) {

                                $('#'+i).attr('class', 'OC1 cursor_pointer newDianLu1C whgcOCP3');
                            } else if (obj[i]['val'] ==0 && !tag_obj.hasClass('newDianLu1O')) {

                                $('#'+i).attr('class', 'OC1 cursor_pointer newDianLu1O whgcOCP3');
                            }   
                        } else if (i == 'c7_b1_di1') {
                            if (obj[i]['val'] ==1 && !tag_obj.hasClass('newDianLu1C')) {

                                $('#'+i).attr('class', 'OC1 cursor_pointer newDianLu1C whgcOCP2');
                            } else if (obj[i]['val'] ==0 && !tag_obj.hasClass('newDianLu1O')) {

                                $('#'+i).attr('class', 'OC1 cursor_pointer newDianLu1O whgcOCP2');
                            }   
                        } else if (i == 'c7_b1_di3') {
                            if (obj[i]['val'] ==1 && tag_obj.attr('src')!= "<?php echo $base_url;?>static/images/line/whgc/whgcImg4_new_open.png") {

                                $('#'+i).attr('src', "<?php echo $base_url;?>static/images/line/whgc/whgcImg4_new_open.png");
                            } else if (obj[i]['val'] ==0 && tag_obj.attr('src')!= "<?php echo $base_url;?>static/images/line/whgc/whgcImg4_new_close.png") {

                                $('#'+i).attr('stc', "<?php echo $base_url;?>static/images/line/whgc/whgcImg4_new_close.png");
                            } 

                        } else {//开关和电量
                            old_val = tag_obj.html();
                            if(i == 'a1_b1_s'){
                                var rate = parseInt(((obj[i]['val']/1250000)*100).toFixed(0));
                                var left_rate = parseInt(100-rate);
                                if($("#a1_b1_η").text() != rate)
                                {
                                    $("#a1_b1_η").text(rate).css('color','yellow');
                                    var datas=[{'name':'实时负载率','y':rate},{'name':'剩余可支配容量比','y':left_rate}];
                                    options.series[0].data = datas;
                                    $('#rate_a1_b1_s').highcharts(options);
                                }
                              
                            }
                            if(old_val != obj[i]['val'])
                            {
                                tag_obj.html(obj[i]['val']).css('color','yellow');
                            }
                           

                        }
                    }
                }
            }
        });
    }
//    flash();

    var interval = setInterval(function () {
        flash();
    }, 3000);

    
</script>
</html>
