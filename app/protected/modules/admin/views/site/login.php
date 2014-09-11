<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
?>
<div class="login-form">
    <div class="logo-login">
        <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/logo.png">
    </div>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>
        <div class="login-form-group">
            <?php echo $form->textField($model, 'username',array("onfocus"=>"this.placeholder = ''","onblur"=>"this.placeholder = 'Username'","class"=>"login-form-control","placeholder"=>"Username")); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>
        <div class="login-form-group">
            <?php echo $form->passwordField($model, 'password',array("onfocus"=>"this.placeholder = ''","onblur"=>"this.placeholder = 'Password'","class"=>"login-form-control","placeholder"=>"Password")); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>
        <div class="login-form-group">
            <?php echo CHtml::submitButton('Login',array('class'=>'login-btn')); ?>
        </div>
        <div class="login-form-group">
            <div class="pull-left checkbox m-n" >
                <?php echo $form->checkBox($model, 'rememberMe'); ?>
                <?php echo $form->label($model, 'rememberMe'); ?>
                <?php echo $form->error($model, 'rememberMe'); ?>
            </div>
            <div class="pull-right text01" data-toggle="modal" data-target="#forgotPssword">Forgot password</div>
            <div class="c"></div>
        </div>
    <?php $this->endWidget(); ?>
</div>

