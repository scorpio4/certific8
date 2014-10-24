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
    $trainers = Trainer::model()->findAll();
    $trainerList= CHtml::listData($trainers, 
                                  'id', 
                                  function($trainer) {
                                    if(isset($trainer->org)) {
                                        return $trainer->org->legal_name;
                                    }
                                    
                                }
    );
    if($userSkill->award_rank <=0 ) {
        $userSkill->award_rank = '';
    }
  
?>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <?php echo $form->labelEx($userSkill, 'skill_id'); ?>
                    <?php //echo $form->dropDownList($userSkill, 'skill_id', $skills, array('class' => "fullwidth",'empty'=>'Select')); ?>
                    <?php echo $form->hiddenField($userSkill, 'skill_id', array('class' => "fullwidth")); ?>
                    <?php echo $form->error($userSkill, 'skill_id'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($userSkill, 'trainer_id'); ?>
                    <?php echo $form->dropDownList($userSkill, 'trainer_id', $trainerList,array('class' => "fullwidth",'empty'=>'Select')); ?>
                    <?php echo $form->error($userSkill, 'trainer_id'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($userSkill, 'award_number'); ?>
                    <?php echo $form->textField($userSkill, 'award_number', array('class' => "form-control")); ?>
                    <?php echo $form->error($userSkill, 'award_number'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($userSkill, 'award_rank'); ?>
                    <?php echo $form->textField($userSkill, 'award_rank', array('class' => "form-control")); ?>
                    <?php echo $form->error($userSkill, 'award_rank'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($userSkill, 'award_date'); ?>
                    <?php echo $form->textField($userSkill, 'award_date', array('class' => "form-control")); ?>
                    <?php echo $form->error($userSkill, 'award_date'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($userSkill, 'expiry_date'); ?>
                    <?php echo $form->textField($userSkill, 'expiry_date', array('class' => "form-control")); ?>
                    <?php echo $form->error($userSkill, 'expiry_date'); ?>
                </div>
            </div>
            <?php echo CHtml::hiddenField('profile_id', $profileId);?>
            <?php echo $form->hiddenField($userSkill, 'id',array('class'=>'hidden-values'));?>
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
<script type="text/javascript">
$(document).ready(function(){
    
    var stdate = $("#UserSkill_award_date").datepicker( {
        format: "dd/mm",
        viewMode: "dates", 
        maxViewMode: "months"
    }).on('changeDate', function(ev) {
            stdate.hide();
        }).data('datepicker');;
    var endate = $("#UserSkill_expiry_date").datepicker( {
        format: "dd/mm",
        viewMode: "dates", 
        maxViewMode: "months"
    }).on('changeDate', function(ev) {
            endate.hide();
        }).data('datepicker');
        
    $("#UserSkill_trainer_id").select2({
        placeholder:"Select",
     });  
    $("#UserSkill_skill_id").select2({
        minimumInputLength: 1,
        id: function (data) {
            return data.id;
        },
        ajax: {
            url: baseUrl+'/user/profile/searchSkill',
            quietMillis: 1500,
            dataType: 'json',
            cache: true,
            data: function (term, page) {
                return {
                    title: term, 
                };
            },
            results: function (data, page) {
                return {
                    results: data.results 
                };
            }
        },
        initSelection: function (element, callback) {
            //callback();
        },
        formatResult: function (data) {
            return "<div class='select2-user-result'>" + data.title + "</div>";
        },
        formatSelection: function (data) {
            return data.title;
        }
    });
    
});

</script>
