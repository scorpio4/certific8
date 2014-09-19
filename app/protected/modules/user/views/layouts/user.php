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
        $cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/bootstrap.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/lightbox.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/styles.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/demo.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/skins/blue.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/skins/wide.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/skins/non-background.css');
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/user.js', CClientScript::POS_END);
        ?>
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/favicon.png" type="image/x-icon" />
        <link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,700,600,200" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" >
            baseUrl = '<?php echo Yii::app()->baseUrl;?>';
            $(document).ready(function() {
                $(".styles-open").click(function() {
                    $(".styles, .styles-open").animate({"left": "-220px"}, 1000);
                    $(".styles-closed").animate({"left": "0"}, 1000);
                    return false;
                });
                $(".styles-closed a").click(function() {
                    $(".styles-closed").animate({"left": "-220px"}, 1000);
                    $(".styles").animate({"left": "0"}, 1000);
                    $(".styles-open").animate({"left": "220"}, 1000);
                    return false;
                });
            });
        </script>
    </head>
    <body>
        <div class="wrap-switcher">
            <header>
                <div class="container">
                    <a href="<?php echo Yii::app()->createAbsoluteUrl('/');?>"><div class="logo"><i><small>my.</small>Certific8.in</i></div></a>
                    <div class="navi">
                        <?php 
                            $menu = array();
                            $page = Yii::app()->controller->id.'-'.Yii::app()->controller->action->id;
                            $menu[] = array('label'=>'Home', 'url'=>array('/'),'active'=> $page=='user-index' );
                            $menu[] = array('label'=>'About', 'url'=>array('/'));
                            $menu[] = array('label'=>'Contact', 'url'=>array('/'));
                            $menu[] = array('label'=>'Logout', 'url'=>array('site/logout'),'visible'=> !Yii::app()->user->isGuest );
                            $this->widget('zii.widgets.CMenu',array(
                                'activeCssClass'=>'active',
                                'htmlOptions' => array(),
                                'items'=> $menu,
                            )); 
                        ?>
                    </div>
                </div>
            </header>
            <div class="clear"></div>
            <?php echo $content; ?>
            <footer> 
                <div class="container">
                    <div class="copy">  <p><strong>Certific8.in</strong> &#169; copyright 2014. all rights reserved</p> </div>
                    <div class="social"> 
                        <ul> 
                            <li class="google"> <a href="https://plus.google.com/u/0/102099023673840724640/about"></a> </li> 
                            <li class="linkedin"> <a href="https://linkedin.com/certific8"></a> </li> 
                            <li class="blog"> <a href="http://certific8.blog.com/"></a> </li> 
                            <li class="twitter"> <a href="https://twitter.com/certific8"></a> </li> 
                        </ul> 
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>