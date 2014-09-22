<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->breadcrumbs = array(
    'Trainers' => array('admin'),
    'Create',
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Trainer</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>    
    </div>
</div>



