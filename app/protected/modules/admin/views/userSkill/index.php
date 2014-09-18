<?php
/* @var $this UserSkillController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Skills',
);

$this->menu=array(
	array('label'=>'Create UserSkill', 'url'=>array('create')),
	array('label'=>'Manage UserSkill', 'url'=>array('admin')),
);
?>

<h1>User Skills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
