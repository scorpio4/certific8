<div class="user-submenu">
    <?php
    $this->widget('zii.widgets.CMenu', array(
        'id' => 'submenu-home',
        'encodeLabel'=>false,
        'activeCssClass' => 'active',
        'htmlOptions' => array('class' =>''),
        'items' => $this->menu,
    ));
    ?>
    <div class="clearfix"></div>
</div>