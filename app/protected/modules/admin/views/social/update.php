<?php
/* @var $this SocialController */
/* @var $model Social */

$this->breadcrumbs=array(
	'Socials'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Social', 'url'=>array('index')),
	array('label'=>'Create Social', 'url'=>array('create')),
	array('label'=>'View Social', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Social', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Social <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


