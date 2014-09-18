<?php
/* @var $this HrCandidateController */
/* @var $model HrCandidate */

$this->breadcrumbs=array(
	'Hr Shortlist'=>array('hrShortlist/admin'),
	'Hr Candidates'=>array('admin','id'=>$model->hr_shortlist_id),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HrCandidate', 'url'=>array('index')),
	array('label'=>'Create HrCandidate', 'url'=>array('create')),
	array('label'=>'View HrCandidate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HrCandidate', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update HrCandidate <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


