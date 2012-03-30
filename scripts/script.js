var $url = window.location.href.toString();
var re = /^(http:\/\/\w*\.*(\w+\.\w+)\/.*)\/*/;
var matches = re.exec($url);

var $base_url = matches[0];
var $img_url = matches[1];
$(function(){
	$('#gallery').camera({
		height: 'auto',
		loader: 'bar',
		pagination: false,
		thumbnails: false,
		hover: false,
		opacityOnGrid: false,
		imagePath: $img_url,
		fx: 'random',
		barPosition: 'bottom'
	});
});