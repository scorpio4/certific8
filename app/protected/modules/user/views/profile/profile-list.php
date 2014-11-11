<?php
/* @var $this ProfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Profiles',
);

$this->menu = array(
    array('label' => '<i class="fa fa-plus"></i>', 'url' => array('/profile'), 'linkOptions' => array('class' => 'btn btn-primary', 'title' => 'Add Profile')),
);
?>
<?php if(Yii::app()->user->hasFlash('success')):?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo Yii::app()->user->getFlash('success'); ?>
</div>
<?php endif; ?>
<div id="profile-success"></div>
<?php
    $this->widget('zii.widgets.CListView', array(
        'id'=>'profile-lists',
        'dataProvider'=>$profile->search($id),
        'itemView'=>'_profile-list',
        'itemsTagName'=>'ul',
        'summaryText'=>'',
        'emptyText'=>'You have no profiles. '.CHtml::link('Add a profile now.',array('/profile')),
        'enablePagination'=>false,
        'itemsCssClass'=>'grid cs-style-7'
    ));
?>
<div class="modal fade" id="profile-setting-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="setting-modal-head">Settings</h4>
            </div>
            <div id="setting-success"></div>
            <div class="modal-body">
                <div class="panel panel-default" id="setting-content">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="profile-share-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="share-modal-head">Share your profile with colleague</h4>
            </div>
            <div id="share-success"></div>
            <div class="modal-body" id="share-content">
                <div class="panel panel-default">
                    <?php echo $this->renderPartial('_share-form',compact('contact'));?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function editSetting(id)
{
    $.ajax({
        url:baseUrl+'/user/profile/editSetting',
        dataType: 'json',
        type: 'post',
        data:{'id':id},
        success: function(data) {
            if(data) {
                $('#setting-content').html(data.form);
                $('#profile-setting-modal').modal('show');
            }
        }
    });
}
function saveSetting(id)
{
    $.ajax({
        url:baseUrl+'/user/profile/saveSetting',
        dataType: 'json',
        type: 'post',
        data:$('#setting-form').serialize()+'&ajax=ajax-profile-list&id='+id,
        success: function(data) {
            if(data.status == 'success') {
                successmsg("setting-success",data.message);
            }
        }
    });
}
function deleteProfile(id)
{
    if(confirm("Do you want to delete profile?")) {
       $.ajax({
            url:baseUrl+'/user/profile/delete',
            dataType: 'json',
            type: 'post',
            data:{'id':id,'ajax':'delete'},
            success: function(data) {
                if(data.status == 'success') {
                    successmsg("profile-success",data.message);
                    $.fn.yiiListView.update('profile-lists');
                }
            }
        }); 
    }
    
}
function getShareProfile(id)
{
    $('#share-form')[0].reset();
    $('#profileId').val(id);
    $('#profile-share-modal').modal('show');
}
function shareToTwitter(id)
{
    $.ajax({
        url:baseUrl+'/user/profile/getTwitterUrl',
        dataType: 'json',
        type: 'post',
        data:{'id':id},
        success: function(data) {
            if(data.url) {
                var popupAttr = 'width=800,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';  
                popup = window.open(data.url,'tweet',popupAttr);
                popup.focus();
            }
        }
    }); 
        

}
</script>
