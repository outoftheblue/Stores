<!doctype html>
<html>
<head>
</head>
<body>
	<div id="checkoutbody">
		<div class="icon"><img src="bag2.svg" width="15" height="15"/></div>
		<button style="margin:0px;padding:10px 50px 10px 50px;display:inline;float:right;" id="edit">
			<h6 style="margin:0px;">Edit Order</h6>
		</button>
		<h5 style="line-height:50px;">You have selected these items:</h5>
		<div class="checkoutbox">
			
		</div>
		<div class="checkouttotals">
			
		</div>
		
		<div class="captcha">
			<h3>Prove You are an Engineer (or just Human)</h3>
			<p>Provide the correct answer to this captcha to proceed. This lets us know you aren't a bot.</p>
			<p>Orrrr just click here for now...</p>
		</div>
		<!-- 
		<div class='checkoutbodyrest animated fadeInUp'>
			<div class='email'>
				<h3>Email</h3>
				<p>Provide your valid U of T email address. This gives us a way to contact you if necessary.</p>
				<input placeholder='Your Email Name' type='text' maxlength="30" required="required" name='email'/><h4>@mail.utoronto.ca</h4>
			</div>
			<div id='confirm'>
				<h2>Payment</h2>
				<p>Provide your valid credit card info.</p>
				<img width='406' height='386' alt='card' src='/images/ccanim.gif'>
				<p>Stores uses a secure connection. Your info is always kept as safe as can be.</p>
				<a href='/payment.html'>Confirm Order</a>
			</div>
		</div>
		-->
	</div>
	<script>
	$(document).ready(function(){
		$(".overlay").hide();
		$("#edit").click(function(event){<!--<img src='cross37.svg' width='50' height='50'/> <img src='negative3.svg' width='104' height='104'/>  <img src='add49.svg' width='104' height='104'/> -->
			event.preventDefault();
			$(".overlay").fadeToggle("fast");
		});
		for (i = 1; i <= cartnum; i++){ <!-- src='/images/" + itemimagefile + "' where the string itemimagefile=='item8.png' -->
			$(".checkoutbox").append("<div class='displaycard animated fadeIn'><div class='sticker quantity animated stay'><p class='animated bounceInRight'>" + cartnum + "</p></div><h3>Paper</h3><img src='/images/item8.png' width='200' height='200'/><p>best paper you will ever see, bruv.</p><div class='overlay'><a href='javascript:void(0)' onclick=''><div class='edit' id='top'></div></a><a href='javascript:void(0)' onclick=''><div class='edit' id ='middle'></div></a><a href='javascript:void(0)' onclick=''><div class='edit' id='bottom'></div></a></div></div>");
		}
		$(".checkouttotals").append("<h5>Your total cost is <div class='sticker cost'><p>$" + cartprice + "</p></div></h5>");
		
		$(".captcha").click(function(event){
			event.preventDefault();
			$("#checkoutbody").append("<div class='checkoutbodyrest animated fadeInUp'><div class='email'><h3>Email</h3><p>Provide your valid U of T email address. This gives us a way to contact you if necessary.</p><input placeholder='Your Email Name' type='text' maxlength='30' required='required' name='email'/><h4>@mail.utoronto.ca</h4></div><div id='confirm'><h2>Payment</h2><p>Provide your valid credit card info.</p><img width='406' height='386' alt='card' src='/images/ccanim.gif'><p>Stores uses a secure connection. Your info is always kept as safe as can be.</p><a href='/payment.html'>Confirm Order</a></div></div>");
		});
	});
	</script>
</body>
</html>