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
                ), array('id' => 'loginbtn', 'class' => 'btn-blue mr10 logbtn'));
        ?>
        <?php echo CHtml::link('Forgot your password?','javascript:forgotModal()', array('class' => 'fo-pass'));?>
    </div>
    <div class="text05 mb5">Or you can login with one of the following.</div>
    <div class="form-group-main social-img">
        <?php
            $img = CHtml::image(Yii::app()->theme->baseUrl . '/images/lin.jpg', 'Linkedin', array('class' => 'm-r-5'));
            echo CHtml::link($img, 'javascript:void(0)',array('onclick'=>'socialLogin("LinkedIn","ln")'));
            $img = CHtml::image(Yii::app()->theme->baseUrl . '/images/fb.jpg', 'Facebook');
            echo CHtml::link($img, 'javascript:void(0)',array('onclick'=>'socialLogin("Facebook","fb")'));
        ?>
    </div>
<?php $this->endWidget(); ?>
