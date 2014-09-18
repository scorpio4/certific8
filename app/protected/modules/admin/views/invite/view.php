<?php
/* @var $this InviteController */
/* @var $model Invite */

$this->breadcrumbs = array(
    'Invites' => array('admin'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Invite', 'url' => array('index')),
    array('label' => 'Create Invite', 'url' => array('create')),
    array('label' => 'Update Invite', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Invite', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Invite', 'url' => array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View Invite #<?php echo $model->id; ?></div>
    <div class="panel-body">

        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
            'attributes' => array(
                'id',
                'user.username',
                'email',
                'create_date',
            ),
        ));
        ?>
    </div>
</div>