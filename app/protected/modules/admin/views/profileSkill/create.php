<?php
/* @var $this ProfileSkillController */
/* @var $model ProfileSkill */

$this->breadcrumbs=array(
	'Profile Skills'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfileSkill', 'url'=>array('index')),
	array('label'=>'Manage ProfileSkill', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create ProfileSkill</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



