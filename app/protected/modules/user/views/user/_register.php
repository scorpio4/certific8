<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => false,
    ),
        ));
?>  
    <div class="form-group-main">
        <?php echo $form->textField($model, 'full_name', array('class' => 'form-con', 'placeholder' => $model->getAttributeLabel('full_name'))); ?>
        <?php echo $form->error($model, 'full_name', array('class' => 'error-msg')); ?>
    </div>
    <div class="form-group-main">
        <?php echo $form->textField($model, 'email', array('class' => 'form-con', 'placeholder' => 'Your Email')); ?>
        <?php echo $form->error($model, 'email', array('class' => 'error-msg')); ?>
    </div>
    <div class="form-group-main">
        <?php echo $form->passwordField($model, 'password_sha256', array('class' => 'form-con', 'placeholder' => 'Your Password')); ?>
        <?php echo $form->error($model, 'password_sha256', array('class' => 'error-msg')); ?>
    </div>    
    <div>
        <div class="form-group-main">    
            <?php
            echo CHtml::ajaxSubmitButton('Register', CHtml::normalizeUrl(array('user/register?rand=' . rand())), array(
                'dataType' => 'json',
                'type' => 'post',
                'success' => 'function(data) {
                                $(".error-msg").hide();
                                if(data.status=="success"){
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
                    ), array('id' => 'registerbtn', 'class' => 'btn-green m-r-5'));
            ?>
        <?php echo CHtml::button('Login', array('onclick' => 'changeForm("login")', 'class' => 'btn-blue')); ?>
        </div>
        <div class="form-group-main">
        <?php
            $img = CHtml::image(Yii::app()->theme->baseUrl . '/images/linked-in.png', 'Linkedin', array('class' => 'm-r-5'));
            echo CHtml::link($img, array('user/sociallogin/provider/LinkedIn'));
            $img = CHtml::image(Yii::app()->theme->baseUrl . '/images/facebook.png', 'Facebook');
            echo CHtml::link($img, array('user/sociallogin/provider/Facebook'));
        ?>
    </div>
    </div>
    <div class="text06">* We will not forward your email address to any third party.</div>
<?php $this->endWidget(); ?>
