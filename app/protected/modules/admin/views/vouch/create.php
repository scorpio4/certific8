<?php
/* @var $this VouchController */
/* @var $model Vouch */

$this->breadcrumbs=array(
	'Vouches'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vouch', 'url'=>array('index')),
	array('label'=>'Manage Vouch', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Vouch</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



