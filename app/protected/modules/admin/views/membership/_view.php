<?php
/* @var $this MembershipController */
/* @var $data Membership */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php echo CHtml::encode($data->logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration_days')); ?>:</b>
	<?php echo CHtml::encode($data->duration_days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_search')); ?>:</b>
	<?php echo CHtml::encode($data->can_search); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('can_contact')); ?>:</b>
	<?php echo CHtml::encode($data->can_contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_skills')); ?>:</b>
	<?php echo CHtml::encode($data->max_skills); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>