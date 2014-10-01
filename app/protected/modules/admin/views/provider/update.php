<?php
/* @var $this ProviderController */
/* @var $model Provider */

$this->breadcrumbs = array(
    'Providers' => array('admin'),
    $model->org->legal_name => array('view', 'id' => $model->id),
    'Update',
);
?>
<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



