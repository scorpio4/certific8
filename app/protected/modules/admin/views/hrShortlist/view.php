<?php
/* @var $this HrShortlistController */
/* @var $model HrShortlist */

$this->breadcrumbs = array(
    'Hr Shortlists' => array('admin'),
    $model->name,
);

?>

<div class="panel">
    <div class="panel-heading panel-head">View HrShortlist #<?php echo $model->id; ?></div>
    <div class="panel-body">

        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
            'attributes' => array(
                'id',
                array(
                  'label'=>'Organization',
                  'name'=>'hr.org.legal_name',
                ),
                'user.username',
                'name',
                'client',
                'max_results',
                'geo_territory',
                'ipv4address',
                'is_archived',
                'create_date',
                'expire_date',
            ),
        ));
        ?>
    </div>
</div>