<div>
    <div class="text04 pull-left"><span class="dark-blue">Contact Details</span></div>
    <div class="edit">
        <?php if($type != 'view') {?>
        <a data-toggle="collapse" data-parent="#accordion" href="#editcontact" title="Edit Contact">
                <i class="fa fa-plus-square mr5"></i>Edit
            </a>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</div>
<div class="mb20 job-details">
    <ul class="portfolioContainer">
        <li>
            <p>
                <span class="dark-blue">Email :</span>   <span id="email-detail"><?php echo $user->email;?></span>
            </p>
        </li>
        <li>
            <p>
                <span class="dark-blue">Website : </span>   <span><?php echo CHtml::link($user->webpage,$user->webpage,array('id'=>'website-detail','target'=>'_blank'));?></span>
            </p>
        </li>
        <li>
            <p> 
                <span class="dark-blue">Mobile : </span>   <span id="cell-detail"><?php echo $user->mobile;?></span>
            </p>
        </li>
    </ul>
</div>
<?php if($type != 'view') {?>
    <div id="editcontact" class="panel-collapse collapse panel">
        <div class="panel-body">
            <div id="contact-success"></div>
            <?php echo $this->renderPartial('_contact-form',compact('user'));?>
        </div>
    </div>
<?php }?>