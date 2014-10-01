<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs = array(
    'Orgs' => array('admin'),
    $model->legal_name => array('view', 'id' => $model->id),
    'Update',
);
?>

<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



