<?php
/* @var $this SocialController */
/* @var $model Social */

$this->breadcrumbs=array(
	'Socials'=>array('admin'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Social', 'url'=>array('index')),
	array('label'=>'Create Social', 'url'=>array('create'),'linkOptions'=>array('class'=>'btn btn-green btn-sm')),
);

$tfooterstart = '<footer class="panel-footer"><div class="row">'; 
$tfooterend = '</div></footer>';
$sumstart = '<div class="col-sm-4 text-center"><small class="text-muted inline m-t-sm m-b-sm">';
$sumend = '</small></div>';
?>
<div class="panel">
    <div class="panel-heading panel-head">Socials</div>
    <div class="panel-body">
        <section class="panel panel-default">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'social-grid',
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
		'website',
		'small_logo_url',
		'large_logo_url',
		'username_title',
		/*
		'url_template',
		'oauth_url',
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
