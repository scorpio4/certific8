<?php
/* @var $this UserController */
/* @var $model User */
?>
<div class="panel-body">
    <div class="row">
        <div class="col-sm-5">
            <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'changepassword-form',
                    'enableAjaxValidation' => false,
                    'enableClientValidation' => true,
                ));
            ?>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'oldpassword'); ?>
                <?php echo $form->passwordField($model, 'oldpassword', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'oldpassword'); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'newpassword'); ?>
                <?php echo $form->passwordField($model, 'newpassword', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'newpassword'); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'password2'); ?>
                <?php echo $form->passwordField($model, 'password2', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'password2'); ?>
            </div>
            <div class="form-group">
                <?php
                echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('user/changePassword?rand=' . rand())), array(
                    'dataType' => 'json',
                    'type' => 'post',
                    'success' => 'function(data) {
                                    $(".errorMessage").hide();
                                    if(data.status=="success"){
                                        successmsg("changepassword-success",data.message);
                                        $("#changepassword-form")[0].reset();
                                    } else {
                                        $.each(data, function(key, val) {
                                        $("#changepassword-form #"+key+"_em_").text(val);                                                    
                                        $("#changepassword-form #"+key+"_em_").show();
                                        });
                                    }       
                                }',
                        ), array('id' => 'passwordbtn', 'class' => 'btn btn-primary mr5 passwordbtn'));
                ?>
            </div>
        <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
