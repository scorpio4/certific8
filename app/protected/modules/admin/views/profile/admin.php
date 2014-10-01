<?php

/* @var $this ProfileController */
/* @var $model Profile */

$this->breadcrumbs = array(
    'Profiles' => array('admin'),
    'Manage',
);

$this->menu = array(
    //array('label' => 'List Profile', 'url' => array('index')),
    array('label' => 'Create Profile', 'url' => array('create'), 'linkOptions' => array('class' => 'btn btn-primary')),
);
$tfooterstart = '<div class="panel-footer">';
$tfooterend = '</div>';
$sumstart = '<div class="col-sm-4 mt5"><small class="text-muted inline m-t-sm m-b-sm">';
$sumend = '</small></div>';

Yii::app()->clientScript->registerScript('search', "   
    $('body').on('keyup','.filters > td > input', function() {
        $('#profile-grid').yiiGridView('update', {
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
    'id' => 'profile-grid',
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
        'slugname',
        'full_name',
        'short_title',
        'short_bio',
        //'avatar',
        /*
          'template_id',
          'is_active',
          'is_public',
          'can_contact',
          'show_vouches',
          'min_salary',
          'user_id',
          'hr_id',
          'membership_id',
         */
        array(
            'class' => 'CButtonColumn',
            'template' => '{view} {update} {skill} {job} {delete}',
            'headerHtmlOptions' => array('width' => '20%'),
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
                    'options' => array('class' => 'btn btn-blue btn-sm', 'title' => 'Profile Skill'),
                    'url' => 'Yii::app()->createUrl("admin/profileSkill/admin", array("id"=>$data->id))',
                ),
                'job' => array(
                    'label' => '<i class="fa fa-graduation-cap"></i>',
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-blue btn-sm', 'title' => 'Profile Job'),
                    'url' => 'Yii::app()->createUrl("admin/profileJob/admin", array("id"=>$data->id))',
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

