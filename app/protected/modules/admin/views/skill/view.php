<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs=array(
	'Skills'=>array('admin'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Skill', 'url'=>array('index')),
	array('label'=>'Create Skill', 'url'=>array('create')),
	array('label'=>'Update Skill', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Skill', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Skill', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View Skill #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'title',
		'details',
		'keywords',
		'logo',
		'webpage',
		'certified_by',
		'provider_id',
		'skill_discipline_id',
		'level',
		'start_date',
		'end_date',
		'status',
        ),
)); ?>
    </div>
</div>