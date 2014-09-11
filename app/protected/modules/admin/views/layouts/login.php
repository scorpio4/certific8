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
        <div class="login-main">
            <div class="login m-t-lgx wrapper-md animated fadeInUp">
                <?php echo $content; ?>
            </div>	
        </div>
        <!-- Modal -->
        <div class="modal fade" id="forgotPssword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header b-b-none text-white">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center" id="myModalLabel">Forgot your password</h4>
                    </div>
                    <div class="modal-body">
                        <div class="login">
                            <div class="login-form-group">
                                <input type="text" class="login-form-control" placeholder="Email id" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email id'" >
                            </div>
                            <div class="login-form-group">
                                <button class="login-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
