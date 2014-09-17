<?php
/* @var $this HrShortlistController */
/* @var $model HrShortlist */

$this->breadcrumbs=array(
	'Hr Shortlists'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HrShortlist', 'url'=>array('index')),
	array('label'=>'Create HrShortlist', 'url'=>array('create')),
	array('label'=>'View HrShortlist', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HrShortlist', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update HrShortlist <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


