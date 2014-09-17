<?php
/* @var $this ProfileTemplateController */
/* @var $model ProfileTemplate */

$this->breadcrumbs=array(
	'Profile Templates'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfileTemplate', 'url'=>array('index')),
	array('label'=>'Create ProfileTemplate', 'url'=>array('create')),
	array('label'=>'View ProfileTemplate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProfileTemplate', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update ProfileTemplate <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


