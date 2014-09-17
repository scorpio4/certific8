<?php
/* @var $this ProviderController */
/* @var $model Provider */

$this->breadcrumbs=array(
	'Providers'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Provider', 'url'=>array('index')),
	array('label'=>'Create Provider', 'url'=>array('create')),
	array('label'=>'Update Provider', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Provider', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Provider', 'url'=>array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View Provider #<?php echo $model->id; ?></div>
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
		'cert_website',
		'cert_email',
		'description',
		'is_registered',
		'is_paid',
		'first_joined',
		'last_seen',
		'last_valdiated',
        ),
)); ?>
    </div>
</div>