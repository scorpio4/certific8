<?php
/* @var $this ProfileSkillController */
/* @var $model ProfileSkill */
/* @var $form CActiveForm */

$modelProfile = Profile::model()->findAll();
$listProfile = CHtml::listData($modelProfile, 'id', 'full_name');

$modelSkill = Skill::model()->findAll();
$listSkill = CHtml::listData($modelSkill, 'id', 'title');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#ProfileSkill_profile_id').select2(); 
        $('#ProfileSkill_skill_id').select2(); 
    });
");
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'profile-skill-form',
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
            <?php echo $form->dropDownList($model, 'profile_id', $listProfile, array('style' => 'width:100%', 'empty' => 'Select')); ?>
            <?php echo $form->error($model, 'profile_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'skill_id'); ?>
            <?php echo $form->dropDownList($model, 'skill_id', $listSkill, array('style' => 'width:100%', 'empty' => 'Select')); ?>
            <?php echo $form->error($model, 'skill_id'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    <?php echo CHtml::link('Cancel', array('profile/admin'), array('class'=>'btn btn-default')); ?>
</div>

<?php $this->endWidget(); ?>

