<?php
/* @var $this HrShortlistSkillController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hr Shortlist Skills',
);

$this->menu=array(
	array('label'=>'Create HrShortlistSkill', 'url'=>array('create')),
	array('label'=>'Manage HrShortlistSkill', 'url'=>array('admin')),
);
?>

<h1>Hr Shortlist Skills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
