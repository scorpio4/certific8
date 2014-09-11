<section class="breadcrumb-main">
    <div class="container">
        <div class="breadcrumb-navigation">
            <?php
                $url=Yii::app()->homeUrl;
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                    'tagName' => 'ul',
                    'separator' => '',
                    'activeLinkTemplate' => '<li class="bredcrumb-active"><a href="{url}">{label}</a></li>',
                    'inactiveLinkTemplate' => '<li>{label}</li>',
                    'homeLink' => '<li><a href="' .$url. '"><i class="fa fa-home"></i></a></li>',
                    'htmlOptions' => array('class' => ''),
                ));
            ?>
            <div class="c"></div>
        </div>
    </div>
</section>