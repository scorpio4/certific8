<?php
/* @var $this HrShortlistController */
/* @var $model HrShortlist */

$this->breadcrumbs=array(
	'Hr Shortlists'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List HrShortlist', 'url'=>array('index')),
	array('label'=>'Create HrShortlist', 'url'=>array('create')),
	array('label'=>'Update HrShortlist', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HrShortlist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HrShortlist', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View HrShortlist #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'hr_id',
		'user_id',
		'name',
		'client',
		'max_results',
		'geo_territory',
		'ipv4address',
		'is_archived',
		'create_date',
		'expire_date',
        ),
)); ?>
    </div>
</div>