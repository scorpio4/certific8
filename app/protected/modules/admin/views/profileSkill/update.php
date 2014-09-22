<?php
/* @var $this ProfileSkillController */
/* @var $model ProfileSkill */

$this->breadcrumbs=array(
        'Profile'=>array('profile/admin'),
	'Profile Skills'=>array('admin','id'=>$model->profile_id),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>
<div class="panel">
    <div class="panel-heading panel-head">Update ProfileSkill <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


