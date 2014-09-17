<?php
/* @var $this ProviderController */
/* @var $model Provider */

$this->breadcrumbs=array(
	'Providers'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Provider', 'url'=>array('index')),
	array('label'=>'Create Provider', 'url'=>array('create')),
	array('label'=>'View Provider', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Provider', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Provider <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


