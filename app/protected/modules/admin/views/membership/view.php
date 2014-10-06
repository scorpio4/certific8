<?php
/* @var $this MembershipController */
/* @var $model Membership */

$this->breadcrumbs = array(
    'Memberships' => array('admin'),
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
                            'description',
                            array(
                                'label' => 'Logo',
                                'type' => 'raw',
                                'value' => CHtml::image(Yii::app()->request->baseUrl . '/uploads/membership/' . $model->logo, '', array('style' => 'width:200px;')),
                                'visible' => $model->logo != "member.png"
                            ),
                            'price',
                            'duration_days',
                            'max_skills',
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
                            array(
                                'name'=>'can_search',
                                'value'=>$model->can_search=='1'?'YES':'NO',
                            ),
                            array(
                                'name'=>'can_contact',
                                'value'=>$model->can_contact=='1'?'YES':'NO',
                            ),
                            array(
                                'name'=>'status',
                                'value'=>$model->status=='1'?'ENABLED':'DISABLED',
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>