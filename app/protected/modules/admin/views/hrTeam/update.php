<?php
/* @var $this HrTeamController */
/* @var $model HrTeam */

$this->breadcrumbs = array(
    'Hr' => array('hr/admin'),
    'Hr Teams' => array('admin', 'id' => $model->org_id),
    $model->org->legal_name => array('view', 'id' => $model->id),
    'Update',
);
?>
<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



