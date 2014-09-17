<?php
/* @var $this MembershipController */
/* @var $model Membership */

$this->breadcrumbs=array(
	'Memberships'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Membership', 'url'=>array('index')),
	array('label'=>'Manage Membership', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Membership</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



