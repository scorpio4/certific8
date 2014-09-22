<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */

$modelTemplate = ProfileTemplate::model()->findAll();
$listTemplate = CHtml::listData($modelTemplate, 
                'id', 'template_name');

$modelMembership = Membership::model()->findAll();
$listMembership = CHtml::listData($modelMembership, 
                'id', 'name');

$modelUser = User::model()->findAll();
$listUser = CHtml::listData($modelUser, 
                'id', 'username');

$modelHr = Hr::model()->findAll();
$listHr = CHtml::listData($modelHr, 
                'id', 'org.legal_name');
?>

<div class="row">
    <div class="col-sm-5">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'profile-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
        ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'slugname'); ?>
            <?php echo $form->textField($model, 'slugname', array('size' => 16, 'maxlength' => 16,'class'=>'form-control')); ?>
            <?php echo $form->error($model, 'slugname'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'full_name'); ?>
            <?php echo $form->textField($model, 'full_name', array('size' => 60, 'maxlength' => 255,'class'=>'form-control')); ?>
            <?php echo $form->error($model, 'full_name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'short_title'); ?>
            <?php echo $form->textField($model, 'short_title', array('size' => 60, 'maxlength' => 255,'class'=>'form-control')); ?>
            <?php echo $form->error($model, 'short_title'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'short_bio'); ?>
            <?php echo $form->textArea($model, 'short_bio', array('rows' => 6, 'cols' => 50,'class'=>'form-control')); ?>
            <?php echo $form->error($model, 'short_bio'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'avatar'); ?>
            <?php echo $form->fileField($model, 'avatar'); ?>
            <?php echo $form->error($model, 'avatar'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'template_id'); ?>
            <?php echo $form->dropDownList($model, 'template_id',$listTemplate,array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'template_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'is_active'); ?>
            <?php echo $form->dropDownList( $model,'is_active', array('0'=>'NO','1'=>'YES'),array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'is_active'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'is_public'); ?>
            <?php echo $form->dropDownList( $model,'is_public', array('0'=>'NO','1'=>'YES'),array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'is_public'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'can_contact'); ?>
            <?php echo $form->dropDownList( $model,'can_contact', array('0'=>'NO','1'=>'YES'),array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'can_contact'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'show_vouches'); ?>
            <?php echo $form->dropDownList( $model,'show_vouches', array('0'=>'NO','1'=>'YES'),array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'show_vouches'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'min_salary'); ?>
            <?php echo $form->textField($model, 'min_salary',array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'min_salary'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'user_id'); ?>
            <?php echo $form->dropDownList($model, 'user_id',$listUser,array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'user_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'hr_id'); ?>
            <?php echo $form->dropDownList($model, 'hr_id',$listHr,array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'hr_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'membership_id'); ?>
            <?php echo $form->dropDownList($model, 'membership_id',$listMembership,array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'membership_id'); ?>
        </div>

        <div class="form-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-blue')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
</div>