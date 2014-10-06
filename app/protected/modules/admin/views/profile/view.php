<?php
/* @var $this ProfileController */
/* @var $model Profile */

$this->breadcrumbs = array(
    'Profiles' => array('admin'),
    $model->full_name,
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
                            //'id',
                            'slugname',
                            'full_name',
                            'label',
                            'short_title',
                            'short_bio',
                            array(
                                'label' => 'Avatar',
                                'type' => 'raw',
                                'value' => CHtml::image(Yii::app()->request->baseUrl . '/uploads/avatar/' . $model->user_id . '/' . $model->avatar, '', array('style' => 'width:200px;')),
                                'visible' => $model->avatar != "avatar.png"
                            ),
                            'min_salary',
                            'user.username',
                            array(
                                'name' => 'hr_id',
                                'value' => isset($model->hr->org->legal_name)?$model->hr->org->legal_name:"",
                            ),
                            array(
                                'name' => 'membership_id',
                                'value' => isset($model->membership->name)?$model->membership->name:"",
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
                            array(
                                'name' => 'template_id',
                                'value' => $model->template->template_name,
                            ),
                            array(
                                'name'=>'is_active',
                                'value'=>$model->is_active=='1'?'YES':'NO',
                            ),
                            array(
                                'name'=>'is_public',
                                'value'=>$model->is_public=='1'?'YES':'NO',
                            ),
                            array(
                                'name'=>'can_contact',
                                'value'=>$model->can_contact=='1'?'YES':'NO',
                            ),
                            array(
                                'name'=>'show_vouches',
                                'value'=>$model->show_vouches=='1'?'YES':'NO',
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>