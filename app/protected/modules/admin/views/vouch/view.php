<?php
/* @var $this VouchController */
/* @var $model Vouch */

$this->breadcrumbs = array(
    'Vouches' => array('admin'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Vouch', 'url' => array('index')),
    array('label' => 'Create Vouch', 'url' => array('create')),
    array('label' => 'Update Vouch', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Vouch', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Vouch', 'url' => array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View Vouch #<?php echo $model->id; ?></div>
    <div class="panel-body">

        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
            'attributes' => array(
                'id',
                array(
                    'label'=>'From User',
                    'name'=>'fromUser.username',
                ),
                array(
                    'label'=>'To User',
                    'name'=>'toUser.username',
                ),
                'comment',
                'rating',
                'create_date',
            ),
        ));
        ?>
    </div>
</div>