<?php
/* @var $this BenefitsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Benefits',
);

$this->menu=array(
	array('label'=>'Create Benefits', 'url'=>array('create')),
	array('label'=>'Manage Benefits', 'url'=>array('admin')),
);
?>

<h1>Benefits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
