<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
		<title>@yield('title') - {{ config('app.name') }}</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link type="text/css" rel="stylesheet" href="/css/app.css"/>
	</head>

	<body>
		@include('layouts._header')

		@yield('content')

		@include('layouts._footer')

		<script src="/js/app.js"></script>
	</body>
</html>