<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'skill-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
        ));
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
    $sociallist = CHtml::listData(Skill::model()->findAll(), 'id', 'title');
    $socialProfile->profile_id = $profileId;
?>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <?php echo $form->labelEx($userSkill, 'skill_id'); ?>
                    <?php echo $form->dropDownList($userSkill, 'skill_id', $sociallist, array('class' => "form-control",'empty'=>'Select')); ?>
                    <?php echo $form->error($userSkill, 'skill_id'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($userSkill, 'username'); ?>
                    <?php echo $form->textField($userSkill, 'username', array('class' => "form-control")); ?>
                    <?php echo $form->error($userSkill, 'username'); ?>
                </div>
            </div>
            <?php echo $form->hiddenField($userSkill, 'profile_id');?>
            <?php echo $form->hiddenField($userSkill, 'id');?>
        </div>
    </div>
    <div class="panel-footer">
        <?php
        echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('profile/saveSkill?rand=' . rand())), array(
            'dataType' => 'json',
            'type' => 'post',
            'success' => 'function(data) {
                            $(".errorMessage").hide();
                            if(data.status=="success"){
                                successmsg("skill-success",data.message);
                                $("#skill-form")[0].reset();
                                $("#skill-form #UserSkill_id").val("");
                                $.fn.yiiListView.update("skill-lists");
                            } else {
                                $.each(data, function(key, val) {
                                $("#skill-form #"+key+"_em_").text(val);                                                    
                                $("#skill-form #"+key+"_em_").show();
                                });
                            }       
                        }',
                ), array('id' => 'skillbtn', 'class' => 'btn btn-primary mr5 skillbtn'));
        ?>
        <?php echo CHtml::link('Cancel', 'javascript:void(0)', array('class' => 'btn btn-default mr5','onclick' =>'setDefault("skill")')) ?>
    </div>
<?php $this->endWidget(); ?>

