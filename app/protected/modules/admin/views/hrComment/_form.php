<?php
/* @var $this HrCommentController */
/* @var $model HrComment */
/* @var $form CActiveForm */
$modelShortlist = HrShortlist::model()->findAll();
$listShortlist = CHtml::listData($modelShortlist, 'id', 'name');

$modelUser = User::model()->findAll();
$listUser = CHtml::listData($modelUser, 'id', 'username');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#HrComment_hr_shortlist_id').select2(); 
        $('#HrComment_user_id').select2(); 
    });
");
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'hr-comment-form',
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
            <?php echo $form->labelEx($model, 'hr_shortlist_id'); ?>
            <?php echo $form->dropDownList($model, 'hr_shortlist_id', $listShortlist, array('style' => 'width:100%', 'empty' => 'Select')); ?>
            <?php echo $form->error($model, 'hr_shortlist_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'hr_candidate_id'); ?>
            <?php echo $form->textField($model, 'hr_candidate_id', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'hr_candidate_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'user_id'); ?>
            <?php echo $form->dropDownList($model, 'user_id', $listUser, array('style' => 'width:100%', 'empty' => 'Select')); ?>
            <?php echo $form->error($model, 'user_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'comment'); ?>
            <?php echo $form->textArea($model, 'comment', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'comment'); ?>
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'preference'); ?>
            <?php echo $form->textField($model, 'preference', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'preference'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'status'); ?>
            <?php echo $form->textField($model, 'status', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    <?php echo CHtml::link('Cancel', array('hrShortlist/admin'), array('class'=>'btn btn-default')); ?>
</div>

<?php $this->endWidget(); ?>
