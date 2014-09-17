<?php
/* @var $this HrCommentController */
/* @var $model HrComment */

$this->breadcrumbs=array(
	'Hr Comments'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HrComment', 'url'=>array('index')),
	array('label'=>'Manage HrComment', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create HrComment</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



