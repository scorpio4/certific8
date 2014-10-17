<?php
/* @var $this ProfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Profiles',
);

$this->menu = array(
    array('label' => '<i class="fa fa-plus"></i>', 'url' => array('/profile'), 'linkOptions' => array('class' => 'btn btn-primary', 'title' => 'Add')),
);
echo CHtml::hiddenField('profile_id',$profile->id);
$profileId = $profile->id;
?>

<div class="row" id="my-profile">
    <div class="col-md-8">
        <div class="profile-bg">
            <div class="profile-head">
                <div class="row">
                    <?php echo $this->renderPartial('basic-view',compact('profile','user'));?>
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
                   <?php echo $this->renderPartial('job-view', compact('profileJob','profileId'));?>
                </div>
                <div class="tab-pane" id="Mycerts">
                   <?php //echo $this->renderPartial('certificate-view', compact('userSkill','profileId'));?>
                </div>
                <div class="tab-pane" id="Social">
                   <?php echo $this->renderPartial('social-view', array('userId'=>$user->id,'profileId'=>$profileId,'socialProfile'=>$socialProfile));?>
                </div>
                <div class="tab-pane" id="contact">
                   <?php echo $this->renderPartial('contact-view', compact('user'));?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="business-card">
            <?php echo $this->renderPartial('vCard',array());?>
        </div>
        <div class="help-box">
            <?php echo $this->renderPartial('help',array());?>
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
    
    function successmsg(id,message) 
    {
        $('#'+id).html('<div class="alert alert-success alert-dismissable mt20">'+
                            '<button type=button class=close data-dismiss=alert aria-hidden=true>&times;</button>'+
                            '<div>'+message+'</div>'+
                       '</div>');
    }
    
    function cancelbtn(id) 
    {
       $(".errorMessage").hide();
       $("#"+id+"-success").html(""); 
       $("#edit"+id).collapse('toggle');
       return false;
    }
    
    function editData(type,id)
    {
        $.ajax({
            url:baseUrl+'/user/profile/editData',
            dataType: 'json',
            type: 'post',
            data:{'id':id,'type':type},
            success: function(data) {
                if(data) {
                    $.each(data, function(key, val) {
                        $("#"+type+"-form #"+key).val(val);                                                    
                    });
                    $("#edit"+type).collapse('show');
                }
            }
        });
    }
    
    function deleteData(type,id,islist)
    {
        $.ajax({
            url:baseUrl+'/user/profile/deleteData',
            type: 'post',
            data:{'id':id,'type':type},
            success: function(message) {
                if(message) {
                    successmsg(type+"-msgs",message);
                    if(islist == 1) {
                        $.fn.yiiListView.update(type+"-lists");
                    }
                }
            }
        });
    }
     
    function setDefault(id)
    {
        $("#"+id+"-form")[0].reset();
        cancelbtn(id); 
    }
</script>