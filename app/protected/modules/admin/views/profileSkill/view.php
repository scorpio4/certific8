<?php
/* @var $this ProfileSkillController */
/* @var $model ProfileSkill */

$this->breadcrumbs = array(
    'Profile' => array('profile/admin'),
    'Profile Skills' => array('admin', 'id' => $model->profile_id),
    $model->profile->full_name,
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
                            array(
                                'name' => 'profile_id',
                                'value' => $model->profile->full_name,
                            ),
                            array(
                                'name' => 'skill_id',
                                'value' => $model->skill->title,
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>