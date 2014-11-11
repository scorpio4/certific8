<div>
    <div class="text04 pull-left"><span class="dark-blue">My</span><span class="light-blue"> Jobs</span></div>
    <div class="edit">
        <?php if($type != 'view') {?>
            <a href="javascript:void(0)"  onclick="setDefault('jobs')" title="Add Job">
                <i class="fa fa-plus-square mr5"></i>Add
            </a>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</div>
<?php 
    if($type != 'view') {
        $emptext = '<div class="add-box"> <a  href="javascript:void(0)"  onclick=setDefault("jobs") title="Add Job"><i class="fa fa-plus-square mr5"></i>Add</a></div>';
    } else {
        $emptext = '';
    }
?>
<div class="job-details">
    <div id="jobs-msgs"></div>
    <?php
        $this->widget('zii.widgets.CListView', array(
            'id'=>'jobs-lists',
            'dataProvider' =>  $profileJob->search($profileId),
            'itemView' => '/profile/_job_list',
            'enablePagination' => false,
            'emptyText'=>$emptext,
            'itemsTagName'=>'ul',
            'itemsCssClass' => 'portfolioContainer',
            'template' => '{items}',
            'viewData'=>compact('type'),
        ));
    ?>
</div>
<?php if($type != 'view') {?>
    <div id="editjobs" class="panel-collapse collapse panel">
        <div class="panel-body">
            <div id="jobs-success"></div>
            <?php echo $this->renderPartial('_job-form',compact('profileJob','profileId'));?>
        </div>
    </div>
<?php }?>
