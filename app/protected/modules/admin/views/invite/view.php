<?php
/* @var $this InviteController */
/* @var $model Invite */

$this->breadcrumbs = array(
    'Invites' => array('admin'),
    $model->user->username,
);
?>
<div class="panel-body">
    <div class="row">
        <div class="col-md-6">
            <div class="table-responsive">
                <div class="panel panel-default">

                    <?php
                    $this->widget('zii.widgets.CDetailView', array(
                        'data' => $model,
                        'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
                        'attributes' => array(
                            'user.username',
                            'email',
                            'create_date',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
