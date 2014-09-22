<?php
$this->widget('zii.widgets.CMenu', array(
    'id' => 'submenu-home',
    'activeCssClass' => 'active',
    'htmlOptions' => array('class' =>'admin-submenu'),
    'items' => $this->menu,
));
?>