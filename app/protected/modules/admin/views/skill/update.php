<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs=array(
	'Skills'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Skill <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


