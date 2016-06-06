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
		height: 500px;
	}
</style>
<body>
		<img src="img/rx.png">
		<h1>Pedix Prescription</h1>
		<p align="right">{{date('F d, Y',strtotime(Carbon\Carbon::now()))}}</p>
<hr>
<div id="info">
<div style="padding-bottom: 5px;">
<p>Patient Name:</p>
<p1>Gender      :</p1>
<p1>Age         :</p1>
</div>
<div>
	<p2>Address     :</p2>
</div>
</div>
<hr>
<section id="body">
	
</section>
<footer>
	<div>
		<p>PTR No.: {{Session::get('ptr')}}</p>
		<p>License No.: {{Session::get('prc')}}</p>
		<p>S2 License No.: {{Session::get('license')}}</p>
	</div>
		<br>
	<div style="inline-block">
		<div><u>{{'Dr. '.Session::get('fname').' '.Session::get('lname')}}</u></div>
		<div><p>Signature Over Printed Name</p></div>
	</div>
</footer>
</body>
</html>