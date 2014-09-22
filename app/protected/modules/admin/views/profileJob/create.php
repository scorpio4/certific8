<?php
/* @var $this ProfileJobController */
/* @var $model ProfileJob */

$this->breadcrumbs = array(
    'Profiles' => array('profile/admin'),
    'Create',
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create ProfileJob</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>    
    </div>
</div>



