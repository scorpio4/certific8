<?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'vCard-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
        ));
    
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
?>
    <div class="form-group">
        <?php 
            $template = ProfileTemplate::model()->findAll();
            $templateList = CHtml::listData($template, 'id', 'template_name');
        ?>
        <?php echo $form->dropDownList($profile, 'template_id', $templateList, array('class' => "form-control",'empty'=>'Select')); ?>
        <?php echo $form->error($profile, 'template_id'); ?>
        <?php echo $form->hiddenField($profile, 'id');?>
    </div>
    <?php
        echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('profile/saveTemplate?rand=' . rand())), array(
            'dataType' => 'json',
            'type' => 'post',
            'success' => 'function(data) {
                            $(".errorMessage").hide();
                            $("#vCard-success").html("");
                            if(data.status=="success"){
                                successmsg("vCard-success",data.message);
                            } else {
                                $.each(data, function(key, val) {
                                $("#vCard-form #"+key+"_em_").text(val);                                                    
                                $("#vCard-form #"+key+"_em_").show();
                                });
                            }       
                        }',
                ), array('id' => 'templatebtn', 'class' => 'btn btn-primary mr5 contbtn'));
    ?>
    <a class="btn btn-primary" href="#">Preview</a>

<?php $this->endWidget(); ?>