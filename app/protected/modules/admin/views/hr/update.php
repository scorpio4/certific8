<?php
/* @var $this HrController */
/* @var $model Hr */

$this->breadcrumbs = array(
    'Hrs' => array('admin'),
    $model->org->legal_name => array('view', 'id' => $model->id),
    'Update',
);
?>
<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>


