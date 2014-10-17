<div>
    <div class="text04 pull-left"><span class="dark-blue">My Social</span><span class="light-blue"> Network</span></div>
    <div class="edit"> 
        <a href="javascript:void(0)"  onclick="setDefault('social')"><i class="fa fa-plus-square mr5"></i>Add</a>
    </div>
    <div class="clearfix"></div>
</div>
<div id="social-msgs"></div>
<?php
    $this->widget('zii.widgets.CListView', array(
        'id'=>'social-lists',
        'dataProvider' =>  $socialProfile->search($userId,$profileId),
        'itemView' => '/profile/_social_list',
        'enablePagination' => false,
        'emptyText'=>'',
        'itemsCssClass' => 'portfolioContainer',
        'template' => '{items}',
    ));
?>
<div class="clearfix"></div>
<div id="editsocial" class="panel-collapse collapse panel">
    <div class="panel-body">
        <div id="social-success"></div>
        <?php echo $this->renderPartial('_social-form',  compact('socialProfile','profileId')); ?>
    </div>
</div>