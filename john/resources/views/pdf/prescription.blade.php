<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Pedix Prescription</title>
</head>
<style type="text/css">
	body
	{
		border-bottom: 5px solid smokywhite;
		font-family: arial,helvetica;
	}
	img
	{
		height:100px;
		width:150px;
		float: right;
	}
	p,p1
	{
		display: inline;
	}
	p
	{
		padding-right: 350px;
	}
	p1
	{
		padding-right: 50px;
	}
	hr
	{
		border-bottom: 0.5px;
	}
	#info
	{
		padding:10px;
	}
	#body
	{
		height: 490px;
	}
</style>
<body>

		<div align="right"><span>{{date('F d, Y',strtotime(Carbon\Carbon::now()))}}</span></div>
		<br>
		<div align="center"> 
			<div>Pedix Medical Care </div>
			<div>3BB Building 76 Kamuning Road,
				<br>Brgy.Kamuning,Quezon City 1103,Philippines</br>
			</div>
			<div>(02)414 4014 </div>
		</div>
<br>
<br>
<div><h1>Pedix Prescription</h1></div>
		
<hr>
<div id="info">
<div style="padding-bottom: 5px;">
<p>Patient Name     :</p>
</div>
<div>
<p2>Address     :</p2>
</div>
</div>
<hr>
<section id="body"> 
	<br>
	<br>
	<div><img src="img/rx.png"></div>
</section>
<footer>
		<table align="right">
			<tr>
				<td align="center">{{'Dr. '.Session::get('fname').' '.Session::get('lname')}}</td>
			</tr>
			<tr>
				<td align="center" style="border-top :1px solid black; ">Signature Over Printed Name</td>
			</tr>
		</table>
		<br>
		<br>
	<div>
		<p>PTR No.: {{Session::get('ptr')}}</p>
		<p>License No.: {{Session::get('prc')}}</p>
		<p>S2 License No.: {{Session::get('license')}}</p>
	</div>
</footer>
</body>
</html>