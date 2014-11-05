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
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/datepicker.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/bootstrap-timepicker.min.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/js/fuelux/fuelux.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/select2.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/font-awesome.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/component.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/bootstrap-editable.css');
        
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-migrate-1.2.1.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-ui-1.10.3.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-timepicker.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-editable.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/main.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom.js', CClientScript::POS_END);
        //$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-ui-1.8.20.custom.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-disabler.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/address.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/modernizr.custom.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/toucheffects.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-datepicker.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/select2.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/user.js', CClientScript::POS_END);
        ?>
        <script type="text/javascript" >
            baseUrl = '<?php echo Yii::app()->baseUrl;?>';
        </script>
    </head>

    <body>
        <?php echo $this->renderPartial('/layouts/header'); ?>
        <section>
            <div class="mainwrapper" id="main-wrp">
                <?php echo $this->renderPartial('/layouts/left-panel'); ?>
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media left-head">
                            <div class="media-body">
                                <?php echo $this->renderPartial('/layouts/breadcrumb'); ?>
                            </div>
                        </div>
                        <div class="right-head">
                            <?php echo $this->renderPartial('/layouts/submenu'); ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="contentpanel">
                        <?php echo $content; ?>
                    </div>

                </div>
            </div>
        </section>
        <script>
            $(document).ready(function() {
                jQuery('#datepicker').datepicker();

            });
       
            $(".profile-head").hover(function(ev) {
                if(ev.type == "mouseleave") {
                    $(".edit-before").hide();
                } else {
                    $(".edit-before").show();
                }
            });
            
        </script>

        <div class="modal fade" id="Removepublication" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header blue-bg">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Remove position</h4>
                    </div>
                    <div class="modal-body">
                        <div><label>Are you sure you want to remove this position?</label>	</div>
                        <div>
                            <button class="btn btn-primary mr5">Yes, remove</button>
                            <button class="btn btn-default mr5">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>