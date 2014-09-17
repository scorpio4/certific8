<?php
/* @var $this HrShortlistSkillController */
/* @var $data HrShortlistSkill */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_required')); ?>:</b>
	<?php echo CHtml::encode($data->is_required); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hr_shortlist_id')); ?>:</b>
	<?php echo CHtml::encode($data->hr_shortlist_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skill_id')); ?>:</b>
	<?php echo CHtml::encode($data->skill_id); ?>
	<br />


</div>