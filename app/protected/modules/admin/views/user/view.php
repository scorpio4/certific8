<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Users' => array('admin'),
    $model->first_name,
);

$this->menu = array(
        //array('label'=>'List User', 'url'=>array('index')),
        //array('label'=>'Create User', 'url'=>array('create'),'linkOptions'=>array('class'=>'btn btn-green btn-sm')),
        //array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
        //array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
        //array('label'=>'Manage User', 'url'=>array('admin')),
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
                        'htmlOptions' => array('class' => 'table table-striped table-view'),
                        'attributes' => array(
                            'first_name',
                            'last_name',
                            'full_name',
                            'email',
                            'mobile',
                            'house_unit_number',
                            'street',
                            'suburb',
                            'state',
                            'postcode',
                            'country',
                            'username',
                            'registration_token',
                            array(
                                'label' => 'Avatar',
                                'type' => 'raw',
                                'value' => CHtml::image(Yii::app()->request->baseUrl . '/uploads/avatar/' . $model->id . '/' . $model->avatar, $model->first_name, array('style' => 'width:200px;')),
                                'visible' => $model->avatar != "avatar.png"
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
                        'htmlOptions' => array('class' => 'table table-striped table-view'),
                        'attributes' => array(
                            array(
                                'name'=>'is_registered',
                                'value'=>$model->is_registered=='1'?'YES':'NO',
                            ),
                            array(
                                'name'=>'is_paid',
                                'value'=>$model->is_paid=='1'?'YES':'NO',
                            ),
                            array(
                                'name'=>'is_test',
                                'value'=>$model->is_test=='1'?'YES':'NO',
                            ),
                            array(
                                'name'=>'membership_id',
                                'value'=>isset($model->membership->name)?$model->membership->name:''
                            ),
                            'profile_id',
                            'current_salary',
                            'geo_territory',
                            'ipv4address',
                            'first_joined',
                            'last_seen',
                            'last_valdiated',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
