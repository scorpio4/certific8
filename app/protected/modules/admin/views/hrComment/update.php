<?php
/* @var $this HrCommentController */
/* @var $model HrComment */

$this->breadcrumbs=array(
	'Hr Shortlist'=>array('hrShortlist/admin'),
	'Hr Comments'=>array('admin','id'=>$model->hr_shortlist_id),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HrComment', 'url'=>array('index')),
	array('label'=>'Create HrComment', 'url'=>array('create')),
	array('label'=>'View HrComment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HrComment', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update HrComment <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


