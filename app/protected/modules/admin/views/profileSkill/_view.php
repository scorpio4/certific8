<?php
/* @var $this ProfileSkillController */
/* @var $data ProfileSkill */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile_id')); ?>:</b>
	<?php echo CHtml::encode($data->profile_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skill_id')); ?>:</b>
	<?php echo CHtml::encode($data->skill_id); ?>
	<br />


</div>