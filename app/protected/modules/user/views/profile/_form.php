<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'profile-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
        ));
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
?>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <?php echo $form->labelEx($profile, 'full_name'); ?>
                    <?php echo $form->textField($profile, 'full_name', array('class' => "form-control")); ?>
                    <?php echo $form->error($profile, 'full_name'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($profile, 'short_title'); ?>
                    <?php echo $form->textField($profile, 'short_title', array('class' => "form-control")); ?>
                    <?php echo $form->error($profile, 'short_title'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($profile, 'short_bio'); ?>
                    <?php echo $form->textArea($profile, 'short_bio', array('class' => "form-control")); ?>
                    <?php echo $form->error($profile, 'short_bio'); ?>
                </div>

            </div>
        </div>
    </div>
    <div class="panel-footer">
        <?php
        echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('profile/saveProfile?rand=' . rand())), array(
            'dataType' => 'json',
            'type' => 'post',
            'success' => 'function(data) {
                            $(".errorMessage").hide();
                            if(data.status=="success"){
                                successmsg("newprofile-success",data.message);
                                setTimeout(function(){window.location.href = "'.Yii::app()->createUrl('/profile').'/"+data.profid}, 3000);
                            } else {
                                $.each(data, function(key, val) {
                                $("#profile-form #"+key+"_em_").text(val);                                                    
                                $("#profile-form #"+key+"_em_").show();
                                });
                            }       
                        }',
                ), array('id' => 'contactbtn', 'class' => 'btn btn-primary mr5 contbtn'));
        ?>
        <?php echo CHtml::link('Cancel', array('/listprofile'), array('class' => 'btn btn-default mr5')) ?>
    </div>
<?php $this->endWidget(); ?>

