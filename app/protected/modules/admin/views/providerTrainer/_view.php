<?php
/* @var $this ProviderTrainerController */
/* @var $data ProviderTrainer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trainer_id')); ?>:</b>
	<?php echo CHtml::encode($data->trainer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provider_id')); ?>:</b>
	<?php echo CHtml::encode($data->provider_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valid_until')); ?>:</b>
	<?php echo CHtml::encode($data->valid_until); ?>
	<br />


</div>