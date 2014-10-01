<?php
/* @var $this OrgController */
/* @var $model Org */
/* @var $form CActiveForm */

$modelUser = User::model()->findAll();
$listUser = CHtml::listData($modelUser, 'id', 'username');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#Org_billing_user_id').select2(); 
        $('#Org_admin_user_id').select2(); 
    });
");
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'org-form',
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
            <?php echo $form->labelEx($model, 'legal_name'); ?>
            <?php echo $form->textField($model, 'legal_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'legal_name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'tax_number'); ?>
            <?php echo $form->textField($model, 'tax_number', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'tax_number'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'logo'); ?>
            <?php echo $form->fileField($model, 'logo'); ?>
            <?php echo $form->error($model, 'logo'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'billing_user_id'); ?>
            <?php echo $form->dropDownList($model, 'billing_user_id', $listUser, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'billing_user_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'admin_user_id'); ?>
            <?php echo $form->dropDownList($model, 'admin_user_id', $listUser, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'admin_user_id'); ?>
        </div>

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'is_registered'); ?>
            <?php echo $form->dropDownList($model, 'is_registered', array('0' => 'NO', '1' => 'YES'), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_registered'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?>

