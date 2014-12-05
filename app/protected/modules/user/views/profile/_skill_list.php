<li class="third-effect view-2" id="skill-id:<?php echo $data->id ?>">
    <?php 
        $title = '';
        $description = '';
        $url = '';
        if(isset($data->userSkill->skill)) {
            $skill = $data->userSkill->skill;
            $title = $skill->title;
            $description = $skill->details;
            $url = $skill->formatUrl($skill->webpage);
        }
        $path = Yii::getPathOfAlias('webroot'). '/uploads/skill/'.$data->userSkill->skill->logo;
        if(file_exists($path)) { 
            $path = Yii::app()->baseUrl. '/uploads/skill/'.$data->userSkill->skill->logo;
        } else { 
            $path = Yii::app()->theme->baseUrl ."/images/certified.png";
        }?>
    <img src="<?php echo $path; ?>" alt="">    
    <div data-trigger="hover" id="skillpopover_<?php echo $data->id;?>" class="popovers skillpopover" data-html="true" data-container="body" data-toggle="popover" data-placement="bottom" 
        data-content="
                <div class='skill-pop'>
                    <div><img src='<?php echo $path;?>'></div>
                    <h4 class='light-blue text-bold'><?php echo $title;?></h4>
                    <p><?php echo $description;?> </p>
                    <p><a target='_blank' href='<?php echo $url;?>'><?php echo $url;?></p>
                </div>
        ">
        <div class="mask">
            <?php 
		$url = $data->formatUrl();
                if($type == 'view') {?>
            		<a href="<?php echo $url;?>" class="info-4" style="top:56px !important" title="View" target="_blank">View</a>
            	<?php } else {?>
                    <a href="<?php echo $url;;?>" class="info-4" style="top:56px !important" title="View" target="_blank">View</a>
                    <a class="info" href="javascript:void(0)" onclick="editData('skill',<?php echo $data->user_skill_id; ?>)" style="top:56px !important" title="Edit">Edit</a>
                    <a href="javascript:void(0)"  onclick="deleteData('skill',<?php echo $data->id; ?>, 1)" class="info-2" style="top:56px !important" title="Delete">Delete</a>
                    <a href="javascript:void(0)" class="info-3 drag-states" style="top:56px !important" title="Drag">Drag</a>
            <?php }?>
        </div>
    </div>
</li>

