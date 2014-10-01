<?php
/* @var $this ProfileJobController */
/* @var $model ProfileJob */

$this->breadcrumbs = array(
    'Profile' => array('profile/admin'),
    'Profile Jobs' => array('admin', 'id' => $model->profile_id),
    $model->profile->full_name => array('view', 'id' => $model->id),
    'Update',
);
?>

<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



