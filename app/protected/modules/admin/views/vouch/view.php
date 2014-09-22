<?php
/* @var $this VouchController */
/* @var $model Vouch */

$this->breadcrumbs = array(
    'Vouches' => array('admin'),
    $model->id,
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