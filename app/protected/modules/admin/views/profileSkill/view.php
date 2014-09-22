<?php
/* @var $this ProfileSkillController */
/* @var $model ProfileSkill */

$this->breadcrumbs=array(
        'Profile' => array('profile/admin'),
        'Profile Skills' => array('admin', 'id' =>$model->profile_id),
	$model->id,
);


?>

<div class="panel">
    <div class="panel-heading panel-head">View ProfileSkill #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
                array(
                    'name'=>'profile_id',
                    'value'=>$model->profile->full_name,
                ),
                array(
                    'name'=>'skill_id',
                    'value'=>$model->skill->title,
                ),
        ),
)); ?>
    </div>
</div>