<?php
/* @var $this BenefitsController */
/* @var $model Benefits */

$this->breadcrumbs = array(
    'Benefits' => array('admin'),
    $model->name,
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