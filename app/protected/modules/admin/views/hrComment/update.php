<?php
/* @var $this HrCommentController */
/* @var $model HrComment */

$this->breadcrumbs = array(
    'Hr Shortlist' => array('hrShortlist/admin'),
    'Hr Comments' => array('admin', 'id' => $model->hr_shortlist_id),
    $model->hrShortlist->name => array('view', 'id' => $model->id),
    'Update',
);
?>
<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



