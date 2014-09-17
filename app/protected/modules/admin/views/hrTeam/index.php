<?php
/* @var $this HrTeamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hr Teams',
);

$this->menu=array(
	array('label'=>'Create HrTeam', 'url'=>array('create')),
	array('label'=>'Manage HrTeam', 'url'=>array('admin')),
);
?>

<h1>Hr Teams</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
