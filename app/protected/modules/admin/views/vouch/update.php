<?php
/* @var $this VouchController */
/* @var $model Vouch */

$this->breadcrumbs = array(
    'Vouches' => array('admin'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);
?>

<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



