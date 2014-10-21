/************************************************************************
*************************************************************************
@Name :       	QapTcha - jQuery Plugin
@Revison :    	4.1
@Date : 		07/03/2012  - dd/mm/YYYY
@Author:     	 ALPIXEL Agency - (www.myjqueryplugins.com - www.alpixel.fr) 
@License :		 Open Source - MIT License : http://www.opensource.org/licenses/mit-license.php

Modified by Vault of Pixels (vaultofpixels.com) 04/03/2012
 
**************************************************************************
*************************************************************************/
jQuery.QapTcha = {
	build : function(options)
	{
        var defaults = {
			disabledSubmit : true,
			autoRevert : true,
			PHPfile : 'resources/php/qaptcha.php',
			autoSubmit : false
        };   
		
		if(this.length>0)
		return jQuery(this).each(function(i) {
			/** Vars **/
			var 
				opts = $.extend(defaults, options),      
				$this = $(this),
				form = $('form').has($this),
				statusError = jQuery('<div>',{'class':'status-icon error'}),
				statusSuccess = jQuery('<div>',{'class':'status-icon success'}),
				statusText = jQuery('<div>',{'class':'status-text', 'text': 'Email was sent successfully'}),
				bgSlider = jQuery('<div>',{'class':'background clearfix'}),
				Slider = jQuery('<div>',{'class':'handle'}),
				inputQapTcha = jQuery('<input>',{name:generatePass(32),value:generatePass(7),type:'hidden'});
			
			/** Disabled submit button **/
			if(opts.disabledSubmit) form.find('input[type=\'submit\']').attr('disabled','disabled');
			
			/** Construct DOM **/
			statusError.appendTo($this);
			statusSuccess.appendTo($this);
			statusText.appendTo($this);
			bgSlider.appendTo($this);
			inputQapTcha.appendTo($this);
			Slider.appendTo(bgSlider);
			$this.show();
			
			Slider.draggable({ 
				revert: function(){
					if(opts.autoRevert)
					{
						return true;
					}
				},
				containment: bgSlider,
				axis:'x',
				stop: function(event,ui){
					if(ui.position.left >= 151)
					{
						form.find('input, textarea').blur();
						// set the SESSION iQaptcha in PHP file
						$.post(opts.PHPfile,{
							action : 'qaptcha',
							qaptcha_key : inputQapTcha.attr('name')
						},
						function(data) {
							if(!data.error)
							{
								inputQapTcha.val('');
								if(opts.autoSubmit) form.trigger('submitForm');
							}
						},'json');
					}
				}
			});
			
			function generatePass(nb) {
		        var chars = 'azertyupqsdfghjkmwxcvbn23456789AZERTYUPQSDFGHJKMWXCVBN_-#@';
		        var pass = '';
		        for(i=0;i<nb;i++){
		            var wpos = Math.round(Math.random()*chars.length);
		            pass += chars.substring(wpos,wpos+1);
		        }
		        return pass;
		    }
			
		});
	}
}; jQuery.fn.QapTcha = jQuery.QapTcha.build;