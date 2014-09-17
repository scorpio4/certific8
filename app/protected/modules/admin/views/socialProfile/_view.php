<?php
/* @var $this SocialProfileController */
/* @var $data SocialProfile */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('social_id')); ?>:</b>
	<?php echo CHtml::encode($data->social_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile_id')); ?>:</b>
	<?php echo CHtml::encode($data->profile_id); ?>
	<br />


</div>