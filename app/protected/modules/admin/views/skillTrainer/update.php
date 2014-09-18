<?php
/* @var $this SkillTrainerController */
/* @var $model SkillTrainer */

$this->breadcrumbs=array(
	'Skill Trainers'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SkillTrainer', 'url'=>array('index')),
	array('label'=>'Create SkillTrainer', 'url'=>array('create')),
	array('label'=>'View SkillTrainer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SkillTrainer', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update SkillTrainer <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


