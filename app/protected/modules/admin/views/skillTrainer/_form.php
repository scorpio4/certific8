<?php
/* @var $this SkillTrainerController */
/* @var $model SkillTrainer */
/* @var $form CActiveForm */
$modelTrainer = Trainer::model()->findAll();
$listTrainer = CHtml::listData($modelTrainer, 'id', 'org.legal_name');

$modelSkill = Skill::model()->findAll();
$listSkill = CHtml::listData($modelSkill, 'id', 'title');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#SkillTrainer_trainer_id').select2(); 
        $('#SkillTrainer_skill_id').select2(); 
    });
");
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'skill-trainer-form',
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
            <?php echo $form->labelEx($model, 'trainer_id'); ?>
            <?php echo $form->dropDownList($model, 'trainer_id', $listTrainer, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'trainer_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'skill_id'); ?>
            <?php echo $form->dropDownList($model, 'skill_id', $listSkill, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'skill_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'webpage'); ?>
            <?php echo $form->textField($model, 'webpage', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'webpage'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'valid_until'); ?>
            <?php echo $form->textField($model, 'valid_until', array('class' => 'form-control','disabled'=>true)); ?>
            <?php echo $form->error($model, 'valid_until'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    <?php echo CHtml::link('Cancel', array('admin'), array('class'=>'btn btn-default')); ?>
</div>

<?php $this->endWidget(); ?>
