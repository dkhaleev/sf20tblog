$(function() {
	if (window.opener) {
		if ((window.opener.location.href.indexOf('helptip') > -1) || (window.opener.location.href.indexOf('helptipauto') > -1)) {
			parentdoc = window.opener.document;
			uniqueidParams = $(parentdoc).find('form').attr('action').split('?uniqid=');
			uniqueid = uniqueidParams[1];
			$(parentdoc).find('#'+uniqueid+'_route').val(curroute);
			if($(parentdoc).find('#'+uniqueid+'_left_x') && $(parentdoc).find('#'+uniqueid+'_top_y')){
				$("#backendDND").show();
				parentdoc = window.opener.document;
				$("#backendDND").draggable({
					stop : function() {
						currentPosition = $(this).position();
						$(parentdoc).find('#'+uniqueid+'_left_x').val(currentPosition.left);
						$(parentdoc).find('#'+uniqueid+'_top_y').val(currentPosition.top);
					}
				});
			}
		}
	}
});