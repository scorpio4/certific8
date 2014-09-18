<?php
/* @var $this ProviderTrainerController */
/* @var $model ProviderTrainer */

$this->breadcrumbs = array(
    'Provider Trainers' => array('admin'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List ProviderTrainer', 'url' => array('index')),
    array('label' => 'Create ProviderTrainer', 'url' => array('create')),
    array('label' => 'Update ProviderTrainer', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete ProviderTrainer', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage ProviderTrainer', 'url' => array('admin')),
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