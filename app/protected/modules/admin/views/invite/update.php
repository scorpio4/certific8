<?php
/* @var $this InviteController */
/* @var $model Invite */

$this->breadcrumbs = array(
    'Invites' => array('admin'),
    $model->user->username => array('view', 'id' => $model->id),
    'Update',
);
?>

<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



