<?php
/* @var $this ProfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Profiles',
);
$currentPage = Yii::app()->controller->id.'-'.Yii::app()->controller->action->id;
if(isset($_GET['id'])) {
    $this->menu = array(
        array('label' => '<i class="fa fa-plus"></i>', 'url' => array('/profile'), 'linkOptions' => array('class' => 'btn btn-default', 'title' => 'Add Profile')),
        array('label' => '<i class="fa fa-pencil"></i>', 'url' => array('/profile/'.$_GET['id']),'visible'=>$currentPage!='profile-update'?true:false, 'linkOptions' => array('class' => 'btn btn-success', 'title' => 'Edit Profile')),
        array('label' => '<i class="fa fa-search"></i>', 'url' => array('/profileview/'.$_GET['id']),'visible'=>$currentPage!='profile-view'?true:false, 'linkOptions' => array('class' => 'btn btn-primary', 'title' => 'View Profile')),
        array('label' => '<i class="fa fa-files-o"></i>', 'url' => array('/profilecopy/'.$_GET['id']),'visible'=>$currentPage!='profile-profileCopy'?true:false, 'linkOptions' => array('class' => 'btn btn-warning', 'title' => 'Copy Profile')),
        array('label' => '<i class="fa fa-trash-o"></i>', 'url' => 'javascript:void(0)', 'linkOptions' => array('class' => 'btn btn-danger', 'title' => 'Delete Profile','onclick'=>'deleteProfilePage('.$_GET['id'].')')),
    );
    echo '';
}
echo CHtml::hiddenField('profile_id',$profile->id);
$profileId = $profile->id;
?>
<div class="row" id="my-profile">
    <div class="col-md-8">
        <div class="profile-bg">
            <div class="profile-head">
                <div class="row">
                    <?php echo $this->renderPartial('basic-view',compact('profile','user','type'));?>
                </div>
            </div>
            <div class="profile-tab">
                <ul class="nav nav-tabs nav-profile">
                    <li class="active"><a href="#Myjobs" data-toggle="tab">My Jobs</a></li>   
                    <li><a href="#Mycerts" data-toggle="tab">My Certs</a></li>      
                    <li><a href="#Social" data-toggle="tab">Social</a></li>      
                    <li><a href="#contact" data-toggle="tab">Contact</a></li> 
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="profile-content tab-content">
                <div class="tab-pane active" id="Myjobs">
                   <?php echo $this->renderPartial('job-view', compact('profileJob','profileId','type'));?>
                </div>
                <div class="tab-pane" id="Mycerts">
                   <?php echo $this->renderPartial('certificate-view', compact('userSkill','profileId','type'));?>
                </div>
                <div class="tab-pane" id="Social">
                   <?php echo $this->renderPartial('social-view', array('userId'=>$user->id,'profileId'=>$profileId,'socialProfile'=>$socialProfile,'type'=>$type));?>
                </div>
                <div class="tab-pane" id="contact">
                   <?php echo $this->renderPartial('contact-view', compact('user','type'));?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="business-card">
            <?php echo CHtml::link('Choose a template','javascript:void(0)',array('class'=>'btn btn-primary','onclick'=>'getTemplate()')); ?>
        </div>
        <div class="infopanel">
            <div class="help-box ">
                <?php echo $this->renderPartial('help', array()); ?>
            </div>
        </div>
        <div id="skill-infopanel">
            
        </div>
        <div id="trainer-infopanel">
            
        </div>
    </div>
</div>
<?php if(!isset($_GET['id'])) {?>
    <div class="modal fade" id="profile-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Settings</h4>
                </div>
                <div class="modal-body">
                    <div class="panel panel-default">
                        <div id="newprofile-success"></div>
                        <?php echo $this->renderPartial('_form',compact('profile'));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php } else {?>
    <div class="modal fade" id="edit-shortbio-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Shortbio</h4>
                </div>
                <div class="modal-body">
                    <div class="panel panel-default">
                        <div id="shortbio-success"></div>
                        <?php echo $this->renderPartial('_edit-shortbio-form',compact('profile','profileId'));?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="modal fade" id="edit-template-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Choose a Profile Template</h4>
                </div>
                <div class="modal-body">
                    <div class="panel panel-default">
                         <div id="template-success"></div>
                            <?php echo $this->renderPartial('template',compact('profile','type'));?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<?php }?>

<script type="text/javascript">
    
    $(function() {
        <?php if(!isset($_GET['id'])) {?>
            var myData = $("#my-profile").disabler();
            myData.disabler("disable");
            $('.editble').editable({disabled:true});
            $('#profile-modal').modal('show');
        <?php }?>
    }); 
   
    function editShortBio()
    {
        var biodata = $('#biodata-detail').html();
        $('#Profile_short_bio').val(biodata);
        $('#Profile_short_bio').redactor('code.set', biodata);
        $('#edit-shortbio-modal').modal('show');
    }
    function getTemplate()
    {
        $('#edit-template-modal').modal('show');
    }
    
    function previewTemplate() 
    {
        
    }
    
    function saveTemplate(profileId,templateId) 
    {
        $.ajax({
            dataType : 'json',
            type : 'post',
            data : {'profileId':profileId,'templateId':templateId},
            url: baseUrl + '/user/profile/saveTemplate',
            success : function(data) {
                        $(".errorMessage").hide();
                        if(data.status=="success"){
                            successmsg("template-success",data.message);
                        }     
                    }
        });            
    }
</script>