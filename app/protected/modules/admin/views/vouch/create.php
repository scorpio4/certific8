<?php
/* @var $this VouchController */
/* @var $model Vouch */

$this->breadcrumbs=array(
	'Vouches'=>array('admin'),
	'Create',
);

?>
<div class="panel">
    <div class="panel-heading panel-head">Create Vouch</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    
    </div>
</div>



