<?php
/* @var $this HrShortlistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hr Shortlists',
);

$this->menu=array(
	array('label'=>'Create HrShortlist', 'url'=>array('create')),
	array('label'=>'Manage HrShortlist', 'url'=>array('admin')),
);
?>

<h1>Hr Shortlists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
