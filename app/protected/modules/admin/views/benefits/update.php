<?php
/* @var $this BenefitsController */
/* @var $model Benefits */

$this->breadcrumbs=array(
	'Benefits'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Benefits <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


