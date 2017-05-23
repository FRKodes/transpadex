<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/')}}"><img src="images/logo-transpadex.svg" alt="logo transpadex"></a>
			<div class="call-us hidden-sm hidden-md hidden-lg">
				<span class="icon-telefono red"></span>
				<a href="tel:+52018003476036" class="red call-us-header">Llámanos</a>
			</div>
		</div>
	
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="@if (Request::is('/')) active @endif"><a href="{{ url('/') }}">Inicio</a></li>
				<li class="@if (Request::is('servicios')) active @endif"><a href="{{ url('servicios') }}">Servicios</a></li>
				<li class="@if (Request::is('quienes-somos')) active @endif"><a href="{{ url('quienes-somos') }}">Quienes Somos</a></li>
				<li class="@if (Request::is('flotilla')) active @endif"><a href="{{ url('flotilla') }}">Flotilla</a></li>
				<li class="@if (Request::is('clientes')) active @endif"><a href="{{ url('clientes') }}">Clientes</a></li>
				{{-- <li class="@if (Request::is('contacto')) active @endif"><a href="{{ url('contacto') }}">Contacto</a></li> --}}
				<li class="@if (Request::is('sucursales')) active @endif"><a href="{{ url('sucursales') }}">Sucursales</a></li>
				<li ><a class="login-btn white" target="_blank" href="http://transpadex.no-ip.org/clientes/">Login</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
	<div class="container-fluid hidden-xs call-us-big">
		<div class="container text-right"><span class="icon-telefono"></span> &nbsp;01 800 347 60 36</div>
	</div>
</nav>