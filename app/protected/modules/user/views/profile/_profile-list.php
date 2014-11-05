<?php 
    $id = rand(100, 999).$data->id.rand(100, 999);
    $template = ProfileTemplate::model()->getProfileTemplate($data->template_id);
?>
<li id="profile-<?php echo $id;?>">
    <figure>
        <div class="<?php echo $template['main-class'];?>">
            <div class="v-top">
                <div class="v-avatar">
                    <?php 
                        $user = $data->user;
                        $path = Yii::getPathOfAlias('webroot'). '/uploads/avatar/' . $data->user_id.'/profile/'.$user->avatar;
                        if(file_exists($path)) {
                            $path = Yii::app()->baseUrl. '/uploads/avatar/' . $data->user_id.'/profile/'.$user->avatar;
                        } else {
                            $path = Yii::app()->theme->baseUrl."/images/photos/profile.png";
                        }
                    ?>
                    <img src="<?php echo $path;?>">
                </div>
                <div class="v-details">
                    <div class="text08"><?php echo $user->first_name.' '.$user->last_name;?></div>
                    <div class="text09"><?php echo $data->short_title;?></div>	
                </div>
                <div class="clearfix"></div>
            </div>	
            <div class="<?php echo $template['inner-class'];?>">
                <p>
                    <?php echo $data->short_bio;?>
                </p>
            </div>
        </div>
        <figcaption>
            <?php $point = $data->getProfileStatus($data->id);?>
            <div class="progress-bar-main">
                <div class="text11">Profile Completeness <span class="text-bold ml10"><?php echo $point.'%';?></span></div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $point;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $point.'%';?>">
                        
                    </div>
                </div>	
            </div>
            <div>
                <a href="javascript:editSetting('<?php echo $data->id;?>')" class="btn btn-default btn-xs" title="Profile Setting"><i class="fa fa-cog"></i></a>
                <?php echo CHtml::link('<i class="fa fa-search"></i>',array('/profileview/'.$id),array('class'=>'btn btn-primary btn-xs','title'=>"View Profile" ))?>
                <?php echo CHtml::link('<i class="fa fa-files-o"></i>',array('/profilecopy/'.$id),array('class'=>'btn btn-warning btn-xs','title'=>"Copy Profile" ))?>
                <?php echo CHtml::link('<i class="fa fa-pencil"></i>',array('/profile/'.$id),array('class'=>'btn btn-success btn-xs','title'=>"Edit Profile" ))?>
                <?php 
                    echo CHtml::link('<i class="fa fa-trash-o"></i>','javascript:void(0)',array('class'=>'btn btn-danger btn-xs','title'=>"Delete Profile",'id'=>'delete-'.$id,'onclick'=>'deleteProfile('.$id.')'));
                ?>
            </div>
        </figcaption>
    </figure>
</li>