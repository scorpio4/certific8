<?php
/* @var $this TrainerController */
/* @var $model Trainer */

$this->breadcrumbs = array(
    'Trainers' => array('admin'),
    $model->org->legal_name,
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
                                'label' => 'Organization',
                                'name' => 'org.legal_name'
                            ),
                            array(
                                'label' => 'Membership',
                                'name' => 'membership.name'
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <div class="panel panel-default">
                    <?php
                    $this->widget('zii.widgets.CDetailView', array(
                        'data' => $model,
                        'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
                        'attributes' => array(
                            'is_registered',
                            'is_paid',
                            'first_joined',
                            'last_seen',
                            'last_valdiated',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>