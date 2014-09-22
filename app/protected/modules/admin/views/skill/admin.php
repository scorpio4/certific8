<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs=array(
	'Skills'=>array('admin'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Skill', 'url'=>array('index')),
	array('label'=>'Create Skill', 'url'=>array('create'),'linkOptions'=>array('class'=>'btn btn-green btn-sm')),
);

$tfooterstart = '<footer class="panel-footer"><div class="row">'; 
$tfooterend = '</div></footer>';
$sumstart = '<div class="col-sm-4 text-center"><small class="text-muted inline m-t-sm m-b-sm">';
$sumend = '</small></div>';
?>
<div class="panel">
    <div class="panel-heading panel-head">Skills</div>
    <div class="panel-body">
        <section class="panel panel-default">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'skill-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'itemsCssClass'=>'table table-striped b-t b-light text-sm',
        'pagerCssClass'=>'col-sm-4 text-right text-center-xs',
        'template'=>'<div class="table-responsive">{items}</div>'.$tfooterstart.$sumstart.'{summary}'.$sumend.'{pager}'.$tfooterend,
        'pager'=>array(
            'header'=> '',
            'cssFile'=>false,
            'selectedPageCssClass'=>'active',
            'hiddenPageCssClass'=>'disabled',
            'firstPageCssClass'=>'hidden',
            'lastPageCssClass'=>'hidden',
            'prevPageLabel'=>'<',
            'nextPageLabel'=>'>',
            'maxButtonCount'=>5,
            'htmlOptions' => array('class' =>'pagination pagination-sm m-t-none m-b-none')
        ),
	'columns'=>array(
		'id',
		'title',
		'details',
		'keywords',
		//'logo',
		'webpage',
		/*
		'certified_by',
		'provider_id',
		'skill_discipline_id',
		'level',
		'start_date',
		'end_date',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{view} {update} {delete}',
                        'buttons'=>array (
                            'view'=>array(
                                'label' => '<i class="fa fa-search"></i>',
                                'imageUrl' => false,
                                'options'=>array('class'=>'btn btn-green btn-sm','title'=>'View'),
                            ),
                            'update'=> array(
                                'label' => '<i class="fa fa-edit"></i>',
                                'imageUrl' => false,
                                'options'=>array('class'=>'btn btn-blue btn-sm','title'=>'Edit'),
                            ),
                            'delete'=>array(
                                'label' => '<i class="fa fa-trash-o"></i>',
                                'imageUrl' => false,
                                'options'=>array('class'=>'btn btn-red btn-sm','title'=>'Delete'),
                            ),
                        ),
		),
	),
)); ?>
        </section>	
    </div>
</div>
