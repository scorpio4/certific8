<?php
/* @var $this MembershipController */
/* @var $model Membership */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="col-sm-5">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'membership-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>

            <?php echo $form->errorSummary($model); ?>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'name'); ?>
                    <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'name'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'description'); ?>
                    <?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($model,'description'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'logo'); ?>
                    <?php echo $form->textField($model,'logo',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'logo'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'price'); ?>
                    <?php echo $form->textField($model,'price',array('size'=>15,'maxlength'=>15)); ?>
                    <?php echo $form->error($model,'price'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'duration_days'); ?>
                    <?php echo $form->textField($model,'duration_days'); ?>
                    <?php echo $form->error($model,'duration_days'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'can_search'); ?>
                    <?php echo $form->textField($model,'can_search'); ?>
                    <?php echo $form->error($model,'can_search'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'can_contact'); ?>
                    <?php echo $form->textField($model,'can_contact'); ?>
                    <?php echo $form->error($model,'can_contact'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'max_skills'); ?>
                    <?php echo $form->textField($model,'max_skills'); ?>
                    <?php echo $form->error($model,'max_skills'); ?>
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