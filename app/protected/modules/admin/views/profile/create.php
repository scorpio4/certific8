<?php
/* @var $this ProfileController */
/* @var $model Profile */

$this->breadcrumbs=array(
	'Profiles'=>array('admin'),
	'Create',
);

?>
<div class="panel">
    <div class="panel-heading panel-head">Create Profile</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>    
    </div>
</div>
