<?php
/* @var $this ProviderTrainerController */
/* @var $model ProviderTrainer */

$this->breadcrumbs=array(
	'Provider Trainers'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>
<div class="panel">
    <div class="panel-heading panel-head">Update ProviderTrainer <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


