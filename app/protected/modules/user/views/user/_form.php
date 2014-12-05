<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
    'htmlOptions' => array('enctype' => 'multipart/form-data')
        ));
?>
<?php
if ($model->current_salary <= 0) {
    $model->current_salary = '';
}
?>
<div class="panel-body">
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <a href="#" data-toggle="modal" data-target="#myprofile">
                    <?php
                    $path = Yii::getPathOfAlias('webroot') . '/uploads/avatar/' . $model->id . '/user/' . $model->avatar;
                    if (file_exists($path)) {
                        $path = Yii::app()->baseUrl . '/uploads/avatar/' . $model->id . '/user/' . $model->avatar;
                    } else {
                        $path = Yii::app()->theme->baseUrl . "/images/upload-profile.jpg";
                    }
                    echo CHtml::hiddenField('default_img', $path);
                    ?>
                    <img class="uploded-img" src="<?php echo $path; ?>">
                </a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'first_name'); ?>
                        <?php echo $form->textField($model, 'first_name', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'first_name'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'last_name'); ?>
                        <?php echo $form->textField($model, 'last_name', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'last_name'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'email'); ?>
                        <?php echo $form->textField($model, 'email', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'email'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'mobile'); ?>
                        <?php echo $form->textField($model, 'mobile', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'mobile'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'house_unit_number'); ?>
                        <?php echo $form->textField($model, 'house_unit_number', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'house_unit_number'); ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'street'); ?>
                        <?php echo $form->textField($model, 'street', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'street'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'suburb'); ?>
                        <?php echo $form->textField($model, 'suburb', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'suburb'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'state'); ?>
                        <?php echo $form->textField($model, 'state', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'state'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'postcode'); ?>
                        <?php echo $form->textField($model, 'postcode', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'postcode'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'country'); ?>
                        <?php echo $form->textField($model, 'country', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'country'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'current_salary'); ?>
                        <?php echo $form->textField($model, 'current_salary', array('class' => "form-control")); ?>
                        <?php echo $form->error($model, 'current_salary'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $form->labelEx($profile, 'short_title'); ?>
                        <?php echo $form->textField($profile, 'short_title', array('class' => "form-control")); ?>
                        <?php echo $form->error($profile, 'short_title'); ?>
                    </div>
                </div> 
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <?php echo $form->labelEx($profile, 'short_bio'); ?>
                        <?php Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');?>
                        <?php 
                            $this->widget('ImperaviRedactorWidget', array(
                                'model' => $profile,
                                'attribute' => 'short_bio',
                                'htmlOptions'=>array('class'=>'form-control'),
                                'options' => array(
                                    'toolbar' => true,
                                    'iframe' => true,
                                ),
                            ));
                        ?>
                        <?php echo $form->error($profile, 'short_bio'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php
                echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('user/update?rand=' . rand())), array(
                    'dataType' => 'json',
                    'type' => 'post',
                    'data' =>'js:getMyData()',
                    'processData'=> false,
                    'contentType'=> false,
                    'success' => 'function(data) {
                                            $(".errorMessage").hide();
                                            if(data.status=="success"){
                                                successmsg("user-success",data.message);
                                            } else {
                                                $.each(data, function(key, val) {
                                                $("#user-form #"+key+"_em_").text(val);                                                    
                                                $("#user-form #"+key+"_em_").show();
                                                });
                                            }       
                                        }',
                        ), array('id' => 'user-btn', 'class' => 'btn btn-primary mr5 usrbtn'));
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Myprofile-->
<div class="modal fade" id="myprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Upload your Profile Picture</h4>
            </div>
            <div class="modal-body">
                <div class="text-bold mb5">Choose a photo</div>
                <div class="mb5">You can upload a JPEG, GIF, or PNG file ( File size limit is 4MB)</div>
                <div class="m-t">
                    <?php
                    $this->widget('CMultiFileUpload', array(
                        'model' => $model,
                        'attribute' => 'avatar',
                        'accept' => 'jpeg|jpg|gif|png',
                        'max' => 1,
                        'options' => array(
                            'afterFileSelect' => 'function(e ,v ,m){
                                        var fileSize = e.files[0].size;
                                             if(fileSize>4000*1024){ 
                                                alert("Exceeds file upload limit 4MB");
                                                $(".MultiFile-remove").click(); 
                                              }                      
                                              return true;

                                    }',
                        )
                    ));
                    ?>
                    <?php echo $form->error($model, 'avatar'); ?>
                </div>
                <div class="mt10">
                    <button type="button" class="btn btn-primary mr5" onclick="setImage()" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
<script type="text/javascript">
function getMyData(){
    var formData = new FormData($("#user-form")[0]);
    formData.append('file', $('#User_avatar')[0].files[0]);
    return formData;
}
</script>
