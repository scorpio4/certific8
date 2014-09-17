<?php
/* @var $this HrController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hrs',
);

$this->menu=array(
	array('label'=>'Create Hr', 'url'=>array('create')),
	array('label'=>'Manage Hr', 'url'=>array('admin')),
);
?>

<h1>Hrs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
