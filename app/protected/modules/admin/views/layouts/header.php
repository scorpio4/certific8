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
                    'items' => array(
                        array('label' => 'Users', 'url' => array('user/admin')),
                        array('label' => 'Change Password', 'url' => array('user/changepassword')),
                        array('label' => 'Logout', 'url' => array('site/logout')),
                    ),
                ));
            ?>
            <div class="c"></div>
        </div>
    </div>
</header>