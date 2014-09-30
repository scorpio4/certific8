<div class="media profile-left">
    <a class="pull-left profile-thumb" href="#">
        <img class="img-circle" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/photos/profile.png" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading">Elen Adarna</h4>
        <small class="text-muted">Beach Lover</small>
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
        array('label' => 'Skill Trainer', 'url' => array('skillTrainer/admin')),
        array('label' => 'Provider Trainer', 'url' => array('providerTrainer/admin')),
        array('label' => 'Social', 'url' => array('social/admin')),
        array('label' => 'Invite', 'url' => array('invite/admin')),
        array('label' => 'Vouch', 'url' => array('vouch/admin')),
        array('label' => 'Membership', 'url' => array('membership/admin')),
        array('label' => 'Benefits', 'url' => array('benefits/admin')),
        array('label' => 'Role', 'url' => array('role/admin')),
        array('label' => 'Views', 'url' => array('view/admin')),
    ),
));
?>
