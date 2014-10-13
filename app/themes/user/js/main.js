$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';     
    
    //make username editable
    $('#username').editable({
		 display: function(value, sourceData) {
			if(value) {
				$('#username-detail').html('<span class="dark-blue text01">'+value+'</span>');
			}
		}
    });
	
	//make designation editable
    $('#designation').editable({
		 display: function(value, sourceData) {
			if(value) {
				$('#designation-detail').html(value);
			}
		}
    });
	
	//make phone editable
    $('#phone').editable({
		 display: function(value, sourceData) {
			if(value) {
				$('#phone-detail').html(value);
			}
		}
    });
	//make cell editable
    $('#cell').editable({
		 display: function(value, sourceData) {
			if(value) {
				$('#cell-detail').html(value);
			}
		}
    });
	//make phone editable
    $('#email').editable({
		 display: function(value, sourceData) {
			if(value) {
				$('#email-detail').html(value);
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