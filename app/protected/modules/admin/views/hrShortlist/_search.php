<?php
/* @var $this HrShortlistController */
/* @var $model HrShortlist */
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
		<?php echo $form->label($model,'hr_id'); ?>
		<?php echo $form->textField($model,'hr_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'client'); ?>
		<?php echo $form->textField($model,'client',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_results'); ?>
		<?php echo $form->textField($model,'max_results'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'geo_territory'); ?>
		<?php echo $form->textField($model,'geo_territory',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipv4address'); ?>
		<?php echo $form->textField($model,'ipv4address',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_archived'); ?>
		<?php echo $form->textField($model,'is_archived'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expire_date'); ?>
		<?php echo $form->textField($model,'expire_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->