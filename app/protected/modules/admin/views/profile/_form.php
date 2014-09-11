<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'slugname'); ?>
		<?php echo $form->textField($model,'slugname',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'slugname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'full_name'); ?>
		<?php echo $form->textField($model,'full_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'full_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short_title'); ?>
		<?php echo $form->textField($model,'short_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'short_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short_bio'); ?>
		<?php echo $form->textArea($model,'short_bio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'short_bio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'template_id'); ?>
		<?php echo $form->textField($model,'template_id'); ?>
		<?php echo $form->error($model,'template_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_public'); ?>
		<?php echo $form->textField($model,'is_public'); ?>
		<?php echo $form->error($model,'is_public'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'can_contact'); ?>
		<?php echo $form->textField($model,'can_contact'); ?>
		<?php echo $form->error($model,'can_contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'show_vouches'); ?>
		<?php echo $form->textField($model,'show_vouches'); ?>
		<?php echo $form->error($model,'show_vouches'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_salary'); ?>
		<?php echo $form->textField($model,'min_salary'); ?>
		<?php echo $form->error($model,'min_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hr_id'); ?>
		<?php echo $form->textField($model,'hr_id'); ?>
		<?php echo $form->error($model,'hr_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membership_id'); ?>
		<?php echo $form->textField($model,'membership_id'); ?>
		<?php echo $form->error($model,'membership_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->