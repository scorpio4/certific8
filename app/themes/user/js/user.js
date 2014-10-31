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
function successmsg(id,message) 
{
    $('#'+id).show();
    $('#'+id).html('<div class="alert alert-success alert-dismissable mt20">'+
                        '<button type=button class=close data-dismiss=alert aria-hidden=true>&times;</button>'+
                        '<div>'+message+'</div>'+
                   '</div>');
    setTimeout( function(){$('#'+id).hide();} , 4000);       
}






