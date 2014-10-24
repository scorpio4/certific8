<li>
    <div>
        <h4 class="pull-left"><?php echo $data->job_title;?></h4>
        <?php if($type != 'view') {?>
            <div class="pull-right edit">
                <span  data-toggle="collapse" >
                    <a href="javascript:void(0)" onclick="editData('jobs',<?php echo $data->id;?>)" title="Edit"><i class="fa fa-pencil mr5"></i></a>
                </span>
                <a href="javascript:void(0)"  onclick="deleteData('jobs',<?php echo $data->id;?>,1)" title="Delete"><i class="fa fa-trash mr5"></i></a>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
    <p>
        <?php echo $data->comment;?>
    </p>
    <p>Start Date:<?php echo $data->start_date;?></p>
    <p>End Date:<?php echo $data->end_date;?></p>
</li>

