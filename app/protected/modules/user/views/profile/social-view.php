<div>
    <div class="text04 pull-left"><span class="dark-blue">My Social</span><span class="light-blue"> Network</span></div>
    <div class="edit"> 
        <?php if($type != 'view') {?>
            <a href="javascript:void(0)"  onclick="setDefault('social')" title="Add Social Network"><i class="fa fa-plus-square mr5"></i>Add</a>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</div>
<?php 
    if($type != 'view') {
        $emptext = '<div class="add-box"> <a  href="javascript:void(0)"  onclick=setDefault("social") title="Add Social Network"><i class="fa fa-plus-square mr5"></i>Add</a></div>';
    } else {
        $emptext = '';
    }
?>
<div id="social-msgs"></div>
<?php
    $this->widget('zii.widgets.CListView', array(
        'id'=>'social-lists',
        'dataProvider' =>  $socialProfile->search($userId,$profileId),
        'itemView' => '/profile/_social_list',
        'enablePagination' => false,
        'emptyText'=>$emptext,
        'afterAjaxUpdate'=>"function() {
            sortList('social','.onsort');
        }",
        'itemsCssClass' => 'portfolioContainer onsort',
        'template' => '{items}',
        'viewData'=>compact('type'),
    ));
?>
<div class="clearfix"></div>
<?php if($type != 'view') {?>
    <div id="editsocial" class="panel-collapse collapse panel">
        <div class="panel-body">
            <div id="social-success"></div>
            <?php echo $this->renderPartial('_social-form',  compact('socialProfile','profileId')); ?>
        </div>
    </div>
<?php }?>
<script type="text/javascript">
$(function() {
    sortList('social','.onsort');
});
</script>