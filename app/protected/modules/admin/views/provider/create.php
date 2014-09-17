<?php
/* @var $this ProviderController */
/* @var $model Provider */

$this->breadcrumbs=array(
	'Providers'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Provider', 'url'=>array('index')),
	array('label'=>'Manage Provider', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Provider</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



