<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'jobs-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
        ));
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
    $orglist = CJSON::encode(Org::model()->getAllOrg());
    $profileJob->profile_id = $profileId;
    if($profileJob->org_id<=0) {
        $profileJob->org_id = '';
    }
?>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $form->labelEx($profileJob, 'org_id'); ?>
                    <?php echo $form->textField($profileJob, 'org_id', array('class' => "form-control typeahead")); ?>
                    <?php echo $form->error($profileJob, 'org_id'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($profileJob, 'job_title'); ?>
                    <?php echo $form->textField($profileJob, 'job_title', array('class' => "form-control")); ?>
                    <?php echo $form->error($profileJob, 'job_title'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($profileJob, 'comment'); ?>
                    <?php echo $form->textArea($profileJob, 'comment', array('class' => "form-control",'rows'=>"5")); ?>
                    <?php echo $form->error($profileJob, 'comment'); ?>
                </div>
                <div class="row">
                    <div class="pl15"><label>Time Period <span class="red-color">*</span></label></div>
                    <div class="col-md-5 form-group alpha-r">
                        <?php echo $form->textField($profileJob, 'start_date', array('class' => "form-control")); ?>
                        <?php echo $form->error($profileJob, 'start_date'); ?>
                    </div>
                    <div class="col-md-1 form-group text-center">
                    _
                    </div>
                    <div class="col-md-5 form-group  alpha-r alpha-l">
                        <div id="isCurrent" class="mt10" style="display: none"></div>
                       <?php echo $form->textField($profileJob, 'end_date', array('class' => "form-control")); ?>
                        <?php echo $form->error($profileJob, 'end_date'); ?>
                        <div>
                            <?php echo $form->checkBox($profileJob, 'isCurrent'); ?> I currently work here
                        </div>
                    </div>
                </div>
                <?php echo $form->hiddenField($profileJob, 'profile_id');?>
                <?php echo $form->hiddenField($profileJob, 'id',array('class'=>'hidden-values'));?>
            </div>
        </div>
        <?php
        echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('profile/saveJob?rand=' . rand())), array(
            'dataType' => 'json',
            'type' => 'post',
            'success' => 'function(data) {
                            $(".errorMessage").hide();
                            if(data.status=="success"){
                                successmsg("jobs-success",data.message);
                                $("#jobs-form")[0].reset();
                                $("#jobs-form #ProfileJob_id").val("");
                                $.fn.yiiListView.update("jobs-lists");
                            } else {
                                $.each(data, function(key, val) {
                                $("#jobs-form #"+key+"_em_").text(val);                                                    
                                $("#jobs-form #"+key+"_em_").show();
                                });
                            }       
                        }',
                ), array('id' => 'jobsbtn', 'class' => 'btn btn-primary mr5 jobsbtn'));
        ?>
        <?php echo CHtml::link('Cancel', 'javascript:void(0)', array('class' => 'btn btn-white mr5','onclick'=>'setDefault("jobs")')) ?>
    </div>
<?php $this->endWidget(); ?>

<script type="text/javascript">
$(document).ready(function(){
    companies = [];
    imgs = [];
    ids = [];
    $('#ProfileJob_org_id').typeahead({
    property: 'name',
    items:20,
    menu: '<ul class="typeahead dropdown-menu tt-dropdown-menu "></ul>',
    options:{'style':'display: block;top: 50px; left: 5px; display: none;'},
    displayKey: 'id',
    myData: <?php echo $orglist;?>,
    source: function (query, process) {
        var data = this.options.myData; 
        $.each(data, function (i, company) {
            companies.push(company.legal_name);
            imgs[company.legal_name] = company.logo;
            ids[company.legal_name] = company.id;
            imgs.push();
            ids.push();
        });

        process(companies);
    },
    highlighter: function(item,t){
        image = imgs[item];
        return "<li class='' data-value='"+item+"'>"+
                    "<a href='#'>"+
                       "<img src ='<?php echo Yii::app()->homeUrl;?>uploads/logo/"+ids[item]+"/"+image+"'>"+item+
                    "</a>"+
                "</li>";
    },
    updater:function (item) {
        return item;
    },
    });

    var stdate = $("#ProfileJob_start_date").datepicker( {
        format: "mm/yyyy",
        viewMode: "months", 
        minViewMode: "months"
    }).on('changeDate', function(ev) {
            stdate.hide();
        }).data('datepicker');;
    var endate = $("#ProfileJob_end_date").datepicker( {
        format: "mm/yyyy",
        viewMode: "months", 
        minViewMode: "months",
        clearBtn: true,
    }).on('changeDate', function(ev) {
            endate.hide();
        }).data('datepicker');;
})
$('#ProfileJob_isCurrent').click(function (){
    toggleEndDate();
});
function toggleEndDate(){
    if($('#ProfileJob_isCurrent').is(':checked')) {
        $('#ProfileJob_end_date').hide();
        $('#isCurrent').html('Present');
        $('#isCurrent').show();
        $(".errorMessage").hide();
    } else {
        $('#ProfileJob_end_date').show();
        $('#isCurrent').hide();
    }
}
</script>