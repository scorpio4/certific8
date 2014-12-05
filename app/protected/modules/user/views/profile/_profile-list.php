<?php 
    $id = rand(100, 999).$data->id.rand(100, 999);
    $template = ProfileTemplate::model()->getProfileTemplate($data->template_id);
    if(($basicId == $data->id) && !isset($data->template)) {
        $bgmain = 'bg-default';
        $bghead = 'bg-default-head';
    } else {
        $bghead = '';
        $bgmain = '';
    }
?>
<li id="profile-<?php echo $id;?>">
    <figure>
        <div class="<?php echo $template['main-class'];?> <?php echo $bgmain;?>">
            <div class="vcard-name <?php echo $bghead;?>"><?php if(isset($data->template)){?><a href="javascript:void(0)" onclick="window.open('<?php echo Yii::app()->createAbsoluteUrl('/vcard/'.$data->template_id.'/profile/'.$data->id);?>','vcard', 'width=1200,height=700,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20');return false;" ><?php echo $data->template->template_name;?></a><?php } else {if($basicId == $data->id) {echo 'Default Profile';} else {echo '&nbsp;&nbsp;';}}?></div>
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
                <div>
                	<div class="pull-left mr10 mt5">
                    	 <a href="javascript:editSetting('<?php echo $data->id;?>')" class="btn btn-default btn-xs" title="Public Settings"><i class="fa fa-cog"></i></a>
                        <?php 
                            if($bghead <> '') {
                               echo CHtml::link('Add a profile now.',array('/profile'),array('class'=>'btn btn-success btn-xs'));
                               echo '<p class="mt5">Create a profile for a specific role. Express your Personal Brand and the value your professional expertise offers.</p>';
                            }
                        ?>
                     </div>
                	<div class="pull-left">
                    	<?php $point = $data->getProfileStatus($data->id);?>
                        <div class="progress-bar-main">
                            <?php if($bghead == '') {?>
                                <div class="text11">Profile Completeness <span class="text-bold ml10"><?php echo $point.'%';?></span></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $point;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $point.'%';?>">
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                	<div class="clearfix"></div>
                </div>
            </div>
        </div>
        <figcaption>
            
            <div  class="figicons">
               	<div class="mb10">
					<?php echo CHtml::link('<i class="fa fa-search"></i>',array('/profileview/'.$id),array('class'=>'btn btn-primary btn-xs','title'=>"View Profile" ))?>
                    <?php echo CHtml::link('<i class="fa fa-files-o"></i>',array('/profilecopy/'.$id),array('class'=>'btn btn-warning btn-xs','title'=>"Copy Profile" ))?>
                    <?php echo CHtml::link('<i class="fa fa-pencil"></i>',array('/profile/'.$id),array('class'=>'btn btn-success btn-xs','title'=>"Edit Profile" ))?>
                    <?php 
                        echo CHtml::link('<i class="fa fa-trash-o"></i>','javascript:void(0)',array('class'=>'btn btn-danger btn-xs','title'=>"Delete Profile",'id'=>'delete-'.$id,'onclick'=>'deleteProfile('.$id.')'));
                    ?>
                </div>
                <div>
                	<?php if($data->template_id >0) {?>
                    	<?php echo CHtml::link('<i class="fa fa-twitter-square"></i>','javascript:shareToTwitter('.$id.')',array('class'=>'btn btn-info btn-xs','title'=>"Share on Twitter" ,'target'=>'_blank'))?>
                    	<?php echo CHtml::link('<i class="fa fa fa-share-square"></i>','javascript:getShareProfile('.$id.')',array('class'=>'btn btn-default btn-xs','title'=>"Share with colleague" ))?>
                	<?php }?>
                </div>
            </div>
        </figcaption>
    </figure>
</li>