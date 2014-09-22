<?php
/* @var $this InviteController */
/* @var $model Invite */

$this->breadcrumbs = array(
    'Invites' => array('admin'),
    $model->id,
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