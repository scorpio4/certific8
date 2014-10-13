<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => false,
    ),
        ));
?>
    <div class="form-group-main">
        <?php echo $form->textField($model, 'username', array('class' => 'form-con', 'placeholder' => 'Your Email')); ?>
        <?php echo $form->error($model, 'username', array('class' => 'error-msg')); ?>
    </div>
    <div class="form-group-main">
        <?php echo $form->passwordField($model, 'password', array('class' => 'form-con', 'placeholder' => 'Your Password')); ?>
        <?php echo $form->error($model, 'password', array('class' => 'error-msg')); ?>
    </div>
    <div class="form-group-main">
        <?php
        echo CHtml::ajaxSubmitButton('Login', CHtml::normalizeUrl(array('user/login?rand=' . rand())), array(
            'dataType' => 'json',
            'type' => 'post',
            'success' => 'function(data) {
                            $(".error-msg").hide();
                            if(data.status=="success"){
                                window.location.reload(true);
                            } else {
                                $.each(data, function(key, val) {
                                $("#login-form #"+key+"_em_").text(val);                                                    
                                $("#login-form #"+key+"_em_").show();
                                });
                            }       
                        }',
                ), array('id' => 'loginbtn', 'class' => 'btn-green m-r-5 logbtn'));
        ?>
        <?php echo CHtml::button('Register', array('onclick' => 'changeForm("register")', 'class' => 'btn-blue')); ?>
    </div>
    <div class="form-group-main">
        <?php
            $img = CHtml::image(Yii::app()->theme->baseUrl . '/images/linked-in.png', 'Linkedin', array('class' => 'm-r-5'));
            echo CHtml::link($img, array('user/sociallogin/provider/LinkedIn'));
            $img = CHtml::image(Yii::app()->theme->baseUrl . '/images/facebook.png', 'Facebook');
            echo CHtml::link($img, array('user/sociallogin/provider/Facebook'));
        ?>
    </div>
<?php $this->endWidget(); ?>
