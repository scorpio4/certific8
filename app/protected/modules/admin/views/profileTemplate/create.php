<?php
/* @var $this ProfileTemplateController */
/* @var $model ProfileTemplate */

$this->breadcrumbs=array(
	'Profile Templates'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfileTemplate', 'url'=>array('index')),
	array('label'=>'Manage ProfileTemplate', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create ProfileTemplate</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



