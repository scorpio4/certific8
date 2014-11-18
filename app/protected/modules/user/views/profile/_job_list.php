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
    <p class="grey-color-bold"><?php echo $data->org->legal_name;?></p>
    <?php 
        if($data->end_date == NULL) {
            $endDate = date('F Y',strtotime(date('Y-m-d')));
        } else {
            $endDate = date('F Y',  strtotime($data->end_date));
        }
    ?>
    <p class="grey-color text-bold"><?php echo date('F Y',  strtotime($data->start_date)).' - '.$endDate.' ('.$data->getExperience($data).')';?></p>
    <p>
        <?php echo $data->comment;?>
    </p>
   
</li>

