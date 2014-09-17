<?php
/* @var $this SocialProfileController */
/* @var $model SocialProfile */

$this->breadcrumbs=array(
	'Social Profiles'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SocialProfile', 'url'=>array('index')),
	array('label'=>'Manage SocialProfile', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create SocialProfile</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



