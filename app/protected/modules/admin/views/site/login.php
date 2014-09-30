<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
?>
<div class="panel panel-signin">
    <div class="panel-body">
        <div class="logo text-center">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo-primary.png" alt="Chain Logo" >
        </div>
        <br />
        <h4 class="text-center mb5">Already a Member?</h4>
        <p class="text-center">Sign in to your account</p>

        <div class="mb30"></div>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>
        <div class="input-group mb15">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <?php echo $form->textField($model, 'username', array("onfocus" => "this.placeholder = ''", "onblur" => "this.placeholder = 'Username'", "class" => "form-control", "placeholder" => "Username")); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div><!-- input-group -->
        <div class="input-group mb15">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <?php echo $form->passwordField($model, 'password', array("onfocus" => "this.placeholder = ''", "onblur" => "this.placeholder = 'Password'", "class" => "form-control", "placeholder" => "Password")); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div><!-- input-group -->

        <div class="clearfix">
            <div class="pull-left">
                <div class="ckbox ckbox-primary mt10">
                    <?php echo $form->checkBox($model, 'rememberMe'); ?>
                    <?php echo $form->label($model, 'rememberMe'); ?>
                    <?php echo $form->error($model, 'rememberMe'); ?>
                </div>
            </div>
            <div class="pull-right">
                <?php //echo CHtml::submitButton('Sign In <i class="fa fa-angle-right ml5"></i>',array('class'=>'btn btn-success')); ?>
                <button type="submit" class="btn btn-success">Sign In <i class="fa fa-angle-right ml5"></i></button>
            </div>
        </div>                      
        <?php $this->endWidget(); ?>

    </div><!-- panel-body -->
    
</div><!-- panel -->


