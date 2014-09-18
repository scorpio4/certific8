<?php
/* @var $this InviteController */
/* @var $model Invite */

$this->breadcrumbs=array(
	'Invites'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Invite', 'url'=>array('index')),
	array('label'=>'Manage Invite', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Invite</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



