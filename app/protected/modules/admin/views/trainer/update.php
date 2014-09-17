<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->breadcrumbs=array(
	'Trainers'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trainer', 'url'=>array('index')),
	array('label'=>'Create Trainer', 'url'=>array('create')),
	array('label'=>'View Trainer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Trainer', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Trainer <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


