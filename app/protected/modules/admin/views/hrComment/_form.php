<?php
/* @var $this HrCommentController */
/* @var $model HrComment */
/* @var $form CActiveForm */

$modelUser = User::model()->findAll();
$listUser = CHtml::listData($modelUser, 
                'id', 'username');
?>

<div class="row">
    <div class="col-sm-5">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'hr-comment-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
        ));
        ?>

        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'hr_shortlist_id'); ?>
            <?php echo $form->textField($model, 'hr_shortlist_id',array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'hr_shortlist_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'hr_candidate_id'); ?>
            <?php echo $form->textField($model, 'hr_candidate_id',array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'hr_candidate_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'user_id'); ?>
            <?php echo $form->dropDownList($model, 'user_id',$listUser,array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'user_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'comment'); ?>
            <?php echo $form->textArea($model, 'comment', array('rows' => 6, 'cols' => 50,'class'=>'form-control')); ?>
            <?php echo $form->error($model, 'comment'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'preference'); ?>
            <?php echo $form->textField($model, 'preference',array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'preference'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'status'); ?>
            <?php echo $form->textField($model, 'status',array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>

        <div class="form-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-blue')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
</div>