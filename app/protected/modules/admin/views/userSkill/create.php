<?php
/* @var $this UserSkillController */
/* @var $model UserSkill */

$this->breadcrumbs = array(
    'User Skills' => array('admin'),
    'Create',
);

//$this->menu=array(
//	array('label'=>'List UserSkill', 'url'=>array('index')),
//	array('label'=>'Manage UserSkill', 'url'=>array('admin')),
//);
?>

<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>




