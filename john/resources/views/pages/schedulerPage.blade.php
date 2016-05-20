@extends('layouts.masterLayout')

<style type="text/css">
	
html
	{
		font: 12px sans-serif;
	}
	
</style>


@section('title', 'Scheduler | Patient Files')
@section('content')



<button type="button" id="scrollButton">Scroll Scheduler</button>
<div id="scheduler"></div>

@stop