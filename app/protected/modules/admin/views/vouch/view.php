<?php
/* @var $this VouchController */
/* @var $model Vouch */

$this->breadcrumbs = array(
    'Vouches' => array('admin'),
    $model->id,
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
                            array(
                                'label' => 'From User',
                                'name' => 'fromUser.username',
                            ),
                            array(
                                'label' => 'To User',
                                'name' => 'toUser.username',
                            ),
                            'comment',
                            'rating',
                            'create_date',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
