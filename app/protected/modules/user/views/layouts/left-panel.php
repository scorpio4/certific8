<div class="leftpanel">
    <div class="media profile-left">
        <?php $user = User::model()->findByPk(Yii::app()->user->id);?>
        <a class="pull-left profile-thumb" href="<?php echo Yii::app()->homeUrl;?>">
            <?php 
                $path = Yii::getPathOfAlias('webroot'). '/uploads/avatar/' . $user->id.'/thumb/'.$user->avatar;
                if(file_exists($path)) {?>
                <img class="img-circle" src="<?php echo Yii::app()->baseUrl. '/uploads/avatar/' . $user->id.'/thumb/'.$user->avatar; ?>">
            <?php } else {?>
                <img class="img-circle" src="<?php echo Yii::app()->theme->baseUrl ?>/images/photos/profile.png" alt="">
            <?php }?>
        </a>
        <div class="media-body">
            <h4 class="media-heading">
                <?php echo $user->full_name;?>
            </h4>
            <small class="text-muted">
                <?php echo ucfirst(Yii::app()->user->role);?>
            </small>
        </div>
    </div>
    <?php 
        $currentPage =Yii::app()->controller->id."-".Yii::app()->controller->action->id;
        $this->widget('zii.widgets.CMenu',array(
            'htmlOptions' => array('class' => 'nav nav-pills nav-stacked'),
            'activeCssClass' => 'active',
            'encodeLabel' => false,
            'items'=> array(
                    array('label'=>'<i class="fa fa-male"></i> <span>Personal</span>', 'url'=>array('/'),'active'=>$currentPage=='user-update'?true:false),
                    array('label'=>'<i class="fa fa-star-half-o"></i> <span>Membership</span>', 'url'=>array('/'),'active'=>$currentPage=='user-'?true:false),
                    array('label'=>'<i class="fa fa-user"></i> <span>My Profiles</span>', 'url'=>array('profile/index'),'active'=>$currentPage=='profile-index'?true:false),
                    array('label'=>'<i class="fa fa-calculator"></i> <span>Billing</span>', 'url'=>array('/'),'active'=>$currentPage=='user-'?true:false),
                    array('label'=>'<i class="fa fa-adjust"></i> <span>Coaching</span>', 'url'=>array('/'),'active'=>$currentPage=='user-'?true:false),
                    array('label'=>'<i class="fa fa-coffee"></i> <span>Branding</span>', 'url'=>array('/'),'active'=>$currentPage=='user-'?true:false),
                    array('label'=>'<i class="fa fa-lightbulb-o"></i> <span>Special Offers</span>', 'url'=>array('/'),'active'=>$currentPage=='user-'?true:false),
                    array('label'=>'<i class="fa fa-sign-out"></i> <span>Logout</span>', 'url'=>array('site/logout'),'active'=>$currentPage=='user-'?true:false),
            )
        ));    
    ?>
</div>