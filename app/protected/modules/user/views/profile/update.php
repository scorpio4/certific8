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
            <div id="template-success"></div>
            <?php echo $this->renderPartial('template',compact('profile','type'));?>
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
                    if(type == 'skill') {
                          //markers=JSON.stringify(data.title_data);
                          //console.log(markers);
                         // var names = markers;
                        /*$('#UserSkill_skill_id').select2({
                            //data:  markers,
                            data:{ results: names, text: 'title' },
                            formatSelection: format,
                            formatResult: format   
                        });*/
                        //$('#UserSkill_skill_id').val(4);
                    }
                    $.each(data, function(key, val) {
                        $("#"+type+"-form #"+key).val(val);  
                    });
                    if(type == 'skill') {
                        $("#UserSkill_trainer_id").select2();

                        var options =  data.title_data;

                        $("#UserSkill_skill_id").select2({
                            minimumInputLength: 1,
                            triggerChange: true,
                            allowClear: true,
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
                                var id = element.val();
                                var data = options;
                                callback(data[0]);
                            },
                            formatResult: function (data) {
                                return "<div class='select2-user-result'>" + data.title + "</div>";
                            },
                            formatSelection: function (data) {
                                return data.title;
                            }
                        }).select2('val', [id]);
                    }
                    $("#edit"+type).collapse('show');
                }
            }
        });
    }
    function format(item) { return item.title; };
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
        //$('[id$="-success"]').html('');
        $('.hidden-values').val('');
        cancelbtn(id); 
    }
    
    function sortList(type,sort)
    {
     
     $( "#"+type+"-lists "+sort ).sortable({
        handle: ".drag-states",
        delay: 10,
         cursorAt: { bottom: 2 },
         distance: 5,
         helper: "clone" ,
         update: function( event, ui ) {
             var sortedlist = $(this).sortable('toArray').toString();
             $.ajax({
                      url: "<?php echo $this->createUrl('profile/changeOrder') ?>",
                      'type': "POST",
                      data: {'order': sortedlist,'type':type},
                      success: function(html) {

                      }

                  });
         }
    }).disableSelection();
  }
  
  function deleteProfilePage(id)
  {
        $.ajax({
            url:baseUrl+'/user/profile/delete',
            dataType: 'json',
            type: 'post',
            data:{'id':id,'ajax':'delete'},
            success: function(data) {
                if(data.status == 'success') {
                    window.location.href = "<?php echo $this->createUrl('/listprofile');?>";
                }
            }
        });
  }
  function setPreview(id)
  {
      templte = $('#Profile_template_id').val();
      if(templte) {
          window.open("<?php echo Yii::app()->createAbsoluteUrl('/vcard');?>/"+templte+"/profile/"+id);
      }
  }
  
</script>