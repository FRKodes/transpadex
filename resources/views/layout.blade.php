<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
		@include('partials.metas')
	</head>
	<body>
		<header>@include('partials.nav')</header>
		
		<section>
			@yield('content')
		</section>
		
		<footer>@include('partials.footer')</footer>
		@yield('scripts')
		<script src="/js/app.js"></script>
	</body>
</html>
