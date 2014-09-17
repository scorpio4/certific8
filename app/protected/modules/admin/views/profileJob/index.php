<?php
/* @var $this ProfileJobController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profile Jobs',
);

$this->menu=array(
	array('label'=>'Create ProfileJob', 'url'=>array('create')),
	array('label'=>'Manage ProfileJob', 'url'=>array('admin')),
);
?>

<h1>Profile Jobs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
