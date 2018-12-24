$(document).ready(function(){
    $(".div2").click(function(){
        //$(this).addClass('div2-selected').next("div.div3").slideToggle("slow").siblings(".div3:visible").slideUp("slow");
        $(".div2").removeClass('div2-selected');
        $(this).addClass('div2-selected');
    });


/*----------------------左侧菜单单击后图标切换--------------------------*/
    
$('.home').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_03.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_03.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list<?php echo $_SESSION['skin'];?>.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_03.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_03.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home_white.png')
    });
    $('.tpu').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt_white.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_03.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_03.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list<?php echo $_SESSION['skin'];?>.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_03.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_03.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home.png')
    });
    $('.dljk').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk_white.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_03.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_03.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list<?php echo $_SESSION['skin'];?>.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_03.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_03.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home.png')
    });
    $('.nhgl').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl_white.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_03.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_03.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list<?php echo $_SESSION['skin'];?>.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_03.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_03.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home.png')
    });
    $('.dlfx').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_05.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_03.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list<?php echo $_SESSION['skin'];?>.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_03.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_03.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home.png')
    });
    $('.bbdy').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_03.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_05.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list<?php echo $_SESSION['skin'];?>.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_03.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_03.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home.png')
    });
    $('.bjgl').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_03.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_03.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj_white.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list<?php echo $_SESSION['skin'];?>.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_03.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_03.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home.png')
    });
    $('.bjpz').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_03.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_03.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz_white.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list<?php echo $_SESSION['skin'];?>.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_03.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_03.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home.png')
    });
    $('.xmlb').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_03.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_03.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list_white.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_03.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_03.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home.png')
    });
    $('.dlhz').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_03.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_03.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list<?php echo $_SESSION['skin'];?>.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_05.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_03.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home.png')
    });
    $('.znkz').click(function(){
        $('.tpu img').attr('src','../static/images/index/icon_png_1/icon_wtt.png');
        $('.dljk img').attr('src','../static/images/index/icon_png_1/icon2_dljk.png');
        $('.nhgl img').attr('src','../static/images/index/icon_png_1/icon2_nhgl.png');
        $('.dlfx img').attr('src','../static/images/index/icon_png_1/icon_dlfx_03.png');
        $('.bbdy img').attr('src','../static/images/index/icon_png_1/icon_dy_03.png');
        $('.bjgl img').attr('src','../static/images/index/icon_png_1/icon_bj.png');
        $('.bjpz img').attr('src','../static/images/index/icon_png_1/icon_bjsz.png');
        $('.xmlb img').attr('src','../static/images/index/icon_png_1/icon_list<?php echo $_SESSION['skin'];?>.png');
        $('.dlhz img').attr('src','../static/images/index/icon_png_1/icon_fire_03.png');
        $('.znkz img').attr('src','../static/images/index/icon_png_1/icon_znkz_05.png');
        $('.home img').attr('src','../static/images/index/icon_png_1/icon_home.png')
    });


});





