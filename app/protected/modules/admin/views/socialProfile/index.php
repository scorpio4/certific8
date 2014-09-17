<?php
/* @var $this SocialProfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Social Profiles',
);

$this->menu=array(
	array('label'=>'Create SocialProfile', 'url'=>array('create')),
	array('label'=>'Manage SocialProfile', 'url'=>array('admin')),
);
?>

<h1>Social Profiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
