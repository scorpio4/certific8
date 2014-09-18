<?php
/* @var $this BenefitsController */
/* @var $model Benefits */

$this->breadcrumbs=array(
	'Benefits'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Benefits', 'url'=>array('index')),
	array('label'=>'Create Benefits', 'url'=>array('create')),
	array('label'=>'View Benefits', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Benefits', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Benefits <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


