@extends('master')
@section('page_css')
	{{ HTML::Style('css/pages/dashboard.css') }}
    {{ HTML::Style('css/pages/login.css') }}
@stop

@section('body')
	@yield('topbar')
	@yield('contents')
	
@stop

@section('page_scripts')
	{{ HTML::Script('js/jquery.flot.js') }} 
	{{ HTML::Script('js/jquery.flot.pie.js') }} 
	{{ HTML::Script('js/jquery.flot.orderBars.js') }} 
	{{ HTML::Script('js/jquery.flot.resize.js') }} 
	{{ HTML::Script('js/charts/bar.js') }} 

@stop   