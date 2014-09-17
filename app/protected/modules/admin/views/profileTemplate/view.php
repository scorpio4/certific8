<?php
/* @var $this ProfileTemplateController */
/* @var $model ProfileTemplate */

$this->breadcrumbs=array(
	'Profile Templates'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProfileTemplate', 'url'=>array('index')),
	array('label'=>'Create ProfileTemplate', 'url'=>array('create')),
	array('label'=>'Update ProfileTemplate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProfileTemplate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfileTemplate', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View ProfileTemplate #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'template_name',
        ),
)); ?>
    </div>
</div>