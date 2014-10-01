<?php
/* @var $this ProfileJobController */
/* @var $model ProfileJob */
/* @var $form CActiveForm */

$modelOrg = Org::model()->findAll();
$listOrg = CHtml::listData($modelOrg, 'id', 'legal_name');

$modelProfile = Profile::model()->findAll();
$listProfile = CHtml::listData($modelProfile, 'id', 'full_name');

$modelHr = Hr::model()->findAll();
$listHr = CHtml::listData($modelHr, 'id', 'org.legal_name');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#ProfileJob_profile_id').select2(); 
        $('#ProfileJob_org_id').select2(); 
        $('#ProfileJob_hr_id').select2();
    });
");
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'profile-job-form',
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
            <?php echo $form->labelEx($model, 'profile_id'); ?>
            <?php echo $form->dropDownList($model, 'profile_id', $listProfile, array('style' => 'width:100%')); ?>
            <?php echo $form->error($model, 'profile_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'org_id'); ?>
            <?php echo $form->dropDownList($model, 'org_id', $listOrg, array('style' => 'width:100%')); ?>
            <?php echo $form->error($model, 'org_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'job_title'); ?>
            <?php echo $form->textField($model, 'job_title', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'job_title'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'hr_id'); ?>
            <?php echo $form->dropDownList($model, 'hr_id', $listHr, array('style' => 'width:100%')); ?>
            <?php echo $form->error($model, 'hr_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'comment'); ?>
            <?php echo $form->textArea($model, 'comment', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'comment'); ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'rating'); ?>
            <?php echo $form->textField($model, 'rating', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'rating'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'start_date'); ?>
            <?php echo $form->textField($model, 'start_date', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'start_date'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'end_date'); ?>
            <?php echo $form->textField($model, 'end_date', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'end_date'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
