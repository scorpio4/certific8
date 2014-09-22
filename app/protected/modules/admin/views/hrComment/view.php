<?php
/* @var $this HrCommentController */
/* @var $model HrComment */

$this->breadcrumbs=array(
        'Hr Shortlist'=>array('hrShortlist/admin'),
	'Hr Comments'=>array('admin','id'=>$model->hr_shortlist_id),
	$model->id,
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
		'user.username',
		'comment',
		'preference',
		'status',
        ),
)); ?>
    </div>
</div>