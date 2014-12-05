<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'edit-shortbio-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
        ));
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
?>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
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
                    <?php echo $form->hiddenField($profile,'id');?>
                </div>
            </div>
        </div>
        <?php
        echo CHtml::ajaxSubmitButton('Save', CHtml::normalizeUrl(array('profile/saveShortbio?rand=' . rand())), array(
            'dataType' => 'json',
            'type' => 'post',
            'success' => 'function(data) {
                            $(".errorMessage").hide();
                            if(data.status=="success"){
                                successmsg("shortbio-success",data.message);
                                $("#biodata-detail").html($("#Profile_short_bio").val());
                                $("#edit-shortbio-form")[0].reset();
                            } else {
                                $.each(data, function(key, val) {
                                $("#edit-shortbio-form #"+key+"_em_").text(val);                                                    
                                $("#edit-shortbio-form #"+key+"_em_").show();
                                });
                            }       
                        }',
                ), array('id' => 'shortbiobtn', 'class' => 'btn btn-primary mr5 shortbiobtn'));
        ?>
        <?php echo CHtml::link('Cancel', 'javascript:void(0)', array('class' => 'btn btn-white mr5','data-dismiss' => "modal")) ?>
    </div>
<?php $this->endWidget(); ?>
