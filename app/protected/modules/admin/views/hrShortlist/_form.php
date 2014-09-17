<?php
/* @var $this HrShortlistController */
/* @var $model HrShortlist */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="col-sm-5">

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'hr-shortlist-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation'=>false,
    )); ?>

            <?php echo $form->errorSummary($model); ?>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'hr_id'); ?>
                    <?php echo $form->textField($model,'hr_id'); ?>
                    <?php echo $form->error($model,'hr_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'user_id'); ?>
                    <?php echo $form->textField($model,'user_id'); ?>
                    <?php echo $form->error($model,'user_id'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'name'); ?>
                    <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'name'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'client'); ?>
                    <?php echo $form->textField($model,'client',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'client'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'max_results'); ?>
                    <?php echo $form->textField($model,'max_results'); ?>
                    <?php echo $form->error($model,'max_results'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'geo_territory'); ?>
                    <?php echo $form->textField($model,'geo_territory',array('size'=>32,'maxlength'=>32)); ?>
                    <?php echo $form->error($model,'geo_territory'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'ipv4address'); ?>
                    <?php echo $form->textField($model,'ipv4address',array('size'=>16,'maxlength'=>16)); ?>
                    <?php echo $form->error($model,'ipv4address'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'is_archived'); ?>
                    <?php echo $form->textField($model,'is_archived'); ?>
                    <?php echo $form->error($model,'is_archived'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'create_date'); ?>
                    <?php echo $form->textField($model,'create_date'); ?>
                    <?php echo $form->error($model,'create_date'); ?>
            </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model,'expire_date'); ?>
                    <?php echo $form->textField($model,'expire_date'); ?>
                    <?php echo $form->error($model,'expire_date'); ?>
            </div>

                <div class="form-group">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-blue')); ?>
            </div>

    <?php $this->endWidget(); ?>

    </div>
</div>