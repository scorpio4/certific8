<?php
/* @var $this UserSkillController */
/* @var $model UserSkill */

$this->breadcrumbs = array(
    'User' => array('user/admin'),
    'User Skills' => array('admin', 'id' => $model->user_id),
    $model->skill->title => array('view', 'id' => $model->id),
    'Update',
);

//$this->menu=array(
//	array('label'=>'List UserSkill', 'url'=>array('index')),
//	array('label'=>'Create UserSkill', 'url'=>array('create')),
//	array('label'=>'View UserSkill', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage UserSkill', 'url'=>array('admin')),
//);
?>

<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



