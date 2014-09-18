<?php
/* @var $this ViewController */
/* @var $model View */

$this->breadcrumbs=array(
	'Views'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List View', 'url'=>array('index')),
	array('label'=>'Manage View', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create View</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



