@extends('layout')

@section('title_description', 'Fletes express, almacenaje y distribución, servicio de camión desde  1 tonelada hasta 10 toneladas, así como servicio de camión de 48 y 53 pies.')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="main-banners-container">
				@include('partials.banners')
			</div>

			<div class="container">
				<h2 class="home-title oswald italic bold">SERVICIOS QUE TE OFRECEMOS</h2>
				<div class="home-services-container">
					<div class="item">
						<div class="service"><a href="{{ url('servicios') }}"><img src="/images/fletes-express.svg" alt="servicio fletes express"><span class="description">fletes express a <br>toda a república</span></a></div>
						<div class="service"><a href="{{ url('servicios') }}#storage-service-block"><img src="/images/almacenaje-y-distribucion.svg" alt="servicio almacenaje y distribucion"><span class="description">almacenaje <br>y distribución</span></a></div>
					</div>
					<div class="item">
						<div class="service"><a href="{{ url('flotilla') }}"><img src="/images/camion-tonelada.svg" alt="servicio camion una tonelada"><span class="description">camión <br>1 tonelada</span></a></div>
						<div class="service"><a href="{{ url('flotilla') }}"><img src="/images/camion-35-toneladas.svg" alt="servicio camion 3 y 5 toneladas"><span class="description">camión <br>3 y 5 toneladas</span></a></div>
					</div>
					<div class="item">
						<div class="service"><a href="{{ url('flotilla') }}"><img src="/images/camion-10-toneladas.svg" alt="servicio camion 10 toneladas"><span class="description">camion<br>10 toneladas</span></a></div>
						<div class="service"><a href="{{ url('flotilla') }}"><img src="/images/camion-4853-pies.svg" alt="servicio camion 48 y 53 pies"><span class="description">camion<br>48' y 53' pies</span></a></div>						
					</div>
				</div>
			</div>
		</div>
		
		<div class="row who-we-are">
			<div class="half hidden-xs"></div>
			<div class="container">
				<h2 class="text-title asap">¿Quiénes somos?</h2>
				<p>Transpadex es una empresa dedicada al transporte de carga a toda la república, teniendo como base Guadalajara, contando con sucursales en México y Querétaro.</p>
				<p>Nuestro principal objetivo es la satisfacción de nuestros clientes, a través de la excelencia de nuestro capital humano, flotilla en óptimas condiciones y tecnología.</p>
				<p class="more"><a href="{{ url('quienes-somos') }}"><span class="icon-mas"></span> <span class="black hidden-xs">Conoce más de nosotros</span></a></p>
				<div class="back-image hidden-xs"><img src="images/quienes-somos-background.jpg" alt="quienes somos background"></div>
				<figure class="_25-years-image-block"><img src="images/25-aniversario.svg" alt="25 aniversario"></figure>
			</div>	
		</div>

		<div class="row _25-years">
			<div class="container">
				<div class="col-sm-10 col-sm-offset-1">
					<p class="_25-years-text hidden-sm hidden-md hidden-lg asap">Más de <span class="one">28 años</span><br>de <span class="one">experiencia</span></p>
					<p class="_25-years-text hidden-xs asap">Más de <span>28 años</span> de experiencia</p>
					<p class="text-center certs">
						<img class="cert hidden-xs" src="images/oea.svg" alt="oea">
						<img class="cert iso hidden-xs" src="images/c-tpat.svg" alt="c-tpat">
					</p>
					<p class="text-25-years hidden-xs hidden-sm">
						Contamos con más de 28 años de experiencia en transporte, teniendo la misión de superar las expectativas de nuestros clientes en sus necesidades de transporte.
					</p>
					<ul class="features hidden-xs hidden-sm hidden">
						<li>Libero, nisi excepturi ut dolorem consequatur vitae molestias .</li>
						<li>Neque iste, deserunt consequuntur perspiciatis ab, atque odit .</li>
						<li>Molestiae assumenda voluptatibus quas consequatur ratione, doloremque.</li>
						<li>Delectus cumque quae dicta, dolorem, voluptatem molestiae.</li>
						<li>Quidem, quibusdam ut deserunt ex quod, qui voluptate fugit rem.</li>
						<li>Blanditiis accusantium inventore, sit numquam doloremque.</li>
						<li>Iure id ducimus sed ut impedit ea voluptas tenetur veritatis.</li>
					</ul>
					<p class="advantages hidden-md hidden-lg">
						<a class="white" href="{{ url('quienes-somos') }}#ventajas"><span class="icon-mas"></span> conoce nuestras ventajas</a>
					</p>
				</div>
			</div>
		</div>

		<div class="row fletes-home">
			<div class="photo-home-service">
			</div>
			<div class="info-service">
				<h2 class="asap">Fletes</h2>
				<div class="fletes-container">
					<div class="item">
						<h3 class="mayus"><span class="icon-check"></span> COBERTURA NACIONAL</h3> <br>
						<h3 class="mayus"><span class="icon-check"></span> ENTREGA EN CEDIS BAJO CITA</h3> <br>
						<h3 class="mayus"><span class="icon-check"></span> RECOLECCIÓN Y ENTREGA DOOR TO DOOR</h3>
					</div>
					<div class="item">
						<h3 class="mayus"><span class="icon-check"></span> SERVICIO POR COBRAR EN DESTINO</h3> <br>
						<h3 class="mayus"><span class="icon-check"></span> DESARROLLOS DE PROYECTOS A LA MEDIDA DE TU EMPRESA</h3>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row storage">
			<div class="info-service">
				<h2 class="asap">Almacenamiento y distribución</h2>
				<div class="storage-container">
					<div class="item">
						<h3 class="mayus"><span class="icon-check"></span> Contamos con más en 3000 mts2 en la ciudad de Guadalajara y México.</h3> <br>
						<h3 class="mayus"><span class="icon-check"></span> Control de inventarios.</h3> <br>
						<h3 class="mayus"><span class="icon-check"></span> Sistema de seguridad 24/7</h3>
					</div>
					
					<div class="item">
						<h3 class="mayus"><span class="icon-check"></span> Cross dock</h3> <br>
						<h3 class="mayus"><span class="icon-check"></span> Carga y descarga de unidades</h3> <br>
						<h3 class="mayus"><span class="icon-check"></span> Re empaque y etiquetado de producto</h3>
					</div>
					
					<div class="item">
						<h3 class="mayus"><span class="icon-check"></span> Surtido y armado de pedidos</h3> <br>
						<h3 class="mayus"><span class="icon-check"></span> Distribución local y nacional</h3>
					</div>
				</div>
			</div>
			<div class="photo-home-service"></div>
		</div>

		<div class="row branches">
			<div class="container">
				<div class="item col-sm-6">
					<div class="title oswald italic">OFICINAS GENERALES</div>
					<div class="address">
						Carretera a Chapala No. 5010<br>
						Col. Paseos del Lago.<br>
						Tlaquepaque, Jalisco C.P. 45619 <br>
						Tel. <a href="tel:33 3657 6036">01 33 3657 6036</a> / <a href="tel:33 3344 6999">01 33 3344 6999</a> <br>
						Mail: <a href="mailto:trafico@transpadex.com">trafico@transpadex.com</a> / <a href="mailto:atencion.clientes@transpadex.com">atencion.clientes@transpadex.com</a>

					</div>
					<a href="{{ url('contacto') }}#sucursales"><img src="images/jalisco.svg" alt="jalisco" class="state"></a>
				</div>
				<div class="item col-sm-6">
					<div class="title oswald italic">SUCURSAL QUERÉTARO</div>
					<div class="address">
						Calle Xocotl no. 14, <br>
						Colonia Cumbres de Conin<br>
						El Marques, Qro. <br>
						Tel. <a href="tel:442 277 4583">442 277 4583</a> <br>
						Mail <a href="mailto:ventasqro@transpadex.com.mx">ventasqro@transpadex.com.mx</a> / <a href="mailto:traficoqro@transpadex.com.mx">traficoqro@transpadex.com.mx</a> <br>
						Mobile <a href="tel:33 22 55 54 55">33 22 55 54 55</a> <br>
					</div>
					<a href="{{ url('contacto') }}#sucursales"><img src="images/queretaro.svg" alt="querétaro" class="state"></a>
				</div>
				<div class="item col-sm-6">
					<div class="title oswald italic">SUCURSAL MÉXICO</div>
					<div class="address">
						Andador Austria no. 1 Int 302. Centro Urbano,<br>
						Cuautitlán Izcalli, Edo. Mexico. <br>
						Oficina <a href="tel:55 7592 0526">55 7592 0526</a> <br>
						Mail: <a href="mailto:ventasmx@transpadex.com">ventasmx@transpadex.com</a> / <a href="mailto:traficomx@transpadex.com.mx">traficomx@transpadex.com.mx</a>  <br>
						Celular <a href="tel:+52 1 33 3201 0567">33 3201 0567</a> / <a href="tel:+52 1 33 1699 8072">33 1699 8072</a> <br>
					</div>
					<a href="{{ url('contacto') }}#sucursales"><img src="images/cdmx.svg" alt="cdmx" class="state"></a>
				</div>
				<div class="item col-sm-6">
					<div class="title oswald italic">SUCURSAL MONTERREY</div>
					<div class="address">
						Blvd. Julián Treviño #806 Poniente, Int. B <br>
						Apodaca Nuevo León <br>
						C.P. 66601 <br>
						Mail: <a href="mailto:traficomty@transpadex.com.mx">traficomty@transpadex.com.mx</a> <br>
						Celular: +52 1 33 2258 9183 <br>
					</div>
					<a href="{{ url('contacto') }}#sucursales"><img src="images/nuevo-leon.svg" alt="Monterrey Nuevo León" class="state"></a>
				</div>
			</div>
		</div>

		<div class="row home-map" id="map">
			
		</div>
	</div>
