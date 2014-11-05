<?php
/* @var $this UserController */
/* @var $model User */
?>
<div class="tab-pane active" id="register-tab">
    <div class="register-form animated fadeInRight">
        <div class="text04">SIGN-UP TODAY - <span class="color-white">IT'S FREE</span></div>
        <div class="text05">Give your career a boost in a few minutes.</div>
        <div id="formResult" class="success-msg"></div>
        <div class="form-main">
            <?php $this->renderPartial('_register', array('model' => $model)); ?>
        </div>
    </div>
</div>
