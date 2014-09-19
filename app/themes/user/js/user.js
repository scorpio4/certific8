/*User custom functions*/

$(document).ready(function(){
 
});
function changeForm(type) {
    $.ajax({
            type:"POST",
            beforeSend:function(){$("body").undelegate("#"+type+"btn","click");},
            url: baseUrl+'/user/user/changeFrom',
            data:{'type':type},
            success:function(rsponse) {
                        if(rsponse != '') {
                            
                            $('#form-type').html(rsponse);
                        }
                    }
    });
}






