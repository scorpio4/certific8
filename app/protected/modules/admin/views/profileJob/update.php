<?php
/* @var $this ProfileJobController */
/* @var $model ProfileJob */

$this->breadcrumbs=array(
	'Profile Jobs'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfileJob', 'url'=>array('index')),
	array('label'=>'Create ProfileJob', 'url'=>array('create')),
	array('label'=>'View ProfileJob', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProfileJob', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update ProfileJob <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


