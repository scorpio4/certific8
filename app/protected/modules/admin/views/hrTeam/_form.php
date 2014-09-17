<?php
/* @var $this HrTeamController */
/* @var $model HrTeam */
/* @var $form CActiveForm */

$modelUser = User::model()->findAll();
$listUser = CHtml::listData($modelUser, 
                'id', 'username');

$modelOrg = Org::model()->findAll();
$listOrg = CHtml::listData($modelOrg, 
                'id', 'legal_name');
?>

<div class="row">
    <div class="col-sm-5">

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

        <div class="form-group">
            <?php echo $form->labelEx($model, 'org_id'); ?>
            <?php echo $form->dropDownList($model, 'org_id',$listOrg, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'org_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'user_id'); ?>
            <?php echo $form->dropDownList($model, 'user_id',$listUser,array('class'=>'form-control')); ?>
            <?php echo $form->error($model, 'user_id'); ?>
        </div>

        <div class="form-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-blue')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
</div>