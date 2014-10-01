<?php

/* @var $this ProviderController */
/* @var $model Provider */

$this->breadcrumbs = array(
    'Providers' => array('admin'),
    'Manage',
);

$this->menu = array(
    //array('label'=>'List Provider', 'url'=>array('index')),
    array('label' => 'Create Provider', 'url' => array('create'), 'linkOptions' => array('class' => 'btn btn-primary')),
);

$tfooterstart = '<div class="panel-footer">';
$tfooterend = '</div>';
$sumstart = '<div class="col-sm-4 mt5"><small class="text-muted inline m-t-sm m-b-sm">';
$sumend = '</small></div>';

Yii::app()->clientScript->registerScript('search', "   
    $('body').on('keyup','.filters > td > input', function() {
        $('#provider-grid').yiiGridView('update', {
            data: $(this).serialize()  
        });
        return false; 
    });
    $('.table tbody tr').live('click', function(){
      if($(this).find('.updater').attr('href')){
        window.location.href = $(this).find('.updater').attr('href');
      }
    });
");
?>

<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'provider-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'itemsCssClass' => 'table table-primary table-striped m-b-n',
    'pagerCssClass' => 'pull-right padder',
    'template' => '<div class="table-responsive">{items}</div>' . $tfooterstart . $sumstart . '{summary}' . $sumend . '{pager}' . $tfooterend,
    'htmlOptions' => array('class' => ''),
    'pager' => array(
        'header' => '',
        'cssFile' => false,
        'selectedPageCssClass' => 'active',
        'hiddenPageCssClass' => 'disabled',
        'firstPageCssClass' => 'hidden',
        'lastPageCssClass' => 'hidden',
        'prevPageLabel' => '<',
        'nextPageLabel' => '>',
        'maxButtonCount' => 5,
        'htmlOptions' => array('class' => 'pagination pagination-metro nomargin')
    ),
    'columns' => array(
        //'id',
        array(
            'header' => 'Organization',
            'name' => 'org.legal_name'
        ),
        array(
            'header' => 'Membership',
            'name' => 'membership.name'
        ),
        'cert_website',
        'cert_email',
        //'description',
        /*
          'is_registered',
          'is_paid',
          'first_joined',
          'last_seen',
          'last_valdiated',
         */
        array(
            'class' => 'CButtonColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => array(
                'view' => array(
                    'label' => '<i class="fa fa-search"></i>',
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-green btn-sm', 'title' => 'View'),
                ),
                'update' => array(
                    'label' => '<i class="fa fa-edit"></i>',
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-blue btn-sm updater', 'title' => 'Edit'),
                ),
                'delete' => array(
                    'label' => '<i class="fa fa-trash-o"></i>',
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-red btn-sm', 'title' => 'Delete'),
                ),
            ),
        ),
    ),
));
?>

