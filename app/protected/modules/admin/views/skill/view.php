<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs=array(
	'Skills'=>array('admin'),
	$model->title,
);

?>

<div class="panel">
    <div class="panel-heading panel-head">View Skill #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'title',
		'details',
		'keywords',
                array(
                    'label'=>'Logo',
                    'type'=>'raw',
                    'value'=> CHtml::image(Yii::app()->request->baseUrl.'/uploads/skill/'.$model->logo,'',array('style'=>'width:200px;')),
                    'visible'=>$model->logo!="none.png"
                ),
		'webpage',
		'certified_by',
                array(
                    'label'=>'Provider',
                    'name'=>'provider.org.legal_name'
                ),
                array(
                    'label'=>'Skill Discipline',
                    'name'=>'skillDiscipline.name'
                ),
		'level',
		'start_date',
		'end_date',
		'status',
        ),
)); ?>
    </div>
</div>