<li class="third-effect view-2" id="skill-id:<?php echo $data->id ?>">
    <?php 
        $path = Yii::getPathOfAlias('webroot'). '/uploads/skill/'.$data->userSkill->skill->logo;
        if(file_exists($path)) {?>
        <img  src="<?php echo Yii::app()->baseUrl. '/uploads/skill/'.$data->userSkill->skill->logo; ?>">
    <?php } else {?>
        <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/certified.png" alt="">
    <?php }?>
    <?php 
        if($type != 'view') {
    ?>
        <div class="mask">
            <a href="<?php echo $data->userSkill->skill->webpage;?>" class="info-4" style="top:56px !important" title="View">View</a>
            <a class="info" href="javascript:void(0)" onclick="editData('skill',<?php echo $data->user_skill_id; ?>)" style="top:56px !important" title="Edit">Edit</a>
            <a href="javascript:void(0)"  onclick="deleteData('skill',<?php echo $data->id; ?>, 1)" class="info-2" style="top:56px !important" title="Delete">Delete</a>
            <a href="javascript:void(0)" class="info-3 drag-states" style="top:56px !important" title="Drag">Drag</a>
        </div>
    <?php }?>
</li>
