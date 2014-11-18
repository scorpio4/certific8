<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'social-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
        ));
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
    $sociallist = CHtml::listData(Social::model()->getAllSocial(), 'id', 'title');
    $socialProfile->profile_id = $profileId;
?>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $form->labelEx($socialProfile, 'social_id'); ?>
                    <?php echo $form->dropDownList($socialProfile, 'social_id', $sociallist, array('class' => "form-control",'empty'=>'Select')); ?>
                    <?php echo $form->error($socialProfile, 'social_id'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($socialProfile, 'username'); ?>
                    <?php echo $form->textField($socialProfile, 'username', array('class' => "form-control")); ?>
                    <?php echo $form->error($socialProfile, 'username'); ?>
                </div>
            </div>
            <?php echo $form->hiddenField($socialProfile, 'profile_id');?>
            <?php echo $form->hiddenField($socialProfile, 'id',array('class'=>'hidden-values'));?>
        </div>
        <?php
        echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('profile/saveSocial?rand=' . rand())), array(
            'dataType' => 'json',
            'type' => 'post',
            'success' => 'function(data) {
                            $(".errorMessage").hide();
                            if(data.status=="success"){
                                successmsg("social-success",data.message);
                                $("#social-form")[0].reset();
                                $("#social-form #SocialProfile_id").val("");
                                $.fn.yiiListView.update("social-lists");
                            } else {
                                $.each(data, function(key, val) {
                                $("#social-form #"+key+"_em_").text(val);                                                    
                                $("#social-form #"+key+"_em_").show();
                                });
                            }       
                        }',
                ), array('id' => 'socialbtn', 'class' => 'btn btn-primary mr5 socbtn'));
        ?>
        <?php echo CHtml::link('Cancel', 'javascript:void(0)', array('class' => 'btn btn-white mr5','onclick' =>'setDefault("social")')) ?>
    </div>
<?php $this->endWidget(); ?>

