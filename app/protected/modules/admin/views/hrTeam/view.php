<?php
/* @var $this HrTeamController */
/* @var $model HrTeam */

$this->breadcrumbs=array(
        'Hr'=>array('hr/admin'),
	'Hr Teams'=>array('admin','id'=>$model->org_id),
	$model->id,
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