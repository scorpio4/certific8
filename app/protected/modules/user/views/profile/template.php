<?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'template-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
        ));
    
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
    if($type == 'view') {
        $disable = true;
    } else {
        $disable = false;
    }
?>
<?php 
    $template1 = ProfileTemplate::model()->findAll(array('select'=>'id,template_name','condition'=>'template_type="simple_vCard"'));
    $template2 = ProfileTemplate::model()->findAll(array('select'=>'id,template_name','condition'=>'template_type="iDvCard"'));
    $template3 = ProfileTemplate::model()->findAll(array('select'=>'id,template_name','condition'=>'template_type="flexyvCard"'));
?>
    <div id="template_tabs">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#template_3">Flexy vCard</a></li>
            <li class=""><a data-toggle="tab" href="#template_2">iD vCard</a></li>
            <li class=""><a data-toggle="tab" href="#template_1">Simple vCard</a></li>
        </ul>
        <div class="tab-content" >
            <div id="template_1" class="tab-pane" >
                <div class="vcard-colors">
                    <ul>
                        <?php echo $this->renderPartial('/profile/_template_list', array('profileId'=>$profile->id,'templates'=>$template1,'type'=>$type)); ?>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div id="template_2" class="tab-pane" >
                <div class="vcard-colors">
                    <ul>
                        <?php echo $this->renderPartial('/profile/_template_list', array('profileId'=>$profile->id,'templates'=>$template2,'type'=>$type)); ?>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div id="template_3" class="tab-pane active" style="padding: 0; margin: 0;">
                <div class="vcard-colors">
                    <ul>
                        <?php echo $this->renderPartial('/profile/_template_list', array('profileId'=>$profile->id,'templates'=>$template3,'type'=>$type)); ?>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
<?php $this->endWidget(); ?>
