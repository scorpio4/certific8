<div class="social view third-effect" id="social-id:<?php echo $data->id ?>">
    <div>
        <img src="<?php echo $data->social->small_logo_url;?>">
        <?php 
            $url = $data->social->url_template;
            $url = str_replace('{username}', $data->username, $url);
        ?>
            <div class="mask">
                <?php if($type == 'view') {?>
                <a href="<?php echo $url;?>" class="info-4" title="View" target="_blank">View</a>
                <?php } else {?>
                    <a href="<?php echo $url;?>" class="info-4" title="View" target="_blank">View</a>
                    <a class="info" href="javascript:void(0)" onclick="editData('social',<?php echo $data->id;?>)" title="Edit">Edit</a>
                    <a href="javascript:void(0)"  onclick="deleteData('social',<?php echo $data->id;?>,1)" class="info-2" title="Delete">Delete</a>
                    <a href="javascript:void(0)" class="info-3 drag-states" title="Drag">Drag</a>
                <?php }?>
            </div>
    </div>
</div>