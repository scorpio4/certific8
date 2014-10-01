<?php
/* @var $this SocialController */
/* @var $model Social */

$this->breadcrumbs = array(
    'Socials' => array('admin'),
    $model->title => array('view', 'id' => $model->id),
    'Update',
);
?>

<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



