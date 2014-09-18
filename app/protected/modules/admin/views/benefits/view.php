<?php
/* @var $this BenefitsController */
/* @var $model Benefits */

$this->breadcrumbs = array(
    'Benefits' => array('admin'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Benefits', 'url' => array('index')),
    array('label' => 'Create Benefits', 'url' => array('create')),
    array('label' => 'Update Benefits', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Benefits', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Benefits', 'url' => array('admin')),
);
?>

<div class="panel">
    <div class="panel-heading panel-head">View Benefits #<?php echo $model->id; ?></div>
    <div class="panel-body">

        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
            'attributes' => array(
                'id',
                'name',
                'fn',
                array(
                    'label'=>'Membership',
                    'name'=>'membership.name',
                ),
                'status',
            ),
        ));
        ?>
    </div>
</div>