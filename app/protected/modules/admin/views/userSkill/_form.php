<?php
/* @var $this UserSkillController */
/* @var $model UserSkill */
/* @var $form CActiveForm */

$modelUser = User::model()->findAll();
$listUser = CHtml::listData($modelUser, 
                'id', 'username');

$modelSkill = Skill::model()->findAll();
$listSkill = CHtml::listData($modelSkill, 
                'id', 'title');

$modelTrainer = Trainer::model()->findAll();
$listTrainer = CHtml::listData($modelTrainer, 
                'id', 'org.legal_name');
?>

<div class="row">
    <div class="col-sm-5">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'user-skill-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
        ));
        ?>

        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'user_id'); ?>
            <?php echo $form->dropDownList($model, 'user_id',$listUser,array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'user_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'skill_id'); ?>
            <?php echo $form->dropDownList($model, 'skill_id',$listSkill,array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'skill_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'trainer_id'); ?>
            <?php echo $form->dropDownList($model, 'trainer_id',$listTrainer,array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'trainer_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'award_number'); ?>
            <?php echo $form->textField($model, 'award_number', array('size' => 60, 'maxlength' => 255,'class'=>'form-control')); ?>
            <?php echo $form->error($model, 'award_number'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'award_rank'); ?>
            <?php echo $form->textField($model, 'award_rank',array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'award_rank'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'award_date'); ?>
            <?php echo $form->textField($model, 'award_date',array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'award_date'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'expiry_date'); ?>
            <?php echo $form->textField($model, 'expiry_date',array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'expiry_date'); ?>
        </div>

        <div class="form-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-blue')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
</div>