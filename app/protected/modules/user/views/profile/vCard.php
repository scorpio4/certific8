<?php 
    echo $mustache->render('vcard',compact('profile','user','path','vcardId','mustache','skills','socialProfiles','isLabel','jobs'));
    if($vcardId == 3) {
        $cs = Yii::app()->clientScript;
        $path = "http://maps.google.com/maps/api/js?sensor=true";
        $cs->registerScriptFile($path, CClientScript::POS_HEAD);
    }
?>
<script type="text/javascript">
function downloadVcf()
{
    window.location.href = baseUrl+'/user/profile/downloadVcf/id/'+<?php echo $profile->id;?>;
}
</script>
