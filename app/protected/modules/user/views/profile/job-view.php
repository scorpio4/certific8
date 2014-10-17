<div>
    <div class="text04 pull-left"><span class="dark-blue">My</span><span class="light-blue"> Jobs</span></div>
    <div class="edit">
        <a href="javascript:void(0)"  onclick="setDefault('jobs')">
            <i class="fa fa-plus-square mr5"></i>Add
        </a>
    </div>
    <div class="clearfix"></div>
</div>
<div class="job-details">
    <div id="jobs-msgs"></div>
    <?php
        $this->widget('zii.widgets.CListView', array(
            'id'=>'jobs-lists',
            'dataProvider' =>  $profileJob->search($profileId),
            'itemView' => '/profile/_job_list',
            'enablePagination' => false,
            'emptyText'=>'',
            'itemsTagName'=>'ul',
            'itemsCssClass' => 'portfolioContainer',
            'template' => '{items}',
        ));
    ?>
</div>

<div id="editjobs" class="panel-collapse collapse panel">
    <div class="panel-body">
        <div id="jobs-success"></div>
        <?php echo $this->renderPartial('_job-form',compact('profileJob','profileId'));?>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    
    var stdate = $("#ProfileJob_start_date").datepicker( {
        format: "dd/mm",
        viewMode: "dates", 
        maxViewMode: "months"
    }).on('changeDate', function(ev) {
            stdate.hide();
        }).data('datepicker');;
    var endate = $("#ProfileJob_end_date").datepicker( {
        format: "dd/mm",
        viewMode: "dates", 
        maxViewMode: "months"
    }).on('changeDate', function(ev) {
            endate.hide();
        }).data('datepicker');;
})
</script>