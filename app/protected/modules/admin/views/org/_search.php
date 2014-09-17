<?php
/* @var $this OrgController */
/* @var $model Org */
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
		<?php echo $form->label($model,'legal_name'); ?>
		<?php echo $form->textField($model,'legal_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_number'); ?>
		<?php echo $form->textField($model,'tax_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logo'); ?>
		<?php echo $form->textField($model,'logo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'billing_user_id'); ?>
		<?php echo $form->textField($model,'billing_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_user_id'); ?>
		<?php echo $form->textField($model,'admin_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_registered'); ?>
		<?php echo $form->textField($model,'is_registered'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->