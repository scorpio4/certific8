<?php foreach ($templates as $template) {?>
    <li>
        <p><?php echo $template->template_name;?></p>
        <div class="view third-effect">
            <?php 
                $name = $template->template_name;
                $name = str_replace(' ', '', $name);
                $name = strtolower($name);
            ?>
            <img src="<?php echo Yii::app()->theme->baseUrl.'/images/'.$name.'.jpg';?>">
            <div class="mask mask-he">
                <div class="auto-arrange">
                <?php if($type == 'view') {?>
                <a href="javascript:void(0)" class="info-save btn-info btn" title="Preview" target="_blank" onclick="setPreview(<?php echo $profileId;?>,<?php echo $template->id;?>)">Preview</a>
                <?php } else {?>
                    <a href="javascript:void(0)" class="info-save btn-info btn" title="Preview" target="_blank" onclick="setPreview(<?php echo $profileId;?>,<?php echo $template->id;?>)">Preview</a>
                    <a class="info-preview btn-success btn" href="javascript:void(0)" onclick="saveTemplate(<?php echo $profileId;?>,<?php echo $template->id;?>)" title="Select">Select</a>
                <?php }?>
                </div>
            </div>
        </div>
    </li>
<?php }?>