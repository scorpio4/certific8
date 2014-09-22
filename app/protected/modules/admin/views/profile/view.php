<?php
/* @var $this ProfileController */
/* @var $model Profile */

$this->breadcrumbs = array(
    'Profiles' => array('admin'),
    $model->id,
);

?>
<div class="panel">
    <div class="panel-heading panel-head">View Profile #<?php echo $model->id; ?></div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
            'attributes' => array(
                'id',
                'slugname',
                'full_name',
                'short_title',
                'short_bio',
                array(
                    'label'=>'Avatar',
                    'type'=>'raw',
                    'value'=> CHtml::image(Yii::app()->request->baseUrl.'/uploads/avatar/'.$model->user_id.'/'.$model->avatar,'',array('style'=>'width:200px;')),
                    'visible'=>$model->avatar!="avatar.png"
                ),
                'template_id',
                'is_active',
                'is_public',
                'can_contact',
                'show_vouches',
                'min_salary',
                'user.username',
                'hr_id',
                'membership_id',
            ),
        ));
        ?>
    </div>
</div>
