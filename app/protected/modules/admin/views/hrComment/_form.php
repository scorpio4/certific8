<?php
/* @var $this HrCommentController */
/* @var $model HrComment */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="col-sm-5">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'hr-comment-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>

            <?php echo $form->errorSummary($model); ?>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'hr_shortlist_id'); ?>
                    <?php echo $form->textField($model,'hr_shortlist_id'); ?>
                    <?php echo $form->error($model,'hr_shortlist_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'hr_candidate_id'); ?>
                    <?php echo $form->textField($model,'hr_candidate_id'); ?>
                    <?php echo $form->error($model,'hr_candidate_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'user_id'); ?>
                    <?php echo $form->textField($model,'user_id'); ?>
                    <?php echo $form->error($model,'user_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'comment'); ?>
                    <?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($model,'comment'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'preference'); ?>
                    <?php echo $form->textField($model,'preference'); ?>
                    <?php echo $form->error($model,'preference'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'status'); ?>
                    <?php echo $form->textField($model,'status'); ?>
                    <?php echo $form->error($model,'status'); ?>
            </div>

                <div class="form-group">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-blue')); ?>
            </div>

    <?php $this->endWidget(); ?>

    </div>
</div>