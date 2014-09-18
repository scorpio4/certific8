<?php
/* @var $this ViewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Views',
);

$this->menu=array(
	array('label'=>'Create View', 'url'=>array('create')),
	array('label'=>'Manage View', 'url'=>array('admin')),
);
?>

<h1>Views</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
