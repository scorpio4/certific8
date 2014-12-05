<div class="infopanel">
    <div class="infopanel-logo">
        <?php  
         $path = Yii::getPathOfAlias('webroot'). '/uploads/skill/'.$skill->logo;
            if(file_exists($path)) {?>
            <img  src="<?php echo Yii::app()->baseUrl. '/uploads/skill/'.$skill->logo; ?>">
        <?php } else {?>
            <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/certified.png" alt="">
        <?php }?>
    </div>
    <h4 class="light-blue text-bold"><?php echo $skill->title;?></h4>
    <p>
        <?php echo $skill->details;?>    
    </p>
    <?php 
        $brandName = '';
        $brandDescription = '';
        if(isset($skill->provider->org)) {
            $brandName = $skill->provider->org->brand_name;
            $brandDescription = $skill->provider->org->brand_description;
        }
        $url = $skill->formatUrl($skill->webpage);
    ?>
    <p>
        <span class="dark-blue">Brand Name:</span> 
        <?php echo $brandName;?>    
    </p>
    <p>
        <span class="dark-blue">Brand Description:</span> 
        <?php echo $brandDescription;?>    
    </p>
    <p class="dark-blue"><a href="<?php echo $url;?>" target="_blank"><?php echo $skill->webpage;?></a></p>
</div>