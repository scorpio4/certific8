<?php
/* @var $this HrCommentController */
/* @var $model HrComment */

$this->breadcrumbs=array(
	'Hr Comments'=>array('admin'),
	'Create',
);

?>
<div class="panel">
    <div class="panel-heading panel-head">Create HrComment</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    </div>
</div>



