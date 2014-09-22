<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs = array(
    'Orgs' => array('admin'),
    $model->id,
);

?>

<div class="panel">
    <div class="panel-heading panel-head">View Org #<?php echo $model->id; ?></div>
    <div class="panel-body">

        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
            'attributes' => array(
                'id',
                'legal_name',
                'tax_number',
                array(
                    'label'=>'Logo',
                    'type'=>'raw',
                    'value'=> CHtml::image(Yii::app()->request->baseUrl.'/uploads/logo/'.$model->id.'/'.$model->logo,$model->legal_name,array('style'=>'width:200px;')),
                    'visible'=>$model->logo!="logo.png"
                ),
                array(
                    'label'=>'Billing User',
                    'name'=>'billingUser.username',
                ),
                array(
                    'label'=>'Admin User',
                    'name'=>'adminUser.username',
                ),
                'is_registered',
            ),
        ));
        ?>
    </div>
</div>