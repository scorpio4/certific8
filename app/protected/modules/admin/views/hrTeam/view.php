<?php
/* @var $this HrTeamController */
/* @var $model HrTeam */

$this->breadcrumbs = array(
    'Hr' => array('hr/admin'),
    'Hr Teams' => array('admin', 'id' => $model->org_id),
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
                                'name' => 'org.legal_name',
                            ),
                            'user.username',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>