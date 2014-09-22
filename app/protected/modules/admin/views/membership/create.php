<?php
/* @var $this MembershipController */
/* @var $model Membership */

$this->breadcrumbs=array(
	'Memberships'=>array('admin'),
	'Create',
);

?>
<div class="panel">
    <div class="panel-heading panel-head">Create Membership</div>
    <div class="panel-body">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>    
    </div>
</div>



