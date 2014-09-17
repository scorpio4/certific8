<?php
/* @var $this SocialProfileController */
/* @var $model SocialProfile */

$this->breadcrumbs=array(
	'Social Profiles'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SocialProfile', 'url'=>array('index')),
	array('label'=>'Create SocialProfile', 'url'=>array('create')),
	array('label'=>'Update SocialProfile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SocialProfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SocialProfile', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View SocialProfile #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'social_id',
		'username',
		'profile_id',
        ),
)); ?>
    </div>
</div>