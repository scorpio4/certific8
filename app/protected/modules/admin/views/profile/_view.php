<?php
/* @var $this ProfileController */
/* @var $data Profile */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slugname')); ?>:</b>
	<?php echo CHtml::encode($data->slugname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?>:</b>
	<?php echo CHtml::encode($data->full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('short_title')); ?>:</b>
	<?php echo CHtml::encode($data->short_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('short_bio')); ?>:</b>
	<?php echo CHtml::encode($data->short_bio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar')); ?>:</b>
	<?php echo CHtml::encode($data->avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('template_id')); ?>:</b>
	<?php echo CHtml::encode($data->template_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_public')); ?>:</b>
	<?php echo CHtml::encode($data->is_public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('can_contact')); ?>:</b>
	<?php echo CHtml::encode($data->can_contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('show_vouches')); ?>:</b>
	<?php echo CHtml::encode($data->show_vouches); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_salary')); ?>:</b>
	<?php echo CHtml::encode($data->min_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hr_id')); ?>:</b>
	<?php echo CHtml::encode($data->hr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_id')); ?>:</b>
	<?php echo CHtml::encode($data->membership_id); ?>
	<br />

	*/ ?>

</div>