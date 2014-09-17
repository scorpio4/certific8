<?php
/* @var $this ProfileTemplateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profile Templates',
);

$this->menu=array(
	array('label'=>'Create ProfileTemplate', 'url'=>array('create')),
	array('label'=>'Manage ProfileTemplate', 'url'=>array('admin')),
);
?>

<h1>Profile Templates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
