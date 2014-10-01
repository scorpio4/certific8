<?php
/* @var $this ProviderTrainerController */
/* @var $model ProviderTrainer */

$this->breadcrumbs = array(
    'Provider Trainers' => array('admin'),
    $model->trainer->org->legal_name,
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
                                'name' => 'trainer_id',
                                'value' => $model->trainer->org->legal_name,
                            ),
                            array(
                                'name' => 'provider_id',
                                'value' => $model->provider->org->legal_name,
                            ),
                            'valid_until',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>