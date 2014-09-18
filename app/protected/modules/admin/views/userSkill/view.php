<?php
/* @var $this UserSkillController */
/* @var $model UserSkill */

$this->breadcrumbs=array(
        'User'=>array('user/admin'),
	'User Skills'=>array('admin','id'=>$model->user_id),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserSkill', 'url'=>array('index')),
	array('label'=>'Create UserSkill', 'url'=>array('create')),
	array('label'=>'Update UserSkill', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserSkill', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserSkill', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View UserSkill #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'user.username',
                array(
                    'label'=>'Skill',
                    'name'=>'skill.title',
                ),
                array(
                    'label'=>'Trainer',
                    'name'=>'trainer.org.legal_name',
                ),
		'award_number',
		'award_rank',
		'award_date',
		'expiry_date',
        ),
)); ?>
    </div>
</div>