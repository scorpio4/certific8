<?php
/* @var $this ProviderTrainerController */
/* @var $model ProviderTrainer */

$this->breadcrumbs=array(
	'Provider Trainers'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProviderTrainer', 'url'=>array('index')),
	array('label'=>'Manage ProviderTrainer', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create ProviderTrainer</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



