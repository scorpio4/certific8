<div>
    <h4>Please close this window and redirect the page.</h4>
    <button class="btn btn-info text-center" onclick="closeWin();">close</button>
</div>
<script type="text/javascript">
    function RefreshParent() {
        if (window.opener != null && !window.opener.closed) {
            window.opener.location.href = "<?php echo Yii::app()->createAbsoluteUrl('/listprofile');?>";
        }
    }
    window.onunload  = RefreshParent; 
    window.onbeforeunload = RefreshParent;
    closeWin();
    function closeWin()
    {
        window.close();  
    }
</script>
