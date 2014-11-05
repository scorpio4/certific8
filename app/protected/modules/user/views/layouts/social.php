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
        $cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.default.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/component.css');
                
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-migrate-1.2.1.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END);
        ?>
    </head>

    <body>
        <section>
            <div id="main-wrp">
                <div class="mainpanel">
                    <div class="contentpanel">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>