<?php
/* @var $this TrainerController */
/* @var $model Trainer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'org_id'); ?>
		<?php echo $form->textField($model,'org_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'membership_id'); ?>
		<?php echo $form->textField($model,'membership_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_registered'); ?>
		<?php echo $form->textField($model,'is_registered'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_paid'); ?>
		<?php echo $form->textField($model,'is_paid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_joined'); ?>
		<?php echo $form->textField($model,'first_joined'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_seen'); ?>
		<?php echo $form->textField($model,'last_seen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_valdiated'); ?>
		<?php echo $form->textField($model,'last_valdiated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->