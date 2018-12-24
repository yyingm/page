// JavaScript Document   
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

                        old_val = $('#'+i).html();
                        if(old_val != obj[i]['val'])
                        {
                            $('#'+i).html(obj[i]['val']).css('color','yellow');
                        }

                    }
                }
            }
        });
    }

    var interval = setInterval(function () {
        flash();
    }, 1000);
