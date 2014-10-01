<?php
/* @var $this SocialController */
/* @var $model Social */

$this->breadcrumbs = array(
    'Socials' => array('admin'),
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
                            'website',
                            'small_logo_url',
                            'large_logo_url',
                            'username_title',
                            'url_template',
                            'oauth_url',
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>