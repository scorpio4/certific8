<?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'template-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
        ));
    
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
    $id = rand(100, 999).$profile->id.rand(100, 999);
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
                            $("#template-success").html("");
                            if(data.status=="success"){
                                successmsg("template-success",data.message);
                            } else {
                                $.each(data, function(key, val) {
                                $("#template-form #"+key+"_em_").text(val);                                                    
                                $("#template-form #"+key+"_em_").show();
                                });
                            }       
                        }',
                ), array('id' => 'templatebtn', 'class' => 'btn btn-primary mr5 contbtn'));
    ?>
<a class="btn btn-default" href="#" onclick="setPreview('<?php echo $id;?>')">Preview</a>

<?php $this->endWidget(); ?>