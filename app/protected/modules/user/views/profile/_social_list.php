<div class="social view third-effect">
    <div>
        <img src="<?php echo $data->social->small_logo_url;?>">
        <div class="mask">
            <a class="info" href="javascript:void(0)" onclick="editData('social',<?php echo $data->id;?>)">Edit</a>
            <a href="javascript:void(0)"  onclick="deleteData('social',<?php echo $data->id;?>,1)" class="info-2">Delete</a>
            <a href="#" class="info-3">drag</a>
        </div>
    </div>
</div>