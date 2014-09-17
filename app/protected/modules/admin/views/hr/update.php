<?php
/* @var $this HrController */
/* @var $model Hr */

$this->breadcrumbs=array(
	'Hrs'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hr', 'url'=>array('index')),
	array('label'=>'Create Hr', 'url'=>array('create')),
	array('label'=>'View Hr', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hr', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Hr <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


