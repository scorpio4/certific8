<?php
/* @var $this SocialController */
/* @var $model Social */

$this->breadcrumbs=array(
	'Socials'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Social', 'url'=>array('index')),
	array('label'=>'Manage Social', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Social</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


