var winHandler = null;

$(function() {
	
	// START: Popup configuration.
	
	if($('#viewInPopup').length != 0 && $('input#viewInPopupUrl').length != 0 && $('input#viewInPopupUrl').val() )
	{
		$('#viewInPopup').click(function(e){
			e.preventDefault();
			
			if(winHandler != null) {
				winHandler.close();
			}
			
			winHandler = window.open($("input#viewInPopupUrl").val(),'name','scrollbars=1,height=500,width=600');
			winHandler.focus();
		});
	}
	
	// END: Popup configuration.
	
	
	// START: Pages ajax loader.

	if($('div#staticPageSubcategoryContent').length != 0 && $('div#staticPageMenu').length != 0) {
		$('div#staticPageMenu ul a').bind('click',function(e){
			e.preventDefault();
			var link = $(this);
			
			$.ajax({
				url: link.attr('href'),
				type: 'get',
				beforeSend: function() {
			    	this.spinner = initSpinner('staticPageSubcategoryContent');
			    },
				success: function(data) {
					$('div#staticPageSubcategoryContent').html(data);
					
					$('div#staticPageMenu ul a').removeClass('active');
					link.addClass('active');
				},
				complete: function(data) {
					this.spinner.stop();
				}
			});
		});
		
	}

	//END: Pages ajax loader.
	
});