@extends('layout')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="main-banners-container">
				<div class="item">
					<p>
						<span class="one">Su aliado</span>
						<span class="two">en transporte</span>
						<span class="three">dedicado</span>
					</p>
				</div>
			</div>

			<div class="container">	
				<h2 class="home-title">SERVICIOS QUE TE OFRECEMOS</h2>
				<div class="home-services-container">
					<div class="item">
						<div class="service"><a href="#"><img src="/images/fletes-express.svg" alt="servicio fletes express"><span class="description">fletes express a <br>toda a república</span></a></div>
						<div class="service"><a href="#"><img src="/images/almacenaje-y-distribucion.svg" alt="servicio almacenaje y distribucion"><span class="description">almacenaje <br>y distribución</span></a></div>
						<div class="service"><a href="#"><img src="/images/camion-tonelada.svg" alt="servicio camion una tonelada"><span class="description">camión <br>1 tonelada</span></a></div>
						<div class="service"><a href="#"><img src="/images/camion-35-toneladas.svg" alt="servicio camion 3 y 5 toneladas"><span class="description">camión <br>3 y 5 toneladas</span></a></div>
					</div>
					<div class="item">
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="row who-we-are">
			<div class="half hidden-xs"></div>
			<div class="container">
				<h2 class="text-title">¿Quiénes somos?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit unde at dolorem doloremque accusantium nisi, numquam voluptas, officiis quae ullam quia eligendi dolorum voluptatem, soluta totam quisquam asperiores reprehenderit expedita.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit unde at dolorem doloremque accusantium nisi, numquam voluptas, officiis quae ullam quia eligendi dolorum voluptatem, soluta totam quisquam asperiores reprehenderit expedita.</p>
				<p class="more hidden-sm"><span class="icon-mas"></span></p>
				<div class="back-image hidden-xs"><img src="images/quienes-somos-background.jpg" alt="quienes somos background"></div>
			</div>	
		</div>

		<div class="row _25-years">
			<div class="container">
				<div class="col-sm-10 col-sm-offset-1">
					<p class="_25-years-text hidden-sm hidden-md hidden-lg">Más de <span class="one">25 años</span><br>de <span class="one">experiencia</span></p>
					<p class="_25-years-text hidden-xs">Más de <span>25 años</span> de experiencia</p>
					<p class="text-center certs">
						<img class="cert hidden-xs" src="images/neec.svg" alt="neec">
						<img class="cert iso hidden-xs" src="images/ISO-98.svg" alt="ISO 98">
					</p>
					<ul class="features hidden-xs hidden-sm">
						<li>Libero, nisi excepturi ut dolorem consequatur vitae molestias .</li>
						<li>Neque iste, deserunt consequuntur perspiciatis ab, atque odit .</li>
						<li>Molestiae assumenda voluptatibus quas consequatur ratione, doloremque.</li>
						<li>Delectus cumque quae dicta, dolorem, voluptatem molestiae.</li>
						<li>Quidem, quibusdam ut deserunt ex quod, qui voluptate fugit rem.</li>
						<li>Blanditiis accusantium inventore, sit numquam doloremque.</li>
						<li>Iure id ducimus sed ut impedit ea voluptas tenetur veritatis.</li>
					</ul>
					<p class="advantages hidden-md">
						<a class="white" href="#"><span class="icon-mas"></span> conoce nuestras ventajas</a>
					</p>
				</div>
			</div>
		</div>

		<div class="row fletes-home">
			<div class="photo-home-service">
			</div>
			<div class="info-service">
				<h2>Fletes</h2>
				<h3 class="mayus">Cobertura nacional</h3>
			</div>
		</div>
		
		<div class="row storage">
			<div class="info-service">
				<h2>Almacenamiento y distribución</h2>
				<h3 class="mayus">Contamos con más de 3,000 mts2 en la ciudad de Guadalajara y México.</h3>
			</div>
			<div class="photo-home-service"></div>
		</div>

		<div class="row branches">
			<div class="container">
				<div class="item col-sm-4">
					<div class="title">OFICINAS GENERALES</div>
					<div class="address">
						Carretera a Chapala No. 5010<br>
						Col. Paseos del Lago.<br>
						Tlaquepaque, Jalisco C.P. 45619
					</div>
					<img src="images/jalisco.svg" alt="jalisco" class="state">
				</div>
				<div class="item col-sm-4">
					<div class="title">SUCURSAL MONTERREY</div>
					<div class="address">
						Av. Ignacio Sepúlveda No. 326<br>
						Col. La encarnación<br>
						apodaca N.L, C.P. 66633
					</div>
					<img src="images/monterrey.svg" alt="monterrey" class="state">
				</div>
				<div class="item col-sm-4">
					<div class="title">SUCURSAL MÉXICO</div>
					<div class="address">
						Blvd. A López Mateos No. 646<br>
						Col. Insurgentes<br>
						México D.F., C.P. 28442
					</div>
					<img src="images/cdmx.svg" alt="cdmx" class="state">
				</div>
			</div>
		</div>

		<div class="row home-map">
			
		</div>
	</div>
@endsection