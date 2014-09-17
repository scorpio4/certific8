<?php
/* @var $this ProviderController */
/* @var $model Provider */
/* @var $form CActiveForm */

$modelOrg = Org::model()->findAll();
$listOrg = CHtml::listData($modelOrg, 
                'id', 'legal_name');

$modelMembership = Membership::model()->findAll();
$listMembership = CHtml::listData($modelMembership, 
                'id', 'name');
?>

<div class="row">
    <div class="col-sm-5">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'provider-form',
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
            <?php echo $form->labelEx($model, 'membership_id'); ?>
            <?php echo $form->dropDownList($model, 'membership_id',$listMembership, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'membership_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'cert_website'); ?>
            <?php echo $form->textField($model, 'cert_website', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'cert_website'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'cert_email'); ?>
            <?php echo $form->textField($model, 'cert_email', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'cert_email'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'description'); ?>
            <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description'); ?> 
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'is_registered'); ?>
            <?php echo $form->textField($model, 'is_registered', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_registered'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'is_paid'); ?>
            <?php echo $form->textField($model, 'is_paid', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'is_paid'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'first_joined'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'first_joined',
                // additional javascript options for the date picker plugin
                'options' => array(
                    'showAnim' => 'fold', 'dateFormat' => 'yy-mm-dd'
                ),
                'htmlOptions' => array(
                    'class' => 'form-control',),
            ));
            ?>
            <?php echo $form->error($model, 'first_joined'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'last_seen'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'last_seen',
                // additional javascript options for the date picker plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'dateFormat' => 'yy-mm-dd'
                ),
                'htmlOptions' => array(
                    'class' => 'form-control',
                ),
            ));
            ?>
            <?php echo $form->error($model, 'last_seen'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'last_valdiated'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'last_valdiated',
                // additional javascript options for the date picker plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'dateFormat' => 'yy-mm-dd'
                ),
                'htmlOptions' => array(
                    'class' => 'form-control',
                ),
            ));
            ?>
            <?php echo $form->error($model, 'last_valdiated'); ?>
        </div>

        <div class="form-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-blue')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
</div>