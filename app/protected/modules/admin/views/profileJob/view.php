<?php
/* @var $this ProfileJobController */
/* @var $model ProfileJob */

$this->breadcrumbs=array(
	'Profile Jobs'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProfileJob', 'url'=>array('index')),
	array('label'=>'Create ProfileJob', 'url'=>array('create')),
	array('label'=>'Update ProfileJob', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProfileJob', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfileJob', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View ProfileJob #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'profile_id',
		'org_id',
		'job_title',
		'hr_id',
		'rating',
		'comment',
		'start_date',
		'end_date',
        ),
)); ?>
    </div>
</div>