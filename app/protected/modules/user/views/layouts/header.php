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