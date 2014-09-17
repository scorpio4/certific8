<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->breadcrumbs=array(
	'Trainers'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Trainer', 'url'=>array('index')),
	array('label'=>'Create Trainer', 'url'=>array('create')),
	array('label'=>'Update Trainer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Trainer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trainer', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View Trainer #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'org_id',
		'membership_id',
		'is_registered',
		'is_paid',
		'first_joined',
		'last_seen',
		'last_valdiated',
        ),
)); ?>
    </div>
</div>