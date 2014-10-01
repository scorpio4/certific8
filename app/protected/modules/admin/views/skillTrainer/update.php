<?php
/* @var $this SkillTrainerController */
/* @var $model SkillTrainer */

$this->breadcrumbs = array(
    'Skill Trainers' => array('admin'),
    $model->trainer->org->legal_name => array('view', 'id' => $model->id),
    'Update',
);
?>
<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



