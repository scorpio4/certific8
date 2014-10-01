<?php
/* @var $this HrShortlistSkillController */
/* @var $model HrShortlistSkill */
/* @var $form CActiveForm */

$modelShortlist = HrShortlist::model()->findAll();
$listShortlist = CHtml::listData($modelShortlist, 'id', 'name');

$modelSkill = Skill::model()->findAll();
$listSkill = CHtml::listData($modelSkill, 'id', 'title');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#HrShortlistSkill_hr_shortlist_id').select2(); 
        $('#HrShortlistSkill_skill_id').select2(); 
    });
");
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'hr-shortlist-skill-form',
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
            <?php echo $form->dropDownList($model, 'hr_shortlist_id', $listShortlist, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'hr_shortlist_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'skill_id'); ?>
            <?php echo $form->dropDownList($model, 'skill_id', $listSkill, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'skill_id'); ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'is_required'); ?>
            <?php echo $form->dropDownList($model, 'is_required', array('0' => 'NO', '1' => 'YES'), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_required'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
