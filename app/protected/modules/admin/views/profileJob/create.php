<?php
/* @var $this ProfileJobController */
/* @var $model ProfileJob */

$this->breadcrumbs=array(
	'Profile Jobs'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfileJob', 'url'=>array('index')),
	array('label'=>'Manage ProfileJob', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create ProfileJob</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



