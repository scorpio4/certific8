<?php
/* @var $this VouchController */
/* @var $model Vouch */

$this->breadcrumbs=array(
	'Vouches'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vouch', 'url'=>array('index')),
	array('label'=>'Create Vouch', 'url'=>array('create')),
	array('label'=>'View Vouch', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vouch', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Vouch <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


