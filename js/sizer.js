function sizer(elem, h) {
	var window_height = window.innerHeight;
   var spacer_height = (window_height * h);
   $('.' + elem).css('min-height', spacer_height + 'px');
}
