<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Certific8</title>
        <!-- Bootstrap -->
        <?php
        $cs = Yii::app()->clientScript;
        $cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.default.css');

        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-migrate-1.2.1.min.js', CClientScript::POS_HEAD);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/modernizr.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/pace.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/retina.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.cookies.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom.js', CClientScript::POS_END);
        ?>
    </head>
    
    <body class="signin">
        <section>
            <?php echo $content; ?>
        </section>

    </body>
</html>
