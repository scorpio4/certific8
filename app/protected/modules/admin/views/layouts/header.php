<header class="header-main navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">        
            <a href="index.html" class="logo"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/logo.png" class="m-r-sm"></a>
            <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse" style="float:right">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <?php
                $this->widget('zii.widgets.CMenu', array(
                    'id' => 'menu-home',
                    'activeCssClass' => 'active-page',
                    'htmlOptions' => array('class' => 'nav navbar-nav navbar-right navigation'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
                    'items' => array(
                        array('label' => 'Users', 'url' => array('user/admin')),
                        array('label' => 'Profiles', 'url' => array('profile/admin')),
                        array('label' => 'Organization', 'url' => array('org/admin')),
                        array('label' => 'Provider', 'url' => array('provider/admin')),
                        array('label' => 'Trainer', 'url' => array('trainer/admin')),
                        array('label' => 'Hr', 'url' => array('hr/admin')),
                        array('label' => 'Skill', 'url' => array('skill/admin')),
                        array('label' => 'Others', 'url' =>'#', 'items'=>array(
                                array('label' => 'Membership', 'url' => array('membership/admin')),
                                array('label' => 'Role', 'url' => array('role/admin')),
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