<div class="col-md-3">
    <div class="profile-image">
        <?php 
            $path = Yii::getPathOfAlias('webroot'). '/uploads/avatar/' . $user->id.'/profile/'.$user->avatar;
            if(file_exists($path)) {
                $path = Yii::app()->baseUrl. '/uploads/avatar/' . $user->id.'/profile/'.$user->avatar;
            } else {
                $path = Yii::app()->theme->baseUrl."/images/photos/profile.png";
            }
        ?>
        <img src="<?php echo $path;?>">
    </div>
</div>
<div class="col-md-9">
    <div class="profile-details-top">
        <div class="profile-name">
            <div>
                <?php if($type != 'view') {?>
                    <a id="username" class="editable editable-click" data-pk="1" data-type="address" href="#" data-original-title="" title="Edit name">
                        <i class="fa fa-pencil edit-before"></i>
                    </a>
                <?php }?>
                <span id="username-detail">
                    <span class="dark-blue text01"><?php echo $user->first_name?></span> 
                    <span class="light-blue text01"><?php echo $user->last_name?></span>
                </span>
            </div>
            <div>
                <?php if($type != 'view') {?>
                <a href="#" id="designation" data-type="text" data-placement="top" data-title="Designation" class="editble" title="Edit designation">
                    <i class="fa fa-pencil edit-before"></i>
                </a>
                <?php }?>
                <span class="text02" id="designation-detail"><?php echo $profile->short_title?></span>
            </div>
        </div>
        <div class="profile-icons">
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="profile-details-bottom">
        <div class="row">
            <div class="col-md-7">
                <div class="text03">
                    <?php if($type != 'view') {?>
                    <a href="#" id="biodata" data-type="textarea" data-placement="bottom" data-title="Biodata" title="Edit Shortbio">
                        <i class="fa fa-pencil edit-before"></i>
                    </a>
                    <?php }?>
                    <span id="biodata-detail"><?php echo $profile->short_bio?></span>
                </div>	
            </div>
        </div>
    </div>
</div>