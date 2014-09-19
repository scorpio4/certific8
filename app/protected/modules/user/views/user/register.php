<?php
/* @var $this UserController */
/* @var $model User */
?>
<div class="subscriber">
    <div class="subscriber-wrap">
        <h3> SIGN-UP TODAY - IT'S FREE</h3>
        <p>Don&#8217;t miss this early adopter offer.</p>
        <div id="formResult" class="success-msg"></div>
        <?php $this->renderPartial('_register', array('model'=>$model)); ?>
    </div>
</div>