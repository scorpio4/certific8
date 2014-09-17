<?php
/* @var $this HrTeamController */
/* @var $model HrTeam */

$this->breadcrumbs=array(
        'Hr'=>array('hr/admin'),
	'Hr Teams'=>array('admin','id'=>$model->org_id),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HrTeam', 'url'=>array('index')),
	array('label'=>'Create HrTeam', 'url'=>array('create')),
	array('label'=>'Update HrTeam', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HrTeam', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HrTeam', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View HrTeam #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
                array(
                    'label'=>'Organization',
                    'name'=>'org.legal_name',
                ),
		'user.username',
        ),
)); ?>
    </div>
</div>