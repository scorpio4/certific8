<?php
/* @var $this SocialController */
/* @var $model Social */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'social-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>

<?php echo $form->errorSummary($model); ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'title'); ?>
            <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'title'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'website'); ?>
            <?php echo $form->textField($model, 'website', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'website'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'small_logo_url'); ?>
            <?php echo $form->textField($model, 'small_logo_url', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'small_logo_url'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'large_logo_url'); ?>
            <?php echo $form->textField($model, 'large_logo_url', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'large_logo_url'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'username_title'); ?>
            <?php echo $form->textField($model, 'username_title', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'username_title'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'url_template'); ?>
            <?php echo $form->textField($model, 'url_template', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'url_template'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'oauth_url'); ?>
            <?php echo $form->textField($model, 'oauth_url', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'oauth_url'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>
