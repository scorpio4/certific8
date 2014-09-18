<?php
/* @var $this SkillTrainerController */
/* @var $model SkillTrainer */

$this->breadcrumbs=array(
	'Skill Trainers'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SkillTrainer', 'url'=>array('index')),
	array('label'=>'Manage SkillTrainer', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create SkillTrainer</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



