<?php
/* @var $this HrShortlistSkillController */
/* @var $model HrShortlistSkill */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'is_required'); ?>
		<?php echo $form->textField($model,'is_required'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hr_shortlist_id'); ?>
		<?php echo $form->textField($model,'hr_shortlist_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skill_id'); ?>
		<?php echo $form->textField($model,'skill_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->