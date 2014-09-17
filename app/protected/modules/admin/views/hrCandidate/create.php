<?php
/* @var $this HrCandidateController */
/* @var $model HrCandidate */

$this->breadcrumbs=array(
	'Hr Candidates'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HrCandidate', 'url'=>array('index')),
	array('label'=>'Manage HrCandidate', 'url'=>array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create HrCandidate</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



