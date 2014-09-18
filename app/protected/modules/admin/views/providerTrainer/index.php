<?php
/* @var $this ProviderTrainerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Provider Trainers',
);

$this->menu=array(
	array('label'=>'Create ProviderTrainer', 'url'=>array('create')),
	array('label'=>'Manage ProviderTrainer', 'url'=>array('admin')),
);
?>

<h1>Provider Trainers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
