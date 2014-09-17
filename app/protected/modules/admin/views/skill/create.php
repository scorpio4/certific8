<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs=array(
	'Skills'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Skill', 'url'=>array('index')),
	array('label'=>'Manage Skill', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Skill</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



