<?php
/* @var $this UserSkillController */
/* @var $data UserSkill */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skill_id')); ?>:</b>
	<?php echo CHtml::encode($data->skill_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trainer_id')); ?>:</b>
	<?php echo CHtml::encode($data->trainer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_number')); ?>:</b>
	<?php echo CHtml::encode($data->award_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_rank')); ?>:</b>
	<?php echo CHtml::encode($data->award_rank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('award_date')); ?>:</b>
	<?php echo CHtml::encode($data->award_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('expiry_date')); ?>:</b>
	<?php echo CHtml::encode($data->expiry_date); ?>
	<br />

	*/ ?>

</div>