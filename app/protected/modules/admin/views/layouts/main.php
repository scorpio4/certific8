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
        $cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/bootstrap.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/animate.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/font-awesome.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/app.css');

        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.js', CClientScript::POS_END);
        ?>
    </head>

    <body>
        <?php 
            if(!Yii::app()->user->isGuest){
                echo $this->renderPartial('/layouts/header'); 
                if(isset($this->breadcrumbs)){
                    echo $this->renderPartial('/layouts/breadcrumb'); 
                }
            }
        ?>
        <section class="content-main">
            <div class="container">
                <?php echo $content; ?>
            </div>
        </section>
    </body>
</html>
