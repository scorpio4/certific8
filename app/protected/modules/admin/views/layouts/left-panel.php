<?php
    $cUser = User::model()->findByPk(Yii::app()->user->id);
?>
<div class="media profile-left">
    <a class="pull-left profile-thumb" href="#">
        <?php if($cUser->avatar!='avatar.png'){ 
                echo CHtml::image(Yii::app()->request->baseUrl . '/uploads/avatar/' . $cUser->id . '/' . $cUser->avatar, $cUser->first_name,array('class'=>'img-circle'));
             }else{ ?>
                <img class="img-circle" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/photos/profile.png" alt="">
        <?php } ?>
    </a>
    <div class="media-body">
        <h4 class="media-heading"><?php echo $cUser->full_name; ?></h4>
    </div>
</div><!-- media -->
<?php
$this->widget('zii.widgets.CMenu', array(
    'id' => 'menu-home',
    'activeCssClass' => 'active',
    'encodeLabel' => false,
    'htmlOptions' => array('class' => 'nav nav-pills nav-stacked'),
    'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
    'items' => array(
        array('label' => '<i class="fa fa-users"></i><span>Users</span>', 'url' => array('/admin/user/admin')),
        array('label' => '<i class="fa fa-user"></i><span>Profiles</span>', 'url' => array('/admin/profile/admin')),
        array('label' => '<i class="fa fa-sitemap"></i><span>Organization</span>', 'url' => array('/admin/org/admin')),
        array('label' => '<i class="fa fa-database"></i><span>Provider</span>', 'url' => array('/admin/provider/admin')),
        array('label' => '<i class="fa fa-paper-plane"></i><span>Trainer</span>', 'url' => array('/admin/trainer/admin')),
        array('label' => '<i class="fa fa-child"></i><span>HR</span>', 'url' => array('/admin/hr/admin')),
        array('label' => '<i class="fa fa-file-text"></i><span>HR Shortlist</span>', 'url' => array('/admin/hrShortlist/admin')),
        array('label' => '<i class="fa fa-trophy"></i><span>Skill</span>', 'url' => array('/admin/skill/admin')),
        array('label' => '<i class="fa fa-share-alt-square"></i><span>Skill Trainer</span>', 'url' => array('/admin/skillTrainer/admin')),
        array('label' => '<i class="fa fa-paint-brush"></i><span>Provider Trainer</span>', 'url' => array('/admin/providerTrainer/admin')),
        array('label' => '<i class="fa fa-puzzle-piece"></i><span>Social</span>', 'url' => array('/admin/social/admin')),
        array('label' => '<i class="fa fa-thumbs-up"></i><span>Invite</span>', 'url' => array('/admin/invite/admin')),
        array('label' => '<i class="fa fa-tag"></i><span>Vouch</span>', 'url' => array('/admin/vouch/admin')),
        array('label' => '<i class="fa fa-star-half-o"></i><span>Membership</span>', 'url' => array('/admin/membership/admin')),
        array('label' => '<i class="fa fa-graduation-cap"></i><span>Role</span>', 'url' => array('/admin/role/admin')),
        array('label' => '<i class="fa fa-search"></i><span>Views</span>', 'url' => array('/admin/view/admin')),
    ),
));
?>
