<?php
/* @var $this SocialController */
/* @var $model Social */

$this->breadcrumbs=array(
	'Socials'=>array('admin'),
	$model->title,
);

?>

<div class="panel">
    <div class="panel-heading panel-head">View Social #<?php echo $model->id; ?></div>
    <div class="panel-body">

<?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions'=>array('class'=>'table table-striped b-t b-light text-sm view-table'),
        'attributes'=>array(
		'id',
		'title',
		'website',
		'small_logo_url',
		'large_logo_url',
		'username_title',
		'url_template',
		'oauth_url',
        ),
)); ?>
    </div>
</div>