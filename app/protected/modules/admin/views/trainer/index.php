<?php
/* @var $this TrainerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trainers',
);

$this->menu=array(
	array('label'=>'Create Trainer', 'url'=>array('create')),
	array('label'=>'Manage Trainer', 'url'=>array('admin')),
);
?>

<h1>Trainers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
