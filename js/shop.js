var cartnum=4;
var cartprice=0;

$(document).ready(function() {
	if (location.pathname == '/shop.html') {    
	$(function() {
		$( "#tabs" ).tabs({
		  beforeLoad: function( event, ui ) {
			ui.jqXHR.error(function() {
			  ui.panel.html(
				"<p>Whoops! Problem loading these items. Try refreshing the page. " +
				"Let Stores know if this problem persists.</p>" );
			});
		  }
		});
	});
	}
	else if (location.pathname !== '/shop.html'){
	  $('#ajax-tab-container').easytabs({
		animate:false,
		cache:false
	  });
	  /*.bind('easytabs:before', function() {
    var $check == $('#checkouttab');
	if ($check) {
      cache:false
	}*/
	
	}
	$(".openitem").fancybox({ /*they use item dimensions +17px padding all way around 870 519*/
		maxWidth	: 853,
		maxHeight	: 507,
		fitToView	: false,
		width		: 853,
		height		: 507,
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	/*
	$(".fancybox-effects").fancybox({
		type       : 'ajax',
		ajax       : { cache: true },
		wrapCSS    : 'fancybox-custom'
	});
	*/
});