<?php
/* @var $this SkillTrainerController */
/* @var $model SkillTrainer */

$this->breadcrumbs = array(
    'Skill Trainers' => array('admin'),
    $model->id,
);

?>

<div class="panel">
    <div class="panel-heading panel-head">View SkillTrainer #<?php echo $model->id; ?></div>
    <div class="panel-body">

        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
            'attributes' => array(
                'id',
                array(
                    'name' => 'trainer_id',
                    'value' => $model->trainer->org->legal_name,
                ),
                array(
                    'name' => 'skill_id',
                    'value' => $model->skill->title,
                ),
                'webpage',
                'valid_until',
            ),
        ));
        ?>
    </div>
</div>