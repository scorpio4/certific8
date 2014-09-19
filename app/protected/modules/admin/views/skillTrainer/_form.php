<?php
/* @var $this SkillTrainerController */
/* @var $model SkillTrainer */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="col-sm-5">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'skill-trainer-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>

            <?php echo $form->errorSummary($model); ?>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'trainer_id'); ?>
                    <?php echo $form->textField($model,'trainer_id', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'trainer_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'skill_id'); ?>
                    <?php echo $form->textField($model,'skill_id', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'skill_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'webpage'); ?>
                    <?php echo $form->textField($model,'webpage',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
                    <?php echo $form->error($model,'webpage'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'valid_until'); ?>
                    <?php echo $form->textField($model,'valid_until', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model,'valid_until'); ?>
            </div>

                <div class="form-group">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-blue')); ?>
            </div>

    <?php $this->endWidget(); ?>

    </div>
</div>