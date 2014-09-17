<?php
/* @var $this HrCommentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hr Comments',
);

$this->menu=array(
	array('label'=>'Create HrComment', 'url'=>array('create')),
	array('label'=>'Manage HrComment', 'url'=>array('admin')),
);
?>

<h1>Hr Comments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
