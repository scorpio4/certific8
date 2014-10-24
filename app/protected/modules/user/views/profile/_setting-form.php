<?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'setting-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
            ));
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
?>
<div class="panel panel-default">
    <div class="panel-body">
            <div>
                <div>
                    <label>Active</label>
                </div>
                <div class="btn-group activate-elemnt" data-toggle="buttons">
                    <?php echo $form->radioButtonList($profile,'is_active',array('1'=>'Yes','0'=>'No'),array('separator'=>'','template'=>'<label class="btn btn-default-2">{input}{label}</label>')); ?>
                </div>
            </div>
            <div>
                <div>
                    <label>Public</label>
                </div>
                <div class="btn-group public-elemnt" data-toggle="buttons">
                    <?php echo $form->radioButtonList($profile,'is_public',array('1'=>'Yes','0'=>'No'),array('separator'=>'','template'=>'<label class="btn btn-default-2">{input}{label}</label>')); ?>
                </div>
            </div>
            <div>
                <div>
                    <label>Contact</label>
                </div>
                <div class="btn-group contact-elemnt" data-toggle="buttons">
                    <?php echo $form->radioButtonList($profile,'can_contact',array('1'=>'Yes','0'=>'No'),array('separator'=>'','template'=>'<label class="btn btn-default-2">{input}{label}</label>')); ?>
                </div>
            </div>
            <div>
                <div>
                    <label>Show Vouches </label>
                </div>
                <div class="btn-group vouches-elemnt" data-toggle="buttons">
                    <?php echo $form->radioButtonList($profile,'show_vouches',array('1'=>'Yes','0'=>'No'),array('separator'=>'','template'=>'<label class="btn btn-default-2">{input}{label}</label>')); ?>
                </div>
            </div>
    </div>
    <div class="panel-footer">
        <button class="btn btn-primary mr5" type="button" onclick="saveSetting(<?php echo $profile->id;?>)">Save</button>
        <button class="btn btn-default" data-dismiss="modal" >Cancel</button>
    </div>
</div>
<?php $this->endWidget(); ?>
<script>
var children = $('.activate-elemnt span').contents();
$('.activate-elemnt').html(children);
var children = $('.public-elemnt span').contents();
$('.public-elemnt').html(children);
var children = $('.contact-elemnt span').contents();
$('.contact-elemnt').html(children);
var children = $('.vouches-elemnt span').contents();
$('.vouches-elemnt').html(children);
//$('input[name="profile_active"]:checked').parent('label').addClass('active');
$('input:checked').parent('label').addClass('active');
</script>