<div>
    <div class="text04 pull-left"><span class="dark-blue">Contact Details</span></div>
    <div class="edit">
        <?php if($type != 'view') {?>
            <a data-toggle="collapse" data-parent="#accordion" href="#editcontact">
                <i class="fa fa-plus-square mr5"></i>Edit
            </a>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</div>
<div class="cert mb20">
    <div class="text03">
        <span class="dark-blue">Email :</span>   <span id="email-detail"><?php echo $user->email;?></span>
    </div>	
    <div class="text03">
        <span class="dark-blue">Website : </span>   <span id="website-detail"><?php echo $user->webpage;?></span>
    </div>
    <div class="text03">
        <span class="dark-blue">Mobile : </span>   <span id="cell-detail"><?php echo $user->mobile;?></span>
    </div>
</div>
<?php if($type != 'view') {?>
    <div id="editcontact" class="panel-collapse collapse panel">
        <div class="panel-body">
            <div id="contact-success"></div>
            <?php echo $this->renderPartial('_contact-form',compact('user'));?>
        </div>
    </div>
<?php }?>