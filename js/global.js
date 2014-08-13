$(document).ready(function() {
	/*
	$("#prefooterouter").addClass("animated");
	$('#prefooter').hover(
	  function(){
		$("#prefooterouter").switchClass("fadeInUp");
	  },
	)
				.click(
	  function(){
		$("#prefooterouter").switchClass("fadeInUp");
	  },
	);
	*/
	/*
	$("#prefooterinner").stop(true, false).animate({"opacity":"0"},0);
	$('#prefooter').hover(
	  function(){
		$("#prefooterouter").stop(true, false).animate({"top":"-28px"},0);
		$("#prefooterinner").stop(true, false).animate({"opacity":"1"},500);
	  },
	  function(){
	  $("#prefooterouter").stop(true, false).animate({"top":"262px"},0);
		$("#prefooterinner").stop(true, false).animate({"opacity":"0"},500);
	  }
	)
				.click(
	  function(){
		$("#prefooterouter").stop(true, false).animate({"top":"-28px"},500);
		$("#prefooterinner").stop(true, false).animate({"opacity":"1"},500);
	  },
	  function(){
	  $("#prefooterouter").stop(true, false).animate({"top":"262px"},500);
		$("#prefooterinner").stop(true, false).animate({"opacity":"0"},500);
	  }
	);*/
	
	if (location.pathname !== '/shop.html' && location.pathname !== '/shop2.html') {    
		$(".scrollable").scrollable({circular: true, mousewheel: true}).navigator().autoscroll({
			size: 1,
			interval: 3000,
			loop: true,
			speed: 500
		});
	}
	
	/*var windowLoc = $(location).attr('pathname'); //jquery format to get window.location.pathname
	switch(windowLoc){      
	  case "/index.html":
		$(".scrollable").scrollable({circular: true, mousewheel: true}).navigator().autoscroll({
			size: 1,
			interval: 3000,
			loop: true,
			speed: 500
	});
		break;
	  case "/about.html":
		$(".scrollable").scrollable({circular: true, mousewheel: true}).navigator().autoscroll({
			size: 1,
			interval: 3000,
			loop: true,
			speed: 500
	});
		break;
	}*/
	
	/*
	  $(".slider").click(function(){
		$("#vslider").velocity({left:800+'px'},{duration:100},{easing:"easein"}).delay( 800 );
		$("#vslider").velocity({left:2+'px'},{duration:100},{easing:"easein"}).delay( 800 );
	  });
	  $(".slider").click(function(){
		$("#aslider").animate({left:800+'px'},{duration:100},{easing:"easein"}).delay( 800 );
		$("#aslider").animate({left:2+'px'},{duration:100},{easing:"easein"}).delay( 800 );
	  });
	*/

	/*
	$(".testdiv").click(function(){	
		$("#one").velocity("callout.shake", 2000);
		$("#one").velocity("transition.slideDownOut");
		$("#one").velocity({left:800+'px'},{duration:100},{easing:"easein"}).delay( 800 );
		$("#one").velocity({left:2+'px'},{duration:100},{easing:"easein"}).delay( 800 );
	  });
	  $(".slider").click(function(){
		$("#aslider").animate({left:800+'px'},{duration:100},{easing:"easein"}).delay( 800 );
		$("#aslider").animate({left:2+'px'},{duration:100},{easing:"easein"}).delay( 800 );
	  });
	*/

	/*
	  $(function () {
		$("body").delegate('#tabs', 'click',function (e) {
			alert('mouseover');
			('.displaycard').fadeIn("slow");
		});
	});
	*/
});