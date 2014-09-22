<?php
/* @var $this MembershipController */
/* @var $model Membership */

$this->breadcrumbs=array(
	'Memberships'=>array('admin'),
	$model->name,
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
                array(
                    'label'=>'Logo',
                    'type'=>'raw',
                    'value'=> CHtml::image(Yii::app()->request->baseUrl.'/uploads/membership/'.$model->logo,'',array('style'=>'width:200px;')),
                    'visible'=>$model->logo!="member.png"
                ),
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