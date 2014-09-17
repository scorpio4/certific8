<?php
/* @var $this ProviderController */
/* @var $data Provider */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('org_id')); ?>:</b>
	<?php echo CHtml::encode($data->org_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_id')); ?>:</b>
	<?php echo CHtml::encode($data->membership_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cert_website')); ?>:</b>
	<?php echo CHtml::encode($data->cert_website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cert_email')); ?>:</b>
	<?php echo CHtml::encode($data->cert_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_registered')); ?>:</b>
	<?php echo CHtml::encode($data->is_registered); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_paid')); ?>:</b>
	<?php echo CHtml::encode($data->is_paid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_joined')); ?>:</b>
	<?php echo CHtml::encode($data->first_joined); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_seen')); ?>:</b>
	<?php echo CHtml::encode($data->last_seen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_valdiated')); ?>:</b>
	<?php echo CHtml::encode($data->last_valdiated); ?>
	<br />

	*/ ?>

</div>