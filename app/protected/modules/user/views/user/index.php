<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = Yii::app()->name . ' - Login';
?>
<?php echo $this->renderPartial('signup',array('model'=>$model));?>
<?php echo $this->renderPartial('work',array(''));?>
<?php echo $this->renderPartial('whtdoes',array(''));?>
<div class="modal fade" id="forgot-passwd-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="setting-modal-head">Forgot  your password?</h4>
            </div>
            <div id="password-success"></div>
            <div class="modal-body">
               <?php echo $this->renderPartial('_forgot-pass',array('model'=>$model));?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function forgotModal()
    {
       $("#forgot-pass-form")[0].reset();
       $('#forgot-passwd-modal').modal('show');
    }
    /*$('#forgot-passwd-modal').on('hidden.bs.modal', function () {
        
    });*/
    function socialLogin(provider,prefix)
    {
        var popupAttr = 'width=800,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';  
        url = "<?php echo Yii::app()->createAbsoluteUrl('user/user/sociallogin/provider');?>/"+provider;
        popup = window.open(url,prefix,popupAttr);
        popup.focus();
       
    }
</script>