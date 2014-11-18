<div>
    <div class="text04 pull-left"><span class="dark-blue">My</span><span class="light-blue"> Certifications</span></div>
    <div class="edit">
        <?php if($type != 'view') {?>
        <a  href="javascript:void(0)"  onclick="setDefault('skill')" title="Add Certification" class="btn btn-primary">
                <i class="fa fa-plus-square mr5"></i>Add
            </a>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</div>
<?php 
    if($type != 'view') {
        $emptext = '<div class="add-box"> <a  href="javascript:void(0)"  onclick=setDefault("skill") title="Add Certification"><i class="fa fa-plus-square mr5"></i>Add</a></div>';
    } else {
        $emptext = '';
    }
?>
<div class="cert mb20">
    <div id="skill-msgs"></div>
    <?php
        $this->widget('zii.widgets.CListView', array(
            'id'=>'skill-lists',
            'dataProvider' => ProfileSkill::model()->search($profileId),
            'itemView' => '/profile/_skill_list',
            'enablePagination' => false,
            'emptyText'=>$emptext,
            'itemsTagName'=>'ul',
            'afterAjaxUpdate'=>"function() {
                sortList('skill','ul');
            }",
            'itemsCssClass' => 'portfolioContainer',
            'template' => '{items}',
            'viewData'=>compact('type'),
        ));
    ?>
    <div class="clearfix"></div>
</div>
<?php if($type != 'view') {?>
    <div id="editskill" class="panel-collapse collapse">
        <div>
            <div id="skill-success"></div>
            <?php echo $this->renderPartial('/profile/_certificate-form',compact('userSkill','profileId'));?>
        </div>
    </div>
<?php }?>
<script type="text/javascript">
$(function() {
    sortList('skill','ul');
});
</script>
    