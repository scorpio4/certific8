<?php
/* @var $this ViewController */
/* @var $model View */

$this->breadcrumbs=array(
	'Views'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List View', 'url'=>array('index')),
	array('label'=>'Create View', 'url'=>array('create')),
	array('label'=>'Update View', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete View', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage View', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View View #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'user_id',
		'profile_id',
		'view_date',
        ),
)); ?>
    </div>
</div>