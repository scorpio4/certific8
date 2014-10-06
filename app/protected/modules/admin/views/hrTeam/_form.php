<?php
/* @var $this HrTeamController */
/* @var $model HrTeam */
/* @var $form CActiveForm */

$modelUser = User::model()->findAll();
$listUser = CHtml::listData($modelUser, 'id', 'username');

$modelOrg = Org::model()->findAll();
$listOrg = CHtml::listData($modelOrg, 'id', 'legal_name');

Yii::app()->clientScript->registerScript('select2', "   
    $(document).ready(function() { 
        $('#HrTeam_org_id').select2(); 
        $('#HrTeam_user_id').select2(); 
    });
");
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'hr-team-form',
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
            <?php echo $form->labelEx($model, 'user_id'); ?>
            <?php echo $form->dropDownList($model, 'user_id', $listUser, array('style' => 'width:100%','empty'=>'Select')); ?>
            <?php echo $form->error($model, 'user_id'); ?>
        </div>
    </div>
</div>
<div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    <?php echo CHtml::link('Cancel', array('hr/admin'), array('class'=>'btn btn-default')); ?>
</div>

<?php $this->endWidget(); ?>
