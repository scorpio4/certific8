/*User custom functions*/

$(document).ready(function() {

});
function changeForm(type) {
    $.ajax({
        type: "POST",
        beforeSend: function() {
            $("body").undelegate("#" + type + "btn", "click");
        },
        url: baseUrl + '/user/user/changeFrom',
        data: {'type': type},
        success: function(rsponse) {
            if (rsponse != '') {
                $('#form-type').html(rsponse);
                $('#' + type + '-tab').addClass('active');
            }
        }
    });
}
function successmsg(id, message)
{
    $('#' + id).show();
    $('#' + id).html('<div class="alert alert-success alert-dismissable mt20">' +
            '<button type=button class=close data-dismiss=alert aria-hidden=true>&times;</button>' +
            '<div>' + message + '</div>' +
            '</div>');
    setTimeout(function() {
        $('#' + id).hide();
    }, 4000);
}
function cancelbtn(id)
{
    $(".errorMessage").hide();
    $("#" + id + "-success").html("");
    $("#edit" + id).collapse('toggle');
    if(id == 'jobs') {
        toggleEndDate();
    } else if(id == 'skill') {
        setDefaultSelect2("",""); 
    }
    return false;
}

function editData(type, id)
{
    $.ajax({
        url: baseUrl + '/user/profile/editData',
        dataType: 'json',
        type: 'post',
        data: {'id': id, 'type': type},
        success: function(data) {
            if (data) {
                if (type == 'skill') {
                    getBasicInfo('trainer',data.UserSkill_trainer_id);
                    getBasicInfo('skill',data.UserSkill_skill_id);
                }
                $.each(data, function(key, val) {
                    $("#" + type + "-form #" + key).val(val);
                    if(key == 'ProfileJob_isCurrent') {
                        $( "#" + type + "-form #" + key).prop( "checked", true );
                        toggleEndDate();
                    }
                });
                if (type == 'skill') {
                    var options = data.title_data;
                    setDefaultSelect2(id,options);
                }
                $("#edit" + type).collapse('show');
            }
        }
    });
}
function format(item) {
    return item.title;
}
function setDefaultSelect2(id,options)
{
    $("#UserSkill_trainer_id").select2();
    /*$("#UserSkill_skill_id").select2({
        minimumInputLength: 1,
        triggerChange: true,
        allowClear: true,
        id: function(data) {
            return data.id;
        },
        ajax: {
            url: baseUrl + '/user/profile/searchSkill',
            quietMillis: 1500,
            dataType: 'json',
            cache: true,
            data: function(term, page) {
                return {
                    title: term,
                };
            },
            results: function(data, page) {
                return {
                    results: options
                };
            }
        },
        initSelection: function(element, callback) {
            var id = element.val();
            var data = options;
            callback(data[0]);
        },
        formatResult: function(data) {
            return "<div class='select2-user-result'>" + data.title + "</div>";
        },
        formatSelection: function(data) {
            if(data) {
                if(typeof(data.title) != "undefined" && variable !== null) {
                    return data.title;
                }
            }
        }
    }).select2('val', [id]);*/
    $("#UserSkill_skill_id").select2({
        minimumInputLength: 1,
        triggerChange: true,
        allowClear: true,
        id: function (data) {
            return data.id;
        },
        ajax: {
            url: baseUrl+'/user/profile/searchSkill',
            quietMillis: 1500,
            dataType: 'json',
            cache: true,
            data: function (term, page) {
                return {
                    title: term, 
                };
            },
            results: function (data, page) {
                return {
                    results: data.results 
                };
            }
        },
        initSelection: function(element, callback) {
            var id = element.val();
            if(options) {
                var data = options;
                callback(data[0]);
            }
        },
        formatResult: function (data) {
            return "<div class='select2-user-result'>\n\
                       <div class='pull-left'>" + data.logo + "</div>\n\
                       <div class='pull-left width-frop-text'>" + data.title + "</div>\n\
                        <div class='clearfix'></div>\n\
                    </div>";
        },
        formatSelection: function (data) {
            return data.title;
        }
    }).select2('val', [id]);
}
function deleteData(type, id, islist)
{
    var msg = '';
    if (type == 'jobs') {
        msg = "Do you want to delete job?";
    } else if (type == 'social') {
        msg = "Do you want to delete social profile?";
    } else {
        msg = "Do you want to delete " + type + "?";
    }
    if (confirm(msg)) {
        $.ajax({
            url: baseUrl + '/user/profile/deleteData',
            type: 'post',
            data: {'id': id, 'type': type},
            success: function(message) {
                if (message) {
                    successmsg(type + "-msgs", message);
                    if (islist == 1) {
                        $.fn.yiiListView.update(type + "-lists");
                    }
                }
            }
        });
    }
}

function setDefault(id)
{
    $("#" + id + "-form")[0].reset();
    //$('[id$="-success"]').html('');
    $('.hidden-values').val('');
    cancelbtn(id);
}

function sortList(type, sort)
{

    $("#" + type + "-lists " + sort).sortable({
        handle: ".drag-states",
        delay: 10,
        cursorAt: {bottom: 2},
        distance: 5,
        helper: "clone",
        update: function(event, ui) {
            var sortedlist = $(this).sortable('toArray').toString();
            $.ajax({
                url: baseUrl + '/user/profile/changeOrder',
                'type': "POST",
                data: {'order': sortedlist, 'type': type},
                success: function(html) {

                }

            });
        }
    }).disableSelection();
}

function deleteProfilePage(id)
{
    if (confirm("Do you want to delete profile?")) {
        $.ajax({
            url: baseUrl + '/user/profile/delete',
            dataType: 'json',
            type: 'post',
            data: {'id': id, 'ajax': 'delete'},
            success: function(data) {
                if (data.status == 'success') {
                    window.location.href = baseUrl + '/listprofile';
                }
            }
        });
    }
}
function setPreview(id,templte)
{
    if (templte) {
        var popupAttr = 'width=1200,height=700,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=20,top=20';
        var url = baseUrl + '/vcard/'+ templte +'/profile/' + id;
        window.open(url,'vcard',popupAttr);
    }
}
function getBasicInfo(type,id)
{
    $.ajax({
        type: "POST",
        beforeSend: function() {
            $("#" + type + "-infopanel").html('');
        },
        url: baseUrl + '/user/profile/getBasicInfo',
        data: {'type': type,'id':id},
        dataType: 'json',
        success: function(rsponse) {
            $("#" + type + "-infopanel").html(rsponse);
        }
    }); 
}




