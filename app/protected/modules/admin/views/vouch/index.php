<?php
/* @var $this VouchController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vouches',
);

$this->menu=array(
	array('label'=>'Create Vouch', 'url'=>array('create')),
	array('label'=>'Manage Vouch', 'url'=>array('admin')),
);
?>

<h1>Vouches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
