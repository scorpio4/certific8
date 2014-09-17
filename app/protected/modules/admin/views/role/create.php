<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Roles'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Role', 'url'=>array('index')),
	array('label'=>'Manage Role', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Role</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



