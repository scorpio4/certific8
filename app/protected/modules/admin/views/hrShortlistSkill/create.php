<?php
/* @var $this HrShortlistSkillController */
/* @var $model HrShortlistSkill */

$this->breadcrumbs=array(
	'Hr Shortlist Skills'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HrShortlistSkill', 'url'=>array('index')),
	array('label'=>'Manage HrShortlistSkill', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create HrShortlistSkill</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



