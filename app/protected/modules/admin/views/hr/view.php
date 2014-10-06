<?php
/* @var $this HrController */
/* @var $model Hr */

$this->breadcrumbs = array(
    'Hrs' => array('admin'),
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
                            array(
                                'name'=>'is_registered',
                                'value'=>$model->is_registered=='1'?'YES':'NO',
                            ),
                            array(
                                'name'=>'is_paid',
                                'value'=>$model->is_paid=='1'?'YES':'NO',
                            ),
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