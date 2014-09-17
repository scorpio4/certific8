<?php
/* @var $this OrgController */
/* @var $data Org */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('legal_name')); ?>:</b>
	<?php echo CHtml::encode($data->legal_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_number')); ?>:</b>
	<?php echo CHtml::encode($data->tax_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php echo CHtml::encode($data->logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('billing_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->billing_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_registered')); ?>:</b>
	<?php echo CHtml::encode($data->is_registered); ?>
	<br />


</div>