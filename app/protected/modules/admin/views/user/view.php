<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<div class="panel">
 <div class="panel-heading panel-head">View User #<?php echo $model->id; ?></div>
<div class="panel-body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'full_name',
		'email',
		'mobile',
		'house_unit_number',
		'street',
		'suburb',
		'state',
		'postcode',
		'country',
		'username',
		'registration_token',
                array(
                    'label'=>'Avatar',
                    'type'=>'raw',
                    'value'=> CHtml::image(Yii::app()->request->baseUrl.'/uploads/avatar/'.$model->id.'/'.$model->avatar,$model->first_name,array('style'=>'width:200px;')),
                    'visible'=>$model->avatar!="avatar.png"
                ),
		'is_registered',
		'is_paid',
		'is_test',
		'membership_id',
		'profile_id',
		'current_salary',
		'geo_territory',
		'ipv4address',
		'first_joined',
		'last_seen',
		'last_valdiated',
	),
)); ?>
</div>
</div>
