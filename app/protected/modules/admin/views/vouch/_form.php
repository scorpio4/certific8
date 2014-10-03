<?php
/* @var $this VouchController */
/* @var $model Vouch */
/* @var $form CActiveForm */

$modelUser = User::model()->findAll();
$listUser = CHtml::listData($modelUser, 'id', 'username');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#Vouch_from_user_id').select2(); 
        $('#Vouch_to_user_id').select2(); 
    });
");
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'vouch-form',
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
            <?php echo $form->labelEx($model, 'from_user_id'); ?>
            <?php echo $form->dropDownList($model, 'from_user_id', $listUser, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'from_user_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'to_user_id'); ?>
            <?php echo $form->dropDownList($model, 'to_user_id', $listUser, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'to_user_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'comment'); ?>
            <?php echo $form->textField($model, 'comment', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'comment'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'rating'); ?>
            <?php echo $form->textField($model, 'rating', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'rating'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>

