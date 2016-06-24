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

		<div align="center"> 
			<div>Pedix Medical Care </div>
			<div>3BB Building 76 Kamuning Road,
				<br>Brgy.Kamuning,Quezon City 1103,Philippines</br>
			</div>
		</div>
<br>
<br>
<hr>
<div id="info">
<table width="100%">
	<tr>
		<td>
			<b> Patient Name:</b>{{$prof->user->firstname.' '.$prof->user->lastname}}
		</td>
		<td align="right">
			<b>Prescription Date:</b>{{date('F d,Y', strtotime(Carbon\Carbon::now()))}}
		</td>
	</tr>
</table>
</div>
<hr>
<section id="body"> 
	<br>
	<br>
	<div>
		<img src="img/rx.png">
		<div style="margin-left: 200px; padding-top:-5px;">
		@foreach ($presc_table as $pre)
			<table>
					<tr>
						<td><b>{{$pre['prescription']['medicine_name']}}</b></td>
					</tr>
					<tr>
						<td>{{$pre['quantity']}} Pieces</td>
					</tr>
					<tr>
						<td>{{$pre['sig']}}</td>
					</tr>
				
			</table>
			<br>
		@endforeach

		</div>
	</div>
</section>
<footer style="position: absolute; bottom: 20px">
		<table align="right">
			<tr>
				<td align="center">{{'Dr. '.Session::get('fname').' '.Session::get('lname')}}</td>
			</tr>
			<tr>
				<td align="center" style="border-top :1px solid black; ">Signature Over Printed Name</td>
			</tr>
		</table>
		<br>
	<div>
		<p>PTR No.: {{Session::get('ptr')}}</p>
		<p>License No.: {{Session::get('prc')}}</p>
		<p>S2 License No.: {{Session::get('license')}}</p>
	</div>
</footer>
</body>
</html>