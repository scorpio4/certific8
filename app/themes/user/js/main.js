$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';     
    
    //make username editable
    $('#username').editable({
        pk: $('#profile_id').val(),
        url:baseUrl+'/user/profile/saveEditable',
        validate: function(value) {
            sec = '';
            fst = '';
            if(value.firstName == '') { 
                fst = 'First name can not be blank.'; 
            }
            if(value.lastName == '') { 
                sec = 'Last name can not be blank.'; 
            }
            if(fst != '' && sec != '') {
                fst = 'First name and Last name can not be blank.'
            } else {
                fst = fst+''+sec;
            }
            return fst;
        },
        display: function(value) {
            if(!value) {
                return; 
            }
            $('#username-detail').html('<span class="dark-blue text01">'+value.firstName+'</span> '+
                                       '<span class="light-blue text01">'+value.lastName+'</span>');
        }         
    }); 
	//make designation editable
    $('#designation').editable({
        pk: $('#profile_id').val(),
        url: baseUrl + '/user/profile/saveEditable',
        validate: function(value) {
           if(value == '') { 
                return 'Designation can not be blank.'; 
            }
        },
        display: function(value, sourceData) {
            if (value) {
                $('#designation-detail').html(value);
            }
        }
    });
	
	//make phone editable
    $('#biodata').editable({
        pk: $('#profile_id').val(),
        url: baseUrl + '/user/profile/saveEditable',
        validate: function(value) {
            if (value == '') {
                return 'Biodata can not be blank.';
            }
        },
        display: function(value, sourceData) {
            if (value) {
                $('#biodata-detail').html(value);
            }
        }
    });

	//make phone editable
    $('#website').editable({
		 display: function(value, sourceData) {
			if(value) {
				$('#website-detail').html(value);
			}
		}
    });
	
});