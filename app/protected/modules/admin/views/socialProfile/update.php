<?php
/* @var $this SocialProfileController */
/* @var $model SocialProfile */

$this->breadcrumbs=array(
	'Social Profiles'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SocialProfile', 'url'=>array('index')),
	array('label'=>'Create SocialProfile', 'url'=>array('create')),
	array('label'=>'View SocialProfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SocialProfile', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Update SocialProfile <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


