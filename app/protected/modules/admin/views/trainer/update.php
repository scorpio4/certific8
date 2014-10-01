<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->breadcrumbs = array(
    'Trainers' => array('admin'),
    $model->org->legal_name => array('view', 'id' => $model->id),
    'Update',
);
?>

<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



