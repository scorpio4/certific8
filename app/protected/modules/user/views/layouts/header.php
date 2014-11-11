<header>
    <?php 
        $value = 0;
        if(isset(Yii::app()->request->cookies['menu_fold'])) {
            $value = Yii::app()->request->cookies['menu_fold']->value;
        }
        if($value == 1) {
            $class = 'collapsed';
        } else {
            $class = '';
        }
    ?>
    <div class="headerwrapper <?php echo $class;?>" id="head-wrp">
        <div class="header-left">
            <a href="javascript:void(0)" class="logo">
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/logo.png" alt="" /> 
            </a>
            <div class="pull-right">
                <a href="javascript:void(0)" class="menu-collapse" >
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
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
                </div>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript">
$('.menu-collapse').click(function() {
    $.ajax({
            type:"post",
            url:'<?php echo $this->createUrl('profile/setMenu');?>' ,
            success:function(rsponse) {
                        
                    }
    });
});
$(window).load(function(){
  $('#main-wrp,#head-wrp').addClass('<?php echo $class;?>');
});
</script>