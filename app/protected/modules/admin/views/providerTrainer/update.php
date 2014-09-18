<?php
/* @var $this ProviderTrainerController */
/* @var $model ProviderTrainer */

$this->breadcrumbs=array(
	'Provider Trainers'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProviderTrainer', 'url'=>array('index')),
	array('label'=>'Create ProviderTrainer', 'url'=>array('create')),
	array('label'=>'View ProviderTrainer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProviderTrainer', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update ProviderTrainer <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


