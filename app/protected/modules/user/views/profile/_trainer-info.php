<div class="infopanel">
    <div class="infopanel-logo">
        <?php
            $logo = '';
            if (isset($trainer->org)) {
                $logo = $trainer->org->logo;
            }
            $path = Yii::getPathOfAlias('webroot') . '/uploads/logo/' .$logo;
            if(file_exists($path)) {
        ?>
                <img  src="<?php echo Yii::app()->baseUrl. '/uploads/logo/'.$logo; ?>">
            <?php } else {?>
                <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/organization.jpg" alt="">
            <?php }?>
    </div>
    <h4 class="light-blue text-bold">
        <?php  
            if(isset($trainer->org)) {
                echo $trainer->org->legal_name;
            }
        ?>
    </h4>
</div>