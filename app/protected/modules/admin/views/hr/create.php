<?php
/* @var $this HrController */
/* @var $model Hr */

$this->breadcrumbs=array(
	'Hrs'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hr', 'url'=>array('index')),
	array('label'=>'Manage Hr', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Hr</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



