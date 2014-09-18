<?php
/* @var $this SkillTrainerController */
/* @var $model SkillTrainer */

$this->breadcrumbs = array(
    'Skill Trainers' => array('admin'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List SkillTrainer', 'url' => array('index')),
    array('label' => 'Create SkillTrainer', 'url' => array('create')),
    array('label' => 'Update SkillTrainer', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete SkillTrainer', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage SkillTrainer', 'url' => array('admin')),
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