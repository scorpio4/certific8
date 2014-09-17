<?php
/* @var $this HrShortlistController */
/* @var $model HrShortlist */

$this->breadcrumbs=array(
	'Hr Shortlists'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HrShortlist', 'url'=>array('index')),
	array('label'=>'Manage HrShortlist', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create HrShortlist</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


