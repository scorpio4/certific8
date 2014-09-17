<?php
/* @var $this HrShortlistController */
/* @var $data HrShortlist */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hr_id')); ?>:</b>
	<?php echo CHtml::encode($data->hr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client')); ?>:</b>
	<?php echo CHtml::encode($data->client); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_results')); ?>:</b>
	<?php echo CHtml::encode($data->max_results); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('geo_territory')); ?>:</b>
	<?php echo CHtml::encode($data->geo_territory); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ipv4address')); ?>:</b>
	<?php echo CHtml::encode($data->ipv4address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_archived')); ?>:</b>
	<?php echo CHtml::encode($data->is_archived); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expire_date')); ?>:</b>
	<?php echo CHtml::encode($data->expire_date); ?>
	<br />

	*/ ?>

</div>