<?php
/* @var $this HrCommentController */
/* @var $model HrComment */

$this->breadcrumbs = array(
    'Hr Shortlist' => array('hrShortlist/admin'),
    'Hr Comments' => array('admin', 'id' => $model->hr_shortlist_id),
    $model->hrShortlist->name,
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
                                'name' => 'hr_shortlist_id',
                                'value' => $model->hrShortlist->name
                            ),
                            'hr_candidate_id',
                            'user.username',
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
                            'preference',
                            'status',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>