@endsection

@section('scripts')
	<script>	
		function initMap() {
			var gdl_map = {lat: 20.580445, lng: -103.317138};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 15,
				scrollwheel: false,
				center: gdl_map
			});
			var marker = new google.maps.Marker({
				position: gdl_map,
				map: map
			});
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD77lo6QWgOpoJlBYY8lqWIBjSe9eoO1S0&callback=initMap"></script>
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script>
		$(document).ready(function(){
			$('.main-banners-container').slick({
				'autoplay': true,
				'arrows': false,
				'dots': true
			});
			$('.fletes-container').slick({
				'autoplay': true,
				'arrows': false,
				'dots': true
			});
			$('.storage-container').slick({
				'autoplay': true,
				'arrows': false,
				'dots': true
			});
			$('.home-services-container').slick({
				'autoplay': false,
				'prevArrow': '<button type="button" class="icon-flecha-izq"></button>',
				'nextArrow': '<button type="button" class="icon-flecha-der"></button>',
				slidesToShow: 3,
				  slidesToScroll: 1,
				  responsive: [
				    {
				      breakpoint: 1200,
				      settings: {
				        slidesToShow: 3,
				        slidesToScroll: 1,
				        infinite: true
				      }
				    },
				    {
				      breakpoint: 992,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 1,
				        infinite: true
				      }
				    }
				  ]
			});
		});
	</script>
@stop