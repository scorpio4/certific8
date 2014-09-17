<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Roles'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Role', 'url'=>array('index')),
	array('label'=>'Create Role', 'url'=>array('create')),
	array('label'=>'Update Role', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Role', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Role', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View Role #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'name',
        ),
)); ?>
    </div>
</div>