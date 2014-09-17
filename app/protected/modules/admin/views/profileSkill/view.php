<?php
/* @var $this ProfileSkillController */
/* @var $model ProfileSkill */

$this->breadcrumbs=array(
	'Profile Skills'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProfileSkill', 'url'=>array('index')),
	array('label'=>'Create ProfileSkill', 'url'=>array('create')),
	array('label'=>'Update ProfileSkill', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProfileSkill', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfileSkill', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View ProfileSkill #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'profile_id',
		'skill_id',
        ),
)); ?>
    </div>
</div>