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
                            'hr_id',
                            'membership_id',
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
                            'is_active',
                            'is_public',
                            'can_contact',
                            'show_vouches',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>