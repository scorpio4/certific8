<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Certific8</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <?php
        $cs = Yii::app()->clientScript;
        $cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/style-home.css')
            ->registerCssFile(Yii::app()->theme->baseUrl . '/css/bootstrap.css')
            ->registerCssFile(Yii::app()->theme->baseUrl . '/css/animate.min.css')
            ->registerCssFile(Yii::app()->theme->baseUrl . '/css/landing.css');
        
        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-migrate-1.2.1.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.appear.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/landing.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/user.js', CClientScript::POS_END);
        ?>
        <script type="text/javascript" >
            baseUrl = '<?php echo Yii::app()->baseUrl;?>';
        </script>
    </head>
   
    <body>
        <!-- Static navbar -->
        <header class="navbar navbar-default navbar-static-top header-main" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="" href=""><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/logo-primary.png" alt="Certific8"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right navigation">
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </header>
        <?php echo $content; ?>
        <footer class="footer-main">
            <div class="container">
                <div data-ride="animated" data-animation="fadeInUp" data-delay="300">
                    <a href="https://twitter.com/certific8"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/twitter-1.png" alt="twitter" class="m-r-5"></a><a href="https://plus.google.com/u/0/102099023673840724640/about"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/google.png"></a>
                </div>
                <div>Certific8.in © copyright 2014. all rights reserved</div>
            </div>
        </footer>
</body>
</html>
