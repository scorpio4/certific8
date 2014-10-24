<?php
/* @var $this ProfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Profiles',
);

$this->menu = array(
    array('label' => '<i class="fa fa-plus"></i>', 'url' => array('/profile'), 'linkOptions' => array('class' => 'btn btn-primary', 'title' => 'Add')),
);
?>
<div id="profile-success"></div>
<?php
    $this->widget('zii.widgets.CListView', array(
        'id'=>'profile-lists',
        'dataProvider'=>$profile->search($id),
        'itemView'=>'_profile-list',
        'itemsTagName'=>'ul',
        'summaryText'=>'',
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
            <div class="modal-body" id="setting-content">
               
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
</script>
