<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'forgot-pass-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
        ));
?>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'email'); ?>
                    <?php echo $form->textField($model, 'email', array('class' => "form-control")); ?>
                    <?php echo $form->error($model, 'email', array('class' => 'errorMessage')); ?>
                </div>            
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <?php
        echo CHtml::ajaxSubmitButton('Send Password', CHtml::normalizeUrl(array('user/sendPassword?rand=' . rand())), array(
            'dataType' => 'json',
            'type' => 'post',
            'success' => 'function(data) {
                            $(".errorMessage").hide();
                            if(data.status=="success"){
                                successmsg("password-success",data.message);
                                $("#forgot-pass-form")[0].reset();
                            } else {
                                $.each(data, function(key, val) {
                                $("#forgot-pass-form #"+key+"_em_").text(val);                                                    
                                $("#forgot-pass-form #"+key+"_em_").show();
                                });
                            }       
                        }',
                ), array('id' => 'forgotbtn', 'class' => 'btn btn-primary mr5 forgotbtn'));
        ?>
        <?php echo CHtml::link('Cancel', 'javascript:void(0)', array('class' => 'btn btn-default mr5','data-dismiss'=>"modal")) ?>
    </div>
<?php $this->endWidget(); ?>