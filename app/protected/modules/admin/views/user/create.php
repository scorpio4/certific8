<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Users' => array('admin'),
    'Create',
);

$this->menu = array(
    //array('label' => 'List User', 'url' => array('index')),
    //array('label' => 'Manage User', 'url' => array('admin')),
);
?>
<div class="panel">
    <div class="panel-heading panel-head">Create User</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>


