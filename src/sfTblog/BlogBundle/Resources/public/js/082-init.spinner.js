function initSpinner(elementId){
	var opts = {
			  lines: 14, // The number of lines to draw
			  length: 7, // The length of each line
			  width: 4, // The line thickness
			  radius: 10, // The radius of the inner circle
			  corners: 1, // Corner roundness (0..1)
			  rotate: 0, // The rotation offset
			  color: '#FF9900', // #rgb or #rrggbb
			  speed: 1, // Rounds per second
			  trail: 60, // Afterglow percentage
			  shadow: false, // Whether to render a shadow
			  hwaccel: false, // Whether to use hardware acceleration
			  className: 'spinner', // The CSS class to assign to the spinner
			  zIndex: 2e9, // The z-index (defaults to 2000000000)
			  top: 'auto', // Top position relative to parent in px
			  left: 'auto' // Left position relative to parent in px
			};
	target = document.getElementById(elementId);
	if(!target){
		var iframe = document.getElementById('nmbrowser');
		var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
		target = innerDoc.getElementById(elementId);
	}
	return new Spinner(opts).spin(target);
}