<?php
/* @var $this SkillTrainerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Skill Trainers',
);

$this->menu=array(
	array('label'=>'Create SkillTrainer', 'url'=>array('create')),
	array('label'=>'Manage SkillTrainer', 'url'=>array('admin')),
);
?>

<h1>Skill Trainers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
