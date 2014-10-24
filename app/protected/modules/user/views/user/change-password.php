<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Change Password',
);

?>
<div class="panel">
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-5">
                <?php if(Yii::app()->user->hasFlash('success')):?>
                    <div class="alert alert-success" role="alert">
                        <?php echo Yii::app()->user->getFlash('success'); ?>
                    </div>
                <?php endif; ?>
                <?php $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'changepassword',
                                'enableAjaxValidation'=>false,
                                'clientOptions'=>array('validateOnSubmit'=>true,'validateOnChange' => false,),
                                'htmlOptions'=>array(
                                        'enctype'=>'multipart/form-data',
                                ),
                        )); ?>
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'oldpassword'); ?>
                        <?php echo $form->passwordField($model,'oldpassword',array('class'=>'form-control')); ?>
                        <?php echo $form->error($model,'oldpassword'); ?>
                     </div>
                     <div class="form-group">
                        <?php echo $form->labelEx($model,'newpassword'); ?>
                        <?php echo $form->passwordField($model,'newpassword',array('class'=>'form-control')); ?>
                        <?php echo $form->error($model,'newpassword'); ?>
                     </div>
                      <div class="form-group">
                        <?php echo $form->labelEx($model,'password2'); ?>
                        <?php echo $form->passwordField($model,'password2',array('class'=>'form-control')); ?>
                        <?php echo $form->error($model,'password2'); ?>
                     </div>
                    <div class="form-group">
                        <button class="btn btn-primary mr5">Submit</button>
                        <a href="<?php echo Yii::app()->homeUrl;?>" class="btn btn-default">Cancel</a>
                    </div>

                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>