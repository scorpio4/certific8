<?php
/* @var $this HrTeamController */
/* @var $model HrTeam */

$this->breadcrumbs=array(
	'Hr Teams'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HrTeam', 'url'=>array('index')),
	array('label'=>'Create HrTeam', 'url'=>array('create')),
	array('label'=>'View HrTeam', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HrTeam', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update HrTeam <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


