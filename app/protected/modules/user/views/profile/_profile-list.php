<li>
    <figure>
        <div class="vcard-body">
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
            <div class="v-bio">
                <div>
                    <?php echo $data->short_bio;?>
                </div>
            </div>
        </div>
        <figcaption>
            <div class="progress-bar-main">
                <div class="text11">Profile Completeness <span class="text-bold ml10">20%</span></div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>	
            </div>
            <?php $id = rand(100, 999).$data->id.rand(100, 999);?>
            <div>
                <a href="" class="btn btn-default btn-xs" title="Settings" data-toggle="modal" data-target="#mysettings"><i class="fa fa-cog"></i></a>
                <a href="" title="View" class="btn btn-primary btn-xs"><i class="fa fa-search"></i></a>
                <a href="" title="Copy" class="btn btn-warning btn-xs"><i class="fa fa-files-o"></i></a>
                <!--<a href="" title="Edit" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>-->
                <?php echo CHtml::link('<i class="fa fa-pencil"></i>',array('/profile/'.$id),array('class'=>'btn btn-success btn-xs','title'=>"Edit" ))?>
                <a href="" title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
            </div>
        </figcaption>
    </figure>
</li>