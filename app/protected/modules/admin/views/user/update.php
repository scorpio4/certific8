<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update User <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>


