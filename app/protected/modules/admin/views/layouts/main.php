<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Certific8</title>
        <!-- Bootstrap -->
        <?php
        $cs = Yii::app()->clientScript;
        $cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.default.css')
           ->registerCssFile(Yii::app()->theme->baseUrl . '/css/bootstrap-timepicker.min.css')
           ->registerCssFile(Yii::app()->theme->baseUrl . '/css/select2.css')
          ->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.css');

        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-migrate-1.2.1.min.js', CClientScript::POS_HEAD);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-ui-1.10.3.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/select2.min.js', CClientScript::POS_END);
        ?>
    </head>

    <body>

        <?php echo $this->renderPartial('/layouts/header'); ?>

        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <?php echo $this->renderPartial('/layouts/left-panel'); ?>
                </div><!-- leftpanel -->

                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media head-left">
                            <div class="pageicon pull-left">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="media-body">
                                <?php echo $this->renderPartial('/layouts/breadcrumb'); ?>
                            </div>
                        </div><!-- media -->
                        <div class="text-right pull-right">
                            <?php echo $this->renderPartial('/layouts/submenu'); ?>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- pageheader -->

                    <div class="contentpanel">
                        <div class="panel panel-default">
                            <?php echo $content; ?>
                        </div>

                    </div><!-- contentpanel -->

                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>
    </body>
</html>
