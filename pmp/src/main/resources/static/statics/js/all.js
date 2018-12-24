$(document).ready(function(){
    $(".div2").click(function(){
        //$(this).addClass('div2-selected').next("div.div3").slideToggle("slow").siblings(".div3:visible").slideUp("slow");
        $(".div2").removeClass('div2-selected');
        $(this).addClass('div2-selected');
    });

/*----------------------左侧菜单单击后图标切换--------------------------*/
    
    $('.chart').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart_white.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.topo').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo_white.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.power_monitor').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor_white.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.power_manage').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage_white.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?><?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.power_analysis').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis_white.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.reporting').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting_white.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.alerm_manage').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage_white.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.alerm_configer').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer_white.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.user_log_manage').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?><?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage_white.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.help').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help_white.png');
    });
    $('.camera_manage').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage_white.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.environment').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment_white.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.intelligent_control').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control_white.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki<?php echo $_SESSION['skin'];?>.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });
    $('.wiki').click(function(){
        $('.topo img').attr('src','../static/images/index/icon_png_1/icon_topo<?php echo $_SESSION['skin'];?>.png');
        $('.chart img').attr('src','../static/images/index/icon_png_1/icon_chart<?php echo $_SESSION['skin'];?>.png');
        $('.power_monitor img').attr('src','../static/images/index/icon_png_1/icon_power_monitor<?php echo $_SESSION['skin'];?>.png');
        $('.camera_manage img').attr('src','../static/images/index/icon_png_1/icon_camera_manage<?php echo $_SESSION['skin'];?>.png');
        $('.environment img').attr('src','../static/images/index/icon_png_1/icon_environment<?php echo $_SESSION['skin'];?>.png');
        $('.intelligent_control img').attr('src','../static/images/index/icon_png_1/icon_intelligent_control<?php echo $_SESSION['skin'];?>.png');
        $('.power_manage img').attr('src','../static/images/index/icon_png_1/icon_power_manage<?php echo $_SESSION['skin'];?>.png');
        $('.power_analysis img').attr('src','../static/images/index/icon_png_1/icon_power_analysis<?php echo $_SESSION['skin'];?>.png');
        $('.reporting img').attr('src','../static/images/index/icon_png_1/icon_reporting<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_manage img').attr('src','../static/images/index/icon_png_1/icon_alerm_manage<?php echo $_SESSION['skin'];?>.png');
        $('.alerm_configer img').attr('src','../static/images/index/icon_png_1/icon_alerm_configer<?php echo $_SESSION['skin'];?>.png');
        $('.wiki img').attr('src','../static/images/index/icon_png_1/icon_wiki_white.png');
        $('.user_log_manage img').attr('src','../static/images/index/icon_png_1/icon_user_log_manage<?php echo $_SESSION['skin'];?>.png');
        $('.help img').attr('src','../static/images/index/icon_png_1/icon_help<?php echo $_SESSION['skin'];?>.png');
    });




});







