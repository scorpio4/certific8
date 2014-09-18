<?php
/* @var $this BenefitsController */
/* @var $model Benefits */

$this->breadcrumbs=array(
	'Benefits'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Benefits', 'url'=>array('index')),
	array('label'=>'Manage Benefits', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Benefits</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



