<?php
/* @var $this MembershipController */
/* @var $model Membership */
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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logo'); ?>
		<?php echo $form->textField($model,'logo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duration_days'); ?>
		<?php echo $form->textField($model,'duration_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_search'); ?>
		<?php echo $form->textField($model,'can_search'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'can_contact'); ?>
		<?php echo $form->textField($model,'can_contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_skills'); ?>
		<?php echo $form->textField($model,'max_skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->