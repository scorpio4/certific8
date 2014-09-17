<?php
/* @var $this ProfileSkillController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profile Skills',
);

$this->menu=array(
	array('label'=>'Create ProfileSkill', 'url'=>array('create')),
	array('label'=>'Manage ProfileSkill', 'url'=>array('admin')),
);
?>

<h1>Profile Skills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
