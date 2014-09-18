<?php
/* @var $this BenefitsController */
/* @var $data Benefits */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fn')); ?>:</b>
	<?php echo CHtml::encode($data->fn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_id')); ?>:</b>
	<?php echo CHtml::encode($data->membership_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>