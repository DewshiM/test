@extends('layouts.app')
@section('head')
	@parent

		<!-- Styles -->
<link href="{{URL::asset('css/auction/css.css')}}" rel="stylesheet">

@endsection
@section('content')


	<div class="container">
<div class="row">    
<h2>Welcome to Auction</h2>    
<ul class="ds-btn">     
<br><br>          
   <center>

<li>
   <a class="btn btn-lg btn-primary" href="{{url('startAuction')}}">
<i class="glyphicon glyphicon-user pull-left"></i>
<span>Start Auction<br><small>Lorem ipsum dolor</small></span></a> 
</li>

<li>
<a class="btn btn-lg btn-success "  href="{{url('displayRunningAuc')}}">
<i class="glyphicon glyphicon-dashboard pull-left"></i>
<span>Running Auctions<br><small>Lorem ipsum dolor</small></span>
</a>        
 </li>

<li>             
<a class="btn btn-lg btn-danger" href="http://dotstrap.com/">         
<i class="glyphicon glyphicon-tasks pull-left"></i>
<span>End Auctions<br><small>Lorem ipsum dolor</small></span></a>         
</li>        
	</center>
</ul>	
</div>
</div>

@endsection