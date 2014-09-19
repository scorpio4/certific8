<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableAjaxValidation'=>true,
            'clientOptions'=>array(
                            'validateOnSubmit' => true,
                            'validateOnChange' => false,
                        ),
    )); ?>
            <?php echo $form->textField($model,'username',array('class'=>'autoclear email-newsletter','placeholder'=>'Your Email')); ?>
            <?php echo $form->error($model,'username',array('class'=>'error-msg')); ?>
            <?php echo $form->passwordField($model,'password',array('class'=>'autoclear password-newsletter','placeholder'=>'Your Password')); ?>
            <?php echo $form->error($model,'password',array('class'=>'error-msg')); ?>
            <div>
                <div class="fb-login">
                    <?php 
                        $img = CHtml::image(Yii::app()->theme->baseUrl.'/img/fb.png');
                        echo CHtml::link($img,array('user/sociallogin/provider/Facebook'));
                    ?>
                </div>
                <div class="ln-login">
                    <?php 
                        $img = CHtml::image(Yii::app()->theme->baseUrl.'/img/linkd.png');
                        echo CHtml::link($img,array('user/sociallogin/provider/LinkedIn'));
                    ?>
                </div>
                <div class="register-main">
                    <?php echo CHtml::button('Register',array('onclick'=>'changeForm("register")','class' => 'register-btn'));?>
                </div>
                <div class="login-main">
                    <?php echo CHtml::ajaxSubmitButton('Login ...', CHtml::normalizeUrl(array('user/login?rand='.rand())), 
                                            array(
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
                                            ), 
                                            array('id' => 'loginbtn', 'class' => 'button-newsletter logbtn'));
                    ?>
                </div>
                <div class="c"></div>
            </div>
            <label> * We will not forward your email address to any third party.</label>
            
    <?php $this->endWidget(); ?>
