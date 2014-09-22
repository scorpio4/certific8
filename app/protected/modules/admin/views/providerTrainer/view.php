<?php
/* @var $this ProviderTrainerController */
/* @var $model ProviderTrainer */

$this->breadcrumbs = array(
    'Provider Trainers' => array('admin'),
    $model->id,
);

?>

<div class="panel">
    <div class="panel-heading panel-head">View ProviderTrainer #<?php echo $model->id; ?></div>
    <div class="panel-body">

        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
            'attributes' => array(
                'id',
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