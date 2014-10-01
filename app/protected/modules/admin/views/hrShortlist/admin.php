<?php

/* @var $this HrShortlistController */
/* @var $model HrShortlist */

$this->breadcrumbs = array(
    'Hr Shortlists' => array('admin'),
    'Manage',
);

$this->menu = array(
    //array('label' => 'List HrShortlist', 'url' => array('index')),
    array('label' => 'Create HrShortlist', 'url' => array('create'), 'linkOptions' => array('class' => 'btn btn-primary')),
);

$tfooterstart = '<div class="panel-footer">';
$tfooterend = '</div>';
$sumstart = '<div class="col-sm-4 mt5"><small class="text-muted inline m-t-sm m-b-sm">';
$sumend = '</small></div>';

Yii::app()->clientScript->registerScript('search', "   
    $('body').on('keyup','.filters > td > input', function() {
        $('#hr-shortlist-grid').yiiGridView('update', {
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
    'id' => 'hr-shortlist-grid',
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
            'name' => 'hr.org.legal_name',
        ),
        'user.username',
        'name',
        'client',
        'max_results',
        /*
          'geo_territory',
          'ipv4address',
          'is_archived',
          'create_date',
          'expire_date',
         */
        array(
            'class' => 'CButtonColumn',
            'template' => '{view} {update} {skill} {comment} {candidate} {delete}',
            'headerHtmlOptions' => array('width' => '25%'),
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
                'skill' => array(
                    'label' => '<i class="fa fa-star"></i>',
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-blue btn-sm', 'title' => 'Shortlist Skill'),
                    'url' => 'Yii::app()->createUrl("admin/hrShortlistSkill/admin", array("id"=>$data->id))',
                ),
                'comment' => array(
                    'label' => '<i class="fa fa-star"></i>',
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-blue btn-sm', 'title' => 'Comment'),
                    'url' => 'Yii::app()->createUrl("admin/hrComment/admin", array("id"=>$data->id))',
                ),
                'candidate' => array(
                    'label' => '<i class="fa fa-graduation-cap"></i>',
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-blue btn-sm', 'title' => 'Candidate'),
                    'url' => 'Yii::app()->createUrl("admin/hrCandidate/admin", array("id"=>$data->id))',
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

