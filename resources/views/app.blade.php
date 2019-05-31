<!DOCTYPE html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>snippet</title>
		<meta name="csrf-token" content="{{ csrf_token()}}">
		
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" crossorigin="anonymous">
		<style>

			.page-enter-active, .page-leave-active {
			  transition: opacity 1s, transform 1s;
			}
			.page-enter, .page-leave-to {
			  opacity: 0;
			  transform: translateX(-30%);
			}

		</style>
	</head>
	<body>
		{{-- <div id="loading-app" class="none"></div> --}}
		<div id="app"></div>

		<script src="{{ asset('js/app.js') }}" ></script>	
		
	</body>
</html>