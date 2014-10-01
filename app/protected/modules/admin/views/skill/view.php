<?php
/* @var $this SkillController */
/* @var $model Skill */

$this->breadcrumbs = array(
    'Skills' => array('admin'),
    $model->title,
);
?>

<div class="panel-body">
    <div class="row">
        <div class="col-md-6">
            <div class="table-responsive">
                <div class="panel panel-default">

                    <?php
                    $this->widget('zii.widgets.CDetailView', array(
                        'data' => $model,
                        'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
                        'attributes' => array(
                            'title',
                            'details',
                            'keywords',
                            array(
                                'label' => 'Logo',
                                'type' => 'raw',
                                'value' => CHtml::image(Yii::app()->request->baseUrl . '/uploads/skill/' . $model->logo, '', array('style' => 'width:200px;')),
                                'visible' => $model->logo != "none.png"
                            ),
                            'webpage',
                            'certified_by',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <div class="panel panel-default">
                    <?php
                    $this->widget('zii.widgets.CDetailView', array(
                        'data' => $model,
                        'htmlOptions' => array('class' => 'table table-striped b-t b-light text-sm view-table'),
                        'attributes' => array(
                            array(
                                'label' => 'Provider',
                                'name' => 'provider.org.legal_name'
                            ),
                            array(
                                'label' => 'Skill Discipline',
                                'name' => 'skillDiscipline.name'
                            ),
                            'level',
                            'start_date',
                            'end_date',
                            'status',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>