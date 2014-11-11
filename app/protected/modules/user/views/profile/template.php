<?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'template-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
        ));
    
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
    $id = rand(100, 999).$profile->id.rand(100, 999);
    if($type == 'view') {
        $disable = true;
    } else {
        $disable = false;
    }
?>
    <div class="form-group">
        <?php 
            $template = ProfileTemplate::model()->findAll();
            $templateList = CHtml::listData($template, 'id', 'template_name');
        ?>
        <?php echo $form->dropDownList($profile, 'template_id', $templateList, array('class' => "form-control",'empty'=>'Choose a template','disabled'=>$disable)); ?>
        <?php echo $form->error($profile, 'template_id'); ?>
        <?php echo $form->hiddenField($profile, 'id');?>
    </div>
    <?php
        if($type <> 'view') {
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
        }
        if($type <> 'view') {
            echo CHtml::link('Preview','#',array('class'=>'btn btn-default','onclick'=>'setPreview('.$profile->id.')'));
        } else {
            echo CHtml::link('Preview','#',array('class'=>'btn btn-primary','onclick'=>'setPreview('.$profile->id.')'));
        }
    ?>


<?php $this->endWidget(); ?>