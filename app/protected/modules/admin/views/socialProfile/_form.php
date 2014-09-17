<?php
/* @var $this SocialProfileController */
/* @var $model SocialProfile */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="col-sm-5">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'social-profile-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>

            <?php echo $form->errorSummary($model); ?>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'social_id'); ?>
                    <?php echo $form->textField($model,'social_id'); ?>
                    <?php echo $form->error($model,'social_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'username'); ?>
                    <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'username'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'profile_id'); ?>
                    <?php echo $form->textField($model,'profile_id'); ?>
                    <?php echo $form->error($model,'profile_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-blue')); ?>
            </div>

    <?php $this->endWidget(); ?>

    </div>
</div>