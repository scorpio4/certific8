<?php
/* @var $this MembershipController */
/* @var $model Membership */

$this->breadcrumbs=array(
	'Memberships'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Membership', 'url'=>array('index')),
	array('label'=>'Create Membership', 'url'=>array('create')),
	array('label'=>'View Membership', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Membership', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update Membership <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


