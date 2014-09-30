<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */

$modelMembership = Membership::model()->findAll();
$listMembership = CHtml::listData($modelMembership, 'id', 'name');

$modelProfile = Profile::model()->findAllByAttributes(array('user_id' => $model->id));
$listProfile = CHtml::listData($modelProfile, 'id', 'full_name');
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>

<?php echo $form->errorSummary($model); ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'first_name'); ?>
            <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'first_name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'last_name'); ?>
            <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'last_name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'full_name'); ?>
            <?php echo $form->textField($model, 'full_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'full_name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'mobile'); ?>
            <?php echo $form->textField($model, 'mobile', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'mobile'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'house_unit_number'); ?>
            <?php echo $form->textField($model, 'house_unit_number', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'house_unit_number'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'street'); ?>
            <?php echo $form->textField($model, 'street', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'street'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'suburb'); ?>
            <?php echo $form->textField($model, 'suburb', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'suburb'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'state'); ?>
            <?php echo $form->textField($model, 'state', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'state'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'postcode'); ?>
            <?php echo $form->textField($model, 'postcode', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'postcode'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'country'); ?>
            <?php echo $form->textField($model, 'country', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'country'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'registration_token'); ?>
            <?php echo $form->textField($model, 'registration_token', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'registration_token'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'avatar'); ?>
            <?php echo $form->fileField($model, 'avatar'); ?>
            <?php echo $form->error($model, 'avatar'); ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'is_registered'); ?>
            <?php echo $form->dropDownList($model, 'is_registered', array('0' => 'NO', '1' => 'YES'), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_registered'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'is_paid'); ?>
            <?php echo $form->dropDownList($model, 'is_paid', array('0' => 'NO', '1' => 'YES'), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_paid'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'is_test'); ?>
            <?php echo $form->dropDownList($model, 'is_test', array('0' => 'NO', '1' => 'YES'), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_test'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'membership_id'); ?>
            <?php echo $form->dropDownList($model, 'membership_id', $listMembership, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'membership_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'profile_id'); ?>
            <?php echo $form->dropDownList($model, 'profile_id', $listProfile, array('class' => 'form-control', 'empty' => 'Select')); ?>
            <?php echo $form->error($model, 'profile_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'current_salary'); ?>
            <?php echo $form->textField($model, 'current_salary', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'current_salary'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'geo_territory'); ?>
            <?php echo $form->textField($model, 'geo_territory', array('size' => 32, 'maxlength' => 32, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'geo_territory'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'ipv4address'); ?>
            <?php echo $form->textField($model, 'ipv4address', array('size' => 16, 'maxlength' => 16, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'ipv4address'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'first_joined'); ?>
            <?php echo $form->textField($model, 'first_joined', array('disabled' => true, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'first_joined'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'last_seen'); ?>
            <?php echo $form->textField($model, 'last_seen', array('disabled' => true, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'last_seen'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'last_valdiated'); ?>
            <?php echo $form->textField($model, 'last_valdiated', array('disabled' => true, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'last_valdiated'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>


