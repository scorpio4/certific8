<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Public Profile',
);
?>
<?php 
    echo CHtml::hiddenField('profile_id',$model->profile_id);
    $profileId = $model->profile_id;
?>
<div class="row">
    <div class="col-md-8">
        <div class="panel  profile-bg">
            <div class="tab-content profile-con">
                <div role="tabpanel" class="tab-pane active" id="user-edit-tab">
                  <div id="user-success" ></div>
                   <?php $this->renderPartial('_form', compact('model','profile')); ?> 
                </div>
                <div role="tabpanel panel-body" class="tab-pane" id="change-password-tab">
                    <div id="changepassword-success" ></div>
                    <?php echo $this->renderPartial('/user/change-password', compact('model')); ?>
                </div>
                <div class="tab-pane panel-body" id="profile-jobs-tab">
                   <?php echo $this->renderPartial('/profile/job-view', compact('profileJob','profileId','type'));?>
                </div>
                <div class="tab-pane panel-body" id="profile-cert8-tab">
                   <?php echo $this->renderPartial('/profile/certificate-view', compact('userSkill','profileId','type'));?>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-4">
        <div class="help-box">
            <?php echo $this->renderPartial('/profile/help'); ?>
        </div>
    </div>
    <div id="skill-infopanel">

    </div>
    <div id="trainer-infopanel">

    </div>
</div>

<script type="text/javascript">
    function setImage()
    {
        var fileData = $('#User_avatar')[0].files;
        if (fileData.length >= 1) {
            $(".uploded-img").attr({'src': URL.createObjectURL(fileData[0]), height: '171px', width: '174px'});
        } else {
            $(".uploded-img").attr({'src': $('#default_img').val()});
        }
    }
     $('#UserSkill_trainer_id').change(function () {
        var id = $(this).val();
        getBasicInfo('trainer',id);
    })
    $('#UserSkill_skill_id').change(function () {
        var id = $(this).val();
        getBasicInfo('skill',id);
    })
</script>

