<?php
/* @var $this ProfileJobController */
/* @var $model ProfileJob */

$this->breadcrumbs = array(
    'Profile' => array('profile/admin'),
    'Profile Jobs' => array('admin', 'id' => $model->profile_id),
    $model->profile->full_name,
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
                                'name' => 'profile_id',
                                'value' => $model->profile->full_name,
                            ),
                            array(
                                'name' => 'org_id',
                                'value' => $model->org->legal_name,
                            ),
                            'job_title',
                            array(
                                'name' => 'hr_id',
                                'value' => $model->hr->org->legal_name,
                            ),
                            'comment',
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
                            'rating',
                            'start_date',
                            'end_date',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>