<?php
/* @var $this SocialController */
/* @var $data Social */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('small_logo_url')); ?>:</b>
	<?php echo CHtml::encode($data->small_logo_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('large_logo_url')); ?>:</b>
	<?php echo CHtml::encode($data->large_logo_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username_title')); ?>:</b>
	<?php echo CHtml::encode($data->username_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url_template')); ?>:</b>
	<?php echo CHtml::encode($data->url_template); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('oauth_url')); ?>:</b>
	<?php echo CHtml::encode($data->oauth_url); ?>
	<br />

	*/ ?>

</div>