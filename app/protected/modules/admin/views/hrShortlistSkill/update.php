<?php
/* @var $this HrShortlistSkillController */
/* @var $model HrShortlistSkill */

$this->breadcrumbs=array(
	'Hr Shortlist'=>array('hrShortlist/admin'),
	'Hr Shortlist Skills'=>array('admin','id'=>$model->hr_shortlist_id),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HrShortlistSkill', 'url'=>array('index')),
	array('label'=>'Create HrShortlistSkill', 'url'=>array('create')),
	array('label'=>'View HrShortlistSkill', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HrShortlistSkill', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update HrShortlistSkill <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


