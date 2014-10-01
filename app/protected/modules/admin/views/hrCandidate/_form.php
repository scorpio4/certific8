<?php
/* @var $this HrCandidateController */
/* @var $model HrCandidate */
/* @var $form CActiveForm */

$modelShortlist = HrShortlist::model()->findAll();
$listShortlist = CHtml::listData($modelShortlist, 'id', 'name');

$modelProfile = Profile::model()->findAll();
$listProfile = CHtml::listData($modelProfile, 'id', 'full_name');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#HrCandidate_hr_shortlist_id').select2(); 
        $('#HrCandidate_profile_id').select2(); 
    });
");
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'hr-candidate-form',
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
            <?php echo $form->labelEx($model, 'profile_id'); ?>
            <?php echo $form->dropDownList($model, 'profile_id', $listProfile, array('style' => 'width:100%', 'empty' => 'Select')); ?>
            <?php echo $form->error($model, 'profile_id'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
