<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'user-form',
            'enableAjaxValidation'=>true,
            'clientOptions'=>array(
                            'validateOnSubmit' => true,
                            'validateOnChange' => false,
                        ),
    )); ?>
            <?php echo $form->textField($model,'full_name',array('class'=>'autoclear name-newsletter','placeholder'=>$model->getAttributeLabel('full_name'))); ?>
            <?php echo $form->error($model,'full_name',array('class'=>'error-msg')); ?>
            <?php echo $form->textField($model,'email',array('class'=>'autoclear email-newsletter','placeholder'=>'Your Email')); ?>
            <?php echo $form->error($model,'email',array('class'=>'error-msg')); ?>
            <?php echo $form->passwordField($model,'password_sha256',array('class'=>'autoclear password-newsletter','placeholder'=>'Your Password')); ?>
            <?php echo $form->error($model,'password_sha256',array('class'=>'error-msg')); ?>
            <div>
                <div class="login-mainx">    
                    <?php echo CHtml::ajaxSubmitButton('Register ...', CHtml::normalizeUrl(array('user/register?rand='.rand())), 
                                            array(
                                                'dataType' => 'json',
                                                'type' => 'post',
                                                //'beforeSend'=>'function(){$("body").undelegate("#registerbtn","click");}',
                                                'success' => 'function(data) {
                                                    if(data.status=="success"){
                                                        //window.location.reload(true);
                                                        $("#user-form")[0].reset();
                                                        $("#formResult").html(data.message);
                                                        return false;
                                                    } else {
                                                        $.each(data, function(key, val) {
                                                        $("#user-form #"+key+"_em_").text(val);                                                    
                                                        $("#user-form #"+key+"_em_").show();
                                                        });
                                                    }       
                                                }',
                                            ), 
                                            array('id' => 'registerbtn', 'class' => 'button-newsletter regbtn'));
                    ?>
                    <div class="c"></div>
                </div>
                <div class="register-mainx">
                    <?php echo CHtml::button('Login',array('onclick'=>'changeForm("login")','class' => 'register-btn'));?>
                    <div class="c"></div>
                </div>
                
            </div>
            <label> * We will not forward your email address to any third party.</label>
            
    <?php $this->endWidget(); ?>
