<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?>:</b>
	<?php echo CHtml::encode($data->full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('house_unit_number')); ?>:</b>
	<?php echo CHtml::encode($data->house_unit_number); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('street')); ?>:</b>
	<?php echo CHtml::encode($data->street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suburb')); ?>:</b>
	<?php echo CHtml::encode($data->suburb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_sha256')); ?>:</b>
	<?php echo CHtml::encode($data->password_sha256); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_token')); ?>:</b>
	<?php echo CHtml::encode($data->registration_token); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar')); ?>:</b>
	<?php echo CHtml::encode($data->avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_registered')); ?>:</b>
	<?php echo CHtml::encode($data->is_registered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_paid')); ?>:</b>
	<?php echo CHtml::encode($data->is_paid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_test')); ?>:</b>
	<?php echo CHtml::encode($data->is_test); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_id')); ?>:</b>
	<?php echo CHtml::encode($data->membership_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile_id')); ?>:</b>
	<?php echo CHtml::encode($data->profile_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_salary')); ?>:</b>
	<?php echo CHtml::encode($data->current_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('geo_territory')); ?>:</b>
	<?php echo CHtml::encode($data->geo_territory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipv4address')); ?>:</b>
	<?php echo CHtml::encode($data->ipv4address); ?>
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