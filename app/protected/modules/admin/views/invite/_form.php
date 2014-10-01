<?php
/* @var $this InviteController */
/* @var $model Invite */
/* @var $form CActiveForm */

$modelUser = User::model()->findAll();
$listUser = CHtml::listData($modelUser, 'id', 'username');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#Invite_user_id').select2(); 
    });
");
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'invite-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>

<?php echo $form->errorSummary($model); ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'user_id'); ?>
            <?php echo $form->dropDownList($model, 'user_id', $listUser, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'user_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'create_date'); ?>
            <?php echo $form->textField($model, 'create_date', array('class' => 'form-control','disabled'=>true)); ?>
            <?php echo $form->error($model, 'create_date'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
