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
        array('label' => 'Profiles', 'url' => array('/admin/profile/admin')),
        array('label' => 'Organization', 'url' => array('/admin/org/admin')),
        array('label' => 'Provider', 'url' => array('/admin/provider/admin')),
        array('label' => 'Trainer', 'url' => array('/admin/trainer/admin')),
        array('label' => 'HR', 'url' => array('/admin/hr/admin')),
        array('label' => 'HR Shortlist', 'url' => array('/admin/hrShortlist/admin')),
        array('label' => 'Skill', 'url' => array('/admin/skill/admin')),
        array('label' => 'Skill Trainer', 'url' => array('/admin/skillTrainer/admin')),
        array('label' => 'Provider Trainer', 'url' => array('/admin/providerTrainer/admin')),
        array('label' => 'Social', 'url' => array('/admin/social/admin')),
        array('label' => 'Invite', 'url' => array('/admin/invite/admin')),
        array('label' => 'Vouch', 'url' => array('/admin/vouch/admin')),
        array('label' => 'Membership', 'url' => array('/admin/membership/admin')),
        array('label' => 'Role', 'url' => array('/admin/role/admin')),
        array('label' => 'Views', 'url' => array('/admin/view/admin')),
    ),
));
?>
