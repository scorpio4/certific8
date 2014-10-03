<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs = array(
    'Roles' => array('admin'),
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
                            'name',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>