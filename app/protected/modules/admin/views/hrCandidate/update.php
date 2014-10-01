<?php
/* @var $this HrCandidateController */
/* @var $model HrCandidate */

$this->breadcrumbs = array(
    'Hr Shortlist' => array('hrShortlist/admin'),
    'Hr Candidates' => array('admin', 'id' => $model->hr_shortlist_id),
    $model->hrShortlist->name => array('view', 'id' => $model->id),
    'Update',
);
?>

<div class="panel-body">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>    
</div>



