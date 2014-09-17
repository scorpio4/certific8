<?php
/* @var $this ProfileSkillController */
/* @var $model ProfileSkill */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="col-sm-5">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'profile-skill-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>

            <?php echo $form->errorSummary($model); ?>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'profile_id'); ?>
                    <?php echo $form->textField($model,'profile_id'); ?>
                    <?php echo $form->error($model,'profile_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'skill_id'); ?>
                    <?php echo $form->textField($model,'skill_id'); ?>
                    <?php echo $form->error($model,'skill_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-blue')); ?>
            </div>

    <?php $this->endWidget(); ?>

    </div>
</div>