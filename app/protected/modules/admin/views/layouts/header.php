<header>
    <div class="headerwrapper">
        <div class="header-left">
            <a href="<?php echo Yii::app()->homeUrl . 'admin'; ?>" class="logo">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" alt="" /> 
            </a>
            <div class="pull-right">
                <a href="#" class="menu-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div><!-- header-left -->
        <div class="header-right">
            <div class="pull-right">
                <div class="btn-group btn-group-option">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'id' => 'menu-home',
                        'activeCssClass' => 'active',
                        'encodeLabel' => false,
                        'htmlOptions' => array('class' => 'dropdown-menu pull-right', 'role' => 'menu'),
                        'items' => array(
                            array('label' => '<i class="glyphicon glyphicon-cog"></i> Change Password', 'url' => array('user/changepassword')),
                            array('label' => '<i class="glyphicon glyphicon-log-out"></i> Sign Out', 'url' => array('site/logout')),
                        ),
                    ));
                    ?>
                </div><!-- btn-group -->
            </div><!-- pull-right -->
        </div><!-- header-right -->
    </div><!-- headerwrapper -->
</header>