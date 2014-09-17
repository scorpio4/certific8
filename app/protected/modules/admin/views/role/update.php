<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Roles'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Role', 'url'=>array('index')),
	array('label'=>'Create Role', 'url'=>array('create')),
	array('label'=>'View Role', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Role', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Role <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


