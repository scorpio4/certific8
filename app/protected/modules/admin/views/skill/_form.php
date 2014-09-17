<?php
/* @var $this SkillController */
/* @var $model Skill */
/* @var $form CActiveForm */

$modelProvider = Provider::model()->findAll();
$listProvider = CHtml::listData($modelProvider, 
                'id', 'org.legal_name');

$modelDiscp = SkillDiscipline::model()->findAll();
$listDiscp = CHtml::listData($modelDiscp, 
                'id', 'name');
?>

<div class="row">
    <div class="col-sm-5">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'skill-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
        ));
        ?>

        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'title'); ?>
            <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'title'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'details'); ?>
            <?php echo $form->textArea($model, 'details', array('rows' => 6, 'cols' => 50,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'details'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'keywords'); ?>
            <?php echo $form->textArea($model, 'keywords', array('rows' => 6, 'cols' => 50,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'keywords'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'logo'); ?>
            <?php echo $form->textField($model, 'logo', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'logo'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'webpage'); ?>
            <?php echo $form->textField($model, 'webpage', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'webpage'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'certified_by'); ?>
            <?php echo $form->textField($model, 'certified_by', array('size' => 60, 'maxlength' => 255,'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'certified_by'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'provider_id'); ?>
            <?php echo $form->dropDownList($model, 'provider_id',$listProvider, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'provider_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'skill_discipline_id'); ?>
            <?php echo $form->dropDownList($model, 'skill_discipline_id',$listDiscp, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'skill_discipline_id'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'level'); ?>
            <?php echo $form->textField($model, 'level', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'level'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'start_date'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'start_date',
                // additional javascript options for the date picker plugin
                'options' => array(
                    'showAnim' => 'fold', 'dateFormat' => 'yy-mm-dd'
                ),
                'htmlOptions' => array(
                    'class' => 'form-control',),
            ));
            ?>
            <?php echo $form->error($model, 'start_date'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'end_date'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'end_date',
                // additional javascript options for the date picker plugin
                'options' => array(
                    'showAnim' => 'fold', 'dateFormat' => 'yy-mm-dd'
                ),
                'htmlOptions' => array(
                    'class' => 'form-control',),
            ));
            ?>
            <?php echo $form->error($model, 'end_date'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'status'); ?>
            <?php echo $form->textField($model, 'status', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>

        <div class="form-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-blue')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
</div>