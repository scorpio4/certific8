<?php
/* @var $this ProfileTemplateController */
/* @var $data ProfileTemplate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('template_name')); ?>:</b>
	<?php echo CHtml::encode($data->template_name); ?>
	<br />


</div>