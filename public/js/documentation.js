// Filled Text
$(document).ready(function() {
	$('.progress .filled').progressbar({
			display_text: 'fill'
	});
	$('#trigger-80').click(function() {
		$pb.attr('data-transitiongoal', 80).progressbar({
			display_text: 'center'
		});
	});

	var clipboard = new Clipboard('code');
		var clipboard = new Clipboard('textarea');
		$('.code').click(function () {
			$(this).attr('title', 'Copied').tooltip('fixTitle').tooltip('show'); 
		})
});