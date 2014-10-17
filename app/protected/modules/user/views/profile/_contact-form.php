<?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'contact-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
        ));
    
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
?>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <?php echo $form->labelEx($user, 'email'); ?>
                <?php echo $form->textField($user, 'email', array('class' => "form-control")); ?>
                <?php echo $form->error($user, 'email'); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($user, 'mobile'); ?>
                <?php echo $form->textField($user, 'mobile', array('class' => "form-control")); ?>
                <?php echo $form->error($user, 'mobile'); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($user, 'webpage'); ?>
                <?php echo $form->textField($user, 'webpage', array('class' => "form-control")); ?>
                <?php echo $form->error($user, 'webpage'); ?>
            </div>
            <?php echo $form->hiddenField($user,'id');?>
            <?php
                echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('profile/saveContact?rand=' . rand())), array(
                    'dataType' => 'json',
                    'type' => 'post',
                    'success' => 'function(data) {
                                    $(".errorMessage").hide();
                                    $("#contact-success").html("");
                                    if(data.status=="success"){
                                        $("#email-detail").html($("#contact-form #User_email").val());
                                        $("#cell-detail").html($("#contact-form #User_mobile").val());
                                        $("#website-detail").html($("#contact-form #User_webpage").val());
                                        successmsg("contact-success",data.message);
                                    } else {
                                        $.each(data, function(key, val) {
                                        $("#contact-form #"+key+"_em_").text(val);                                                    
                                        $("#contact-form #"+key+"_em_").show();
                                        });
                                    }       
                                }',
                        ), array('id' => 'contactbtn', 'class' => 'btn btn-primary mr5 contbtn'));
            ?>
            <input type="button" value="Cancel" class="btn btn-default mr5" id="cancel-contact" onclick="cancelbtn('contact')" />
        </div>
    </div>
<?php $this->endWidget(); ?>
