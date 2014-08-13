<?php 

   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/php/mpdf/mpdf.php";
   require_once($path);

   /*require_once('/php/mpdf/mpdf.php');*/

$mpdf = new mPDF('utf-8', 'A4');
$mpdf->SetTitle('Stores946853');

$mpdf->WriteHTML('
	<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1010">
	<title>Stores Prototype - Content via Ajax - Abdul Ali</title>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/receiptstyle.css">
</head>
<body>
	<div id="header">
		<div id="topbar">
			<h1>Stores</h1>
		</div> 
		<nav>
			<ul>
				<li>
					<p>Receipt - Download and save immediately</p>
				</li>
			</ul>
		</nav>
	</div>
	<div id="page">

	<table style="width:1000px;">
		<thead>
			<tr style="background:#b8b8b8;">
				<th><p>Order Number</p></th>
				<th><p>Credit Number</p></th>
				<th><p>Time Stamp</p></th>
			</tr>
		</thead>
		</tbody>
			<tr>
				<td><p>946853</p></td>
				<td><p>46XXXXXXXXX4753</p></td>
				<td><p>2014-11-12 17:56:21</p></td>
			</tr>
		</tbody>
	</table>
	<br></br>
		<table style="width:1000px;">
			<thead>
				<tr style="background:#b8b8b8;">
				  <th><p>Item</p></th>
				  <th><p>Quantity</p></th> 
				  <th><p>Price</p></th>
				</tr>
			</thead>
			<tbody>
				<tr>
				  <td><p>Green Book</p></td>
				  <td><p>2</p></td> 
				  <td><p>198</p></td>
				</tr>
				<tr>
				  <td><p>Pocket Lint</p></td>
				  <td><p>1</p></td> 
				  <td><p>450</p></td>
				</tr>
				<tr>
				  <td><p>Orange Shirt</p></td>
				  <td><p>3</p></td> 
				  <td><p>1</p></td>
				</tr>
				<tr>
				  <td><p>Cool Jacket</p></td>
				  <td><p>1</p></td> 
				  <td><p>113</p></td>
				</tr>
			</tbody>
			<tfoot>
				<tr style="font-weight:bold;">
				  <th><p>Total</p></th>
				  <th><p></p></th>
				  <th><p>$932</p></th>
				</tr>
			</tfoot>
		</table>
		<br></br>
		<p><strong>Instructions:</strong> You must print or, better yet, take a full screen shot of this receipt, and bring it along with your credit card to Stores. 
		For your protection, you will not have access to this receipt again.</p>
		<p><strong>Disclaimer:</strong> You are required to pick-up your order within 10 days of making an order. 
		We cannot guarantee the availability of your items after that point.</p>
		<br></br>
		<p>FOR INTERNAL USE</p>
		<p>Pick-up at:______________________________		Signature:_____________________________</p> 
		<br></br>
		<div id="footerslogan"><p>Run by the students, for the students.</p></div>
		<div id="footerbar"><p style="color:white;">Engineering Stores</p></div>
	</div>
</body>
</html>',0);
$mpdf->Output();
exit;
?>