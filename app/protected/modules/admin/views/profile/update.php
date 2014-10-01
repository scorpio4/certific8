<?php
/* @var $this ProfileController */
/* @var $model Profile */

$this->breadcrumbs = array(
    'Profiles' => array('admin'),
    $model->full_name => array('view', 'id' => $model->id),
    'Update',
);

//$this->menu=array(
//	array('label'=>'List Profile', 'url'=>array('index')),
//	array('label'=>'Create Profile', 'url'=>array('create')),
//	array('label'=>'View Profile', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Profile', 'url'=>array('admin')),
//);
?>

<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>
</div>

