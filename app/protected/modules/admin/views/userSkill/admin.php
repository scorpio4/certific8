<?php
/* @var $this UserSkillController */
/* @var $model UserSkill */

$this->breadcrumbs = array(
    'User'=>array('user/admin'),
    'User Skills'=>array('admin','id'=>$_GET['id']),
    'Manage',
);

$this->menu = array(
    array('label' => 'List UserSkill', 'url' => array('index')),
    array('label' => 'Create UserSkill', 'url' => array('create')),
);

$tfooterstart = '<footer class="panel-footer"><div class="row">';
$tfooterend = '</div></footer>';
$sumstart = '<div class="col-sm-4 text-center"><small class="text-muted inline m-t-sm m-b-sm">';
$sumend = '</small></div>';
?>
<div class="panel">
    <div class="panel-heading panel-head">User Skills</div>
    <div class="panel-body">
        <section class="panel panel-default">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'user-skill-grid',
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
                    'id',
                    //'user_id',
                    array(
                        'header'=>'Skill',
                        'name'=>'skill.title',
                    ),
                    array(
                        'header'=>'Trainer',
                        'name'=>'trainer.org.legal_name',
                    ),
                    'award_number',
                    'award_rank',
                    /*
                      'award_date',
                      'expiry_date',
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
