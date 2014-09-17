<?php
/* @var $this ProfileJobController */
/* @var $model ProfileJob */

$this->breadcrumbs = array(
    'Profile' => array('profile/admin'),
    'Profile Jobs' => array('admin', 'id' => $_GET['id']),
    'Manage',
);

$this->menu = array(
    array('label' => 'List ProfileJob', 'url' => array('index')),
    array('label' => 'Create ProfileJob', 'url' => array('create')),
);

$tfooterstart = '<footer class="panel-footer"><div class="row">';
$tfooterend = '</div></footer>';
$sumstart = '<div class="col-sm-4 text-center"><small class="text-muted inline m-t-sm m-b-sm">';
$sumend = '</small></div>';
?>
<div class="panel">
    <div class="panel-heading panel-head">Profile Jobs</div>
    <div class="panel-body">
        <section class="panel panel-default">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'profile-job-grid',
                'dataProvider' => $model->search(),
                //'filter' => $model,
                'itemsCssClass' => 'table table-striped b-t b-light text-sm',
                'pagerCssClass' => 'col-sm-4 text-right text-center-xs',
                'template' => '<div class="table-responsive">{items}</div>' . $tfooterstart . $sumstart . '{summary}' . $sumend . '{pager}' . $tfooterend,
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
                    'htmlOptions' => array('class' => 'pagination pagination-sm m-t-none m-b-none')
                ),
                'columns' => array(
                    array(
                        'header'=>'Organization',
                        'name'=>'org.legal_name'
                    ),
                    'job_title',
                    array(
                        'header'=>'HR',
                        'name'=>'hr.org.legal_name'
                    ),
                    'rating',
                    'comment',
                    /*
                      'start_date',
                      'end_date',
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
                                'options' => array('class' => 'btn btn-blue btn-sm', 'title' => 'Edit'),
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
        </section>	
    </div>
</div>
