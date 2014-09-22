<header class="header-main navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">        
            <a href="<?php echo Yii::app()->homeUrl.'admin'; ?>" class="logo"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/logo.png" class="m-r-sm"></a>
            <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse" style="float:right">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <?php
                $this->widget('zii.widgets.CMenu', array(
                    'id' => 'menu-home',
                    'activeCssClass' => 'active',
                    'htmlOptions' => array('class' => 'nav navbar-nav navbar-right navigation'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
                    'items' => array(
                        array('label' => 'Users', 'url' => array('/admin/user/admin')),
                        array('label' => 'Profiles', 'url' => array('/admin/profile/admin')),
                        array('label' => 'Organization', 'url' => array('/admin/org/admin')),
                        array('label' => 'Provider', 'url' => array('/admin/provider/admin')),
                        array('label' => 'Trainer', 'url' => array('/admin/trainer/admin')),
                        array('label' => 'HR', 'url' => array('/admin/hr/admin')),
                        array('label' => 'HR Shortlist', 'url' => array('/admin/hrShortlist/admin')),
                        array('label' => 'Skill', 'url' => array('/admin/skill/admin')),
                        array('label' => 'Others', 'url' =>'#', 'items'=>array(
                                array('label' => 'Skill Trainer', 'url' => array('skillTrainer/admin')),
                                array('label' => 'Provider Trainer', 'url' => array('providerTrainer/admin')),
                                array('label' => 'Social', 'url' => array('social/admin')),
                                array('label' => 'Invite', 'url' => array('invite/admin')),
                                array('label' => 'Vouch', 'url' => array('vouch/admin')),
                                array('label' => 'Membership', 'url' => array('membership/admin')),
                                array('label' => 'Benefits', 'url' => array('benefits/admin')),
                                array('label' => 'Role', 'url' => array('role/admin')),
                                array('label' => 'Views', 'url' => array('view/admin')),
                                array('label' => 'Change Password', 'url' => array('user/changepassword')),
                                array('label' => 'Logout', 'url' => array('site/logout')),
                            ),
                            'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown')
                        ),
                        
                    ),
                ));
            ?>
            <div class="c"></div>
        </div>
    </div>
</header>