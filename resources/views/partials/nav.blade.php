<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="images/logo-transpadex.svg" alt="logo transpadex"></a>
			<div class="call-us hidden-sm hidden-md hidden-lg">
				<span class="icon-telefono red"></span>
				<a href="#" class="red call-us-header">Llámanos</a>
			</div>
		</div>
	
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{ url('/') }}">Inicio</a></li>
				<li><a href="{{ url('servicios') }}">Servicios</a></li>
				<li><a href="{{ url('quienes-somos') }}">Quienes Somos</a></li>
				<li><a href="{{ url('flotillas') }}">Flotillas</a></li>
				<li><a href="{{ url('clientes') }}">Clientes</a></li>
				<li><a href="{{ url('contacto') }}">Contacto</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
	<div class="container-fluid hidden-xs call-us-big">
		<div class="container text-right"><span class="icon-telefono"></span> &nbsp;01 800 347 60 36</div>
	</div>
</nav>