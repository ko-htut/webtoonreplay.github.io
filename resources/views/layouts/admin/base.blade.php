<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" content="{{ Setting::get('app.desc') }}">

		<title>
			@section('title')
			{{ Config::get('app.name') }}
			@show
		</title>

		<!-- Fonts -->
		<div id="css-main" style="display: none;">
			<link rel="stylesheet" type="text/css" href="{{ asset('css/lato.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
		</div>
	</head>
	<body>
		<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
			@include('layouts.admin.aside')
			@include('layouts.admin.sidebar')
			@include('layouts.admin.header')

			<main id="main-container">
				@section('content')
				@show
			</main>

			@include('layouts.admin.footer')
		</div>

		<div id="app"></div>
		
		<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/oneui.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('button[data-toggle="dropdown"]').dropdown();
				$(function(){
					App.initHelpers('slick');
				});
			});
		</script>

	</body>
</html>