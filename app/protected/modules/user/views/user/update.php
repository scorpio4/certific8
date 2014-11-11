<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Public Profile',
);
?>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <?php if (Yii::app()->user->hasFlash('success')): ?>
                <div class="alert alert-success alert-dismissable mt20">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>
            <?php endif; ?>
           <?php $this->renderPartial('_form', array('model' => $model)); ?> 
        </div>
    </div>
</div>
<script type="text/javascript">
function setImage()
{
    var fileData = $('#User_avatar')[0].files;
    if(fileData.length >= 1) {
        $(".uploded-img").attr({'src':URL.createObjectURL(fileData[0]),height:'171px',width:'174px'});
    } else {
        console.log(fileData);
        $(".uploded-img").attr({'src':$('#default_img').val()});
    }
}
</script>

