<?php
/* @var $this HrCommentController */
/* @var $model HrComment */

$this->breadcrumbs=array(
	'Hr Comments'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HrComment', 'url'=>array('index')),
	array('label'=>'Create HrComment', 'url'=>array('create')),
);

$tfooterstart = '<footer class="panel-footer"><div class="row">'; 
$tfooterend = '</div></footer>';
$sumstart = '<div class="col-sm-4 text-center"><small class="text-muted inline m-t-sm m-b-sm">';
$sumend = '</small></div>';
?>
<div class="panel">
    <div class="panel-heading panel-head">Hr Comments</div>
    <div class="panel-body">
        <section class="panel panel-default">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hr-comment-grid',
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
		'hr_shortlist_id',
		'hr_candidate_id',
		'user_id',
		'comment',
		'preference',
		/*
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