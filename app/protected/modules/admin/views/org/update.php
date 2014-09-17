<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs=array(
	'Orgs'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Org', 'url'=>array('index')),
	array('label'=>'Create Org', 'url'=>array('create')),
	array('label'=>'View Org', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Org', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Org <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


