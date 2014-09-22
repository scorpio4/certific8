<?php
/* @var $this HrController */
/* @var $model Hr */

$this->breadcrumbs=array(
	'Hrs'=>array('admin'),
	$model->id,
);

?>

<div class="panel">
    <div class="panel-heading panel-head">View Hr #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
                array(
                    'label'=>'Organization',
                    'name'=>'org.legal_name'
                ),
                array(
                    'label'=>'Membership',
                    'name'=>'membership.name'
                ),
		'is_registered',
		'is_paid',
		'first_joined',
		'last_seen',
		'last_valdiated',
        ),
)); ?>
    </div>
</div>