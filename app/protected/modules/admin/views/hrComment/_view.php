<?php
/* @var $this HrCommentController */
/* @var $data HrComment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hr_shortlist_id')); ?>:</b>
	<?php echo CHtml::encode($data->hr_shortlist_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hr_candidate_id')); ?>:</b>
	<?php echo CHtml::encode($data->hr_candidate_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preference')); ?>:</b>
	<?php echo CHtml::encode($data->preference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>