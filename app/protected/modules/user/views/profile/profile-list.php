<?php
/* @var $this ProfileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Profiles',
);

$this->menu = array(
    array('label' => '<i class="fa fa-plus"></i>', 'url' => array('/profile'), 'linkOptions' => array('class' => 'btn btn-primary', 'title' => 'Add')),
);
?>
<?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$profile->search($id),
        'itemView'=>'_profile-list',
        'itemsTagName'=>'ul',
        'summaryText'=>'',
        'enablePagination'=>false,
        'itemsCssClass'=>'grid cs-style-7'
    ));
?>
