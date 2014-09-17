<?php
/* @var $this MembershipController */
/* @var $model Membership */

$this->breadcrumbs=array(
	'Memberships'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Membership', 'url'=>array('index')),
	array('label'=>'Create Membership', 'url'=>array('create')),
	array('label'=>'Update Membership', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Membership', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Membership', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View Membership #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'name',
		'description',
		'logo',
		'price',
		'duration_days',
		'can_search',
		'can_contact',
		'max_skills',
		'status',
        ),
)); ?>
    </div>
</div>