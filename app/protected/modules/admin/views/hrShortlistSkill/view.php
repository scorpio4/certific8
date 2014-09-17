<?php
/* @var $this HrShortlistSkillController */
/* @var $model HrShortlistSkill */

$this->breadcrumbs=array(
	'Hr Shortlist Skills'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HrShortlistSkill', 'url'=>array('index')),
	array('label'=>'Create HrShortlistSkill', 'url'=>array('create')),
	array('label'=>'Update HrShortlistSkill', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HrShortlistSkill', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HrShortlistSkill', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View HrShortlistSkill #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'is_required',
		'hr_shortlist_id',
		'skill_id',
        ),
)); ?>
    </div>
</div>