var pagescroll;

$(function() {
	pagescroll = $('#wrapper').scrollTop();

	$('#wrapper').scroll(function() {
		console.log($('#wrapper').scrollTop());
	});

	$('#site-navigation li').click(function() {
		console.log($(this).find('ul'));
		
		$(this).find('ul').slideToggle();
	});
	
	$('.pre-heading').fitText(0.1, {
		minFontSize:	'48px',
		maxFontSize:	'256px'
	});
	
	var articlemargin = 48 + $('.pre').height();
	$('.article').css('margin-top', articlemargin + 'px');
});