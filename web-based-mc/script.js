function v(src) {
	$('#video').attr('src',src);
}

function css() {
	var cssLink = document.createElement("link") 
	cssLink.href = "style.css"; 
	cssLink .rel = "stylesheet"; 
	cssLink .type = "text/css"; 
	frames['video'].document.body.appendChild(cssLink);
}

$(function() {
	$('li span').click(function() {
		$(this).parent().children('ul').toggle();
	});
	$('a').click(function(e) {
		e.preventDefault();
		$('#video').attr('src',$('a').prop('href'));
	});
});