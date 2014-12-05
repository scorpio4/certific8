<?php
/* @var $this OrgController */
/* @var $model Org */

$this->breadcrumbs = array(
    'Orgs' => array('admin'),
    $model->legal_name,
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
                            'legal_name',
                            'tax_number',
                            array(
                                'label' => 'Logo',
                                'type' => 'raw',
                                'value' => CHtml::image(Yii::app()->request->baseUrl . '/uploads/logo/' . $model->id . '/' . $model->logo, $model->legal_name, array('style' => 'width:200px;')),
                                'visible' => $model->logo != "logo.png"
                            ),
                            array(
                                'label' => 'Billing User',
                                'name' => 'billingUser.username',
                            ),
                            array(
                                'label' => 'Admin User',
                                'name' => 'adminUser.username',
                            ),
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
                            'brand_name',
                            'brand_description',
                            array(
                                'name'=>'is_registered',
                                'value'=>$model->is_registered=='1'?'YES':'NO',
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>