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
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/bootstrap-timepicker.min.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.css')
                ->registerCssFile(Yii::app()->theme->baseUrl . '/css/bootstrap-editable.css');
        //$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-1.11.1.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-migrate-1.2.1.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery-ui-1.10.3.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-timepicker.min.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap-editable.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/main.js', CClientScript::POS_END);
        $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/custom.js', CClientScript::POS_END);
        ?>

    </head>

    <body>
        <?php echo $this->renderPartial('/layouts/header'); ?>
        <section>
            <div class="mainwrapper">
                <?php echo $this->renderPartial('/layouts/left-panel'); ?>
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media left-head">
                            <div class="media-body">
                                <?php echo $this->renderPartial('/layouts/breadcrumb'); ?>
                            </div>
                        </div><!-- media -->
                        <div class="right-head">
                            <?php echo $this->renderPartial('/layouts/submenu'); ?>
<!--                            <a href="" class="btn btn-primary" title="Create"><i class="fa fa-plus"></i></a>
                            <a href="" class="btn btn-success" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="" class="btn btn-warning" title="Duplicate"><i class="fa fa-files-o"></i></a>
                            <a href="" class="btn btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a>-->
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- pageheader -->

                    <div class="contentpanel">
                        <div class="row">
                            <div class="col-md-6">
                               <?php echo $content; ?>
                            </div>
                        </div>
                    </div><!-- contentpanel -->

                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

        <script>
            $(document).ready(function() {
                // Date Picker
                jQuery('#datepicker').datepicker();

            });
       
            $(".profile-head").hover(function() {
                $(".edit-before").show();
            });
        </script>

        <!-- Remove publication -->
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