<?php
/* @var $this ProfileController */
/* @var $model Profile */

$this->breadcrumbs = array(
    'Profiles' => array('admin'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Profile', 'url' => array('index')),
    array('label' => 'Create Profile', 'url' => array('create')),
);
$tfooterstart = '<footer class="panel-footer"><div class="row">';
$tfooterend = '</div></footer>';
$sumstart = '<div class="col-sm-4 text-center"><small class="text-muted inline m-t-sm m-b-sm">';
$sumend = '</small></div>';
?>
<div class="panel">
    <div class="panel-heading panel-head">Profiles</div>
    <div class="panel-body">
        <section class="panel panel-default">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'profile-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
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
                        'template'=>'{view} {update} {skill} {job} {delete}',
                        'headerHtmlOptions'=>array('width'=>'20%'),
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
                            'skill'=> array(
                                'label' => '<i class="fa fa-star"></i>',
                                'imageUrl' => false,
                                'options'=>array('class'=>'btn btn-blue btn-sm','title'=>'Profile Skill'),
                                'url'=>'Yii::app()->createUrl("admin/profileSkill/admin", array("id"=>$data->id))', 
                            ),
                            'job'=> array(
                                'label' => '<i class="fa fa-graduation-cap"></i>',
                                'imageUrl' => false,
                                'options'=>array('class'=>'btn btn-blue btn-sm','title'=>'Profile Job'),
                                'url'=>'Yii::app()->createUrl("admin/profileJob/admin", array("id"=>$data->id))', 
                            ),
                            'delete'=>array(
                                'label' => '<i class="fa fa-trash-o"></i>',
                                'imageUrl' => false,
                                'options'=>array('class'=>'btn btn-red btn-sm','title'=>'Delete'),
                            ),
                        ),
                    ),
                ),
            ));
            ?>
        </section>	
    </div>
</div>
