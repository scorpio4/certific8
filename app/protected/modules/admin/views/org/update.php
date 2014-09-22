<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs=array(
	'Orgs'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>
<div class="panel">
    <div class="panel-heading panel-head">Update Org <?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>


