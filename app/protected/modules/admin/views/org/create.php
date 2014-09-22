<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs = array(
    'Orgs' => array('admin'),
    'Create',
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create Org</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>    
    </div>
</div>



