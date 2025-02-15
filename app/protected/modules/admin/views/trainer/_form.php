<?php
/* @var $this TrainerController */
/* @var $model Trainer */
/* @var $form CActiveForm */

$modelOrg = Org::model()->findAll();
$listOrg = CHtml::listData($modelOrg, 'id', 'legal_name');

$modelMembership = Membership::model()->findAll();
$listMembership = CHtml::listData($modelMembership, 'id', 'name');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#Trainer_org_id').select2(); 
        $('#Trainer_membership_id').select2(); 
    });
");
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'trainer-form',
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
            <?php echo $form->labelEx($model, 'org_id'); ?>
            <?php echo $form->dropDownList($model, 'org_id', $listOrg, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'org_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'membership_id'); ?>
            <?php echo $form->dropDownList($model, 'membership_id', $listMembership, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'membership_id'); ?>
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
            <?php echo $form->labelEx($model, 'first_joined'); ?>
            <?php echo $form->textField($model, 'first_joined', array('class' => 'form-control', 'disabled' => true)); ?>
            <?php echo $form->error($model, 'first_joined'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'last_seen'); ?>
            <?php echo $form->textField($model, 'last_seen', array('class' => 'form-control', 'disabled' => true)); ?>
            <?php echo $form->error($model, 'last_seen'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'last_valdiated'); ?>
            <?php echo $form->textField($model, 'last_valdiated', array('class' => 'form-control', 'disabled' => true)); ?>
            <?php echo $form->error($model, 'last_valdiated'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    <?php echo CHtml::link('Cancel', array('admin'), array('class'=>'btn btn-default')); ?>
</div>

<?php $this->endWidget(); ?>

