<?php
/* @var $this HrShortlistController */
/* @var $model HrShortlist */

$this->breadcrumbs = array(
    'Hr Shortlists' => array('admin'),
    $model->name,
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
                                'name' => 'hr.org.legal_name',
                            ),
                            'user.username',
                            'name',
                            'client',
                            'max_results',
                            'geo_territory',
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
                            'ipv4address',
                            array(
                                'name'=>'is_archived',
                                'value'=>$model->is_archived=='1'?'YES':'NO',
                            ),
                            'create_date',
                            'expire_date',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>