<?php
/* @var $this HrCommentController */
/* @var $model HrComment */

$this->breadcrumbs=array(
	'Hr Comments'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HrComment', 'url'=>array('index')),
	array('label'=>'Create HrComment', 'url'=>array('create')),
	array('label'=>'Update HrComment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HrComment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HrComment', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View HrComment #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'hr_shortlist_id',
		'hr_candidate_id',
		'user_id',
		'comment',
		'preference',
		'status',
        ),
)); ?>
    </div>
</div>