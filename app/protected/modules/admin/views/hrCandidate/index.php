<?php
/* @var $this HrCandidateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hr Candidates',
);

$this->menu=array(
	array('label'=>'Create HrCandidate', 'url'=>array('create')),
	array('label'=>'Manage HrCandidate', 'url'=>array('admin')),
);
?>

<h1>Hr Candidates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
