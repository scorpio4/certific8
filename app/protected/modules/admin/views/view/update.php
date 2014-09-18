<?php
/* @var $this ViewController */
/* @var $model View */

$this->breadcrumbs=array(
	'Views'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List View', 'url'=>array('index')),
	array('label'=>'Create View', 'url'=>array('create')),
	array('label'=>'View View', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage View', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update View <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


