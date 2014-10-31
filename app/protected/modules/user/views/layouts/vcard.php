<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title> my.certific8.in | Career Acceleration</title>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <?php
            Yii::app()->clientScript->registerCoreScript('jquery');
            Yii::app()->clientScript->registerCoreScript('jquery.ui');
            $cs = Yii::app()->clientScript;
            $dirlist = glob(Yii::getPathOfAlias('webroot') . '/vcard/'.$_GET['vid'].'/css/*', GLOB_ONLYDIR);
            foreach ($dirlist as $css) {
                foreach (array_reverse(glob($css .'/*')) as $key=>$subcss) {
                    $names = explode('/vcard', $subcss);
                    $name = end($names);
                    $path = Yii::app()->baseUrl . '/vcard'.$name;
                    $cs->registerCssFile($path);
                }
            }
            foreach (glob(Yii::getPathOfAlias('webroot') . '/vcard/'.$_GET['vid'].'/css/*.css') as $key=>$css) {
                $names = explode('/', $css);
                $name = end($names);
                $path = Yii::app()->baseUrl . '/vcard/'.$_GET['vid'].'/css/'.$name;;
                $cs->registerCssFile($path);
                
            }
            $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-migrate-1.2.1.min.js', CClientScript::POS_END);
            $dirlist = glob(Yii::getPathOfAlias('webroot') . '/vcard/'.$_GET['vid'].'/js/*', GLOB_ONLYDIR);
            foreach ($dirlist as $js) {
                foreach (array_reverse(glob($js .'/*')) as $key=>$subjs) {
                    $names = explode('/vcard', $subjs);
                    $name = end($names);
                    $path = Yii::app()->baseUrl . '/vcard'.$name;
                    $cs->registerScriptFile($path, CClientScript::POS_END);
                }
            }
            foreach (glob(Yii::getPathOfAlias('webroot') . '/vcard/'.$_GET['vid'].'/js/*.js') as $key=>$js) {
                $names = explode('/', $js);
                $name = end($names);
                $path = Yii::app()->baseUrl . '/vcard/'.$_GET['vid'].'/js/'.$name;
                $cs->registerScriptFile($path, CClientScript::POS_END);
            }
        ?>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Muli:400,400italic|Ubuntu:400,700">
        <script type="text/javascript" >
            baseUrl = '<?php echo Yii::app()->baseUrl;?>';
        </script>
        <style>
            .errorMessage{
                color: #DD1144;
            }
            .successMessage{
                color: #090;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            .navMain {
                width: 213px !important;
                left: 160px !important;
            }
            .portfolio img {
                height: 165px;
                margin: 0 auto;
                text-align: center;
            }
            #social-networks li img{
                width: 32px;
                height: 32px;
                //margin-right: 54px;
            }
            #card-content{
                height: 340px;
            }
            #card-content-frame{
                height: 340px;
            }
            .contentWrapper{
               height: 330px !important;
            }
            #contentWrapper .content{
                height: 330px !important;
            }
            .table-card{
                width: 100%;
            }
            .table-card tr th{
                padding-bottom: 7px;
                padding-top: 7px;
                padding-left: 7px;
                padding-right: 7px;
                font-weight: bold;
                background-color: #fff !important;
                border-bottom: 1px solid #ddd;
            }
            .table-card tr td{
                padding-bottom: 7px;
                padding-top: 7px;
                padding-left: 7px;
                padding-right: 7px;
            }
            .panel-card{
                width:100%;
                border:1px solid #ddd;
            }
            .networks ul li img{
                width:32px;
                height: 32px;
            }
            #card-header-logo {
                background: none;
            }
        </style>
    </head>

    <body class="light">
        <?php echo $content;?>
    <script type="text/javascript">
        function contactForm(id)
        {   
            var data = $('#contactform').serializeArray();
            data.push({name: 'id', value: id});
            $.ajax({
                url:baseUrl+'/user/profile/contact',
                type: 'post',
                dataType:'json',
                data:data,
                success: function(data) {
                    $(".errorMessage").hide();
                    $("#contact-success").html("");
                    if(data.status=="success"){
                        $("#success").show();
                        $("#contactform")[0].reset();
                        $("#success").html(data.message);
                        setTimeout( function(){$('#success').hide();} , 4000);       
                    } else {
                        $.each(data, function(key, val) {
                        $("#contactform #"+key+"_em_").text(val);                                                    
                        $("#contactform #"+key+"_em_").show();
                        });
                    } 
                    return false;
                }
            });
        }
    </script>
    </body>
</html>