<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'share-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
        ));
    CHtml::$afterRequiredLabel = '<span class="red-color">*</span>';
?>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <?php echo $form->labelEx($contact, 'email'); ?>
                    <?php echo $form->textField($contact, 'email', array('class' => "form-control")); ?>
                    <?php echo $form->error($contact, 'email'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($contact, 'subject'); ?>
                    <?php echo $form->textField($contact, 'subject', array('class' => "form-control")); ?>
                    <?php echo $form->error($contact, 'subject'); ?>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($contact, 'body'); ?>
                    <?php echo $form->textArea($contact, 'body', array('class' => "form-control",'rows'=>'6')); ?>
                    <?php echo $form->error($contact, 'body'); ?>
                </div>
                <?php echo CHtml::hiddenField('profileId');?>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <?php
        echo CHtml::ajaxSubmitButton('Send', CHtml::normalizeUrl(array('profile/shareProfile?rand=' . rand())), array(
            'dataType' => 'json',
            'type' => 'post',
            'success' => 'function(data) {
                            $(".errorMessage").hide();
                            if(data.status=="success"){
                                $("#share-form")[0].reset(); 
                                successmsg("share-success",data.message);
                            } else {
                                $.each(data, function(key, val) {
                                $("#share-form #"+key+"_em_").text(val);                                                    
                                $("#share-form #"+key+"_em_").show();
                                });
                            }       
                        }',
                ), array('id' => 'sharebtn', 'class' => 'btn btn-primary mr5 sharebtn'));
        ?>
        <?php echo CHtml::link('Cancel', 'javascript:void(0)', array('class' => 'btn btn-default mr5','onclick')) ?>
    </div>
<?php $this->endWidget(); ?>

