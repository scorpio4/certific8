<div>
    <div class="text04 pull-left"><span class="dark-blue">My</span><span class="light-blue"> Certifications</span></div>
    <div class="edit">
        <a  href="javascript:void(0)"  onclick="setDefault('skill')">
            <i class="fa fa-plus-square mr5"></i>Add
        </a>
    </div>
    <div class="clearfix"></div>
</div>

<div class="cert mb20">
    <ul>
        <li class="third-effect view-2">
            <img src="images/cpms.jpg">
            <div class="mask">
                <a class="info" data-toggle="collapse" data-parent="#accordion" href="#addCertifications" style="top:56px !important">Edit</a>
                <a href="#" class="info-2" style="top:56px !important">Delete</a>
                <a href="#" class="info-3" style="top:56px !important">drag</a>
            </div>
        </li>
        <li class="third-effect view-2">
            <img src="images/MCSM.png">
            <div class="mask">
                <a class="info" data-toggle="collapse" data-parent="#accordion" href="#addCertifications" style="top:56px !important">Edit</a>
                <a href="#" class="info-2" style="top:56px !important">Delete</a>
                <a href="#" class="info-3" style="top:56px !important">drag</a>
            </div>
        </li>
        <li class="third-effect view-2">
            <img src="images/MCSA.png">
            <div class="mask">
                <a class="info" data-toggle="collapse" data-parent="#accordion" href="#addCertifications" style="top:56px !important">Edit</a>
                <a href="#" class="info-2" style="top:56px !important">Delete</a>
                <a href="#" class="info-3" style="top:56px !important">drag</a>
            </div>
        </li>
        <li class="third-effect view-2">
            <img src="images/MCSE.png">
            <div class="mask">
                <a class="info" data-toggle="collapse" data-parent="#accordion" href="#addCertifications" style="top:56px !important">Edit</a>
                <a href="#" class="info-2" style="top:56px !important">Delete</a>
                <a href="#" class="info-3" style="top:56px !important">drag</a>
            </div>
        </li>
        <li class="third-effect view-2">
            <img src="images/certified.png">
            <div class="mask">
                <a class="info" data-toggle="collapse" data-parent="#accordion" href="#addCertifications" style="top:56px !important">Edit</a>
                <a href="#" class="info-2" style="top:56px !important">Delete</a>
                <a href="#" class="info-3" style="top:56px !important">drag</a>
            </div>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
<div id="editskill" class="panel-collapse collapse panel">
    <div class="panel-body">
        <div id="skill-success"></div>
        <?php echo $this->renderPartial('_certificate-form',compact('userSkill','profileId'));?>
    </div>
</div>