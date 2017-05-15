@extends('layout')

@section('content')
	<div class="section-top-banner quienes-somos">
		<div class="container">
			<p class="asap">¿Quiénes somos?</p>
		</div>
	</div>

	<div class="container">
		<p class="m-t-20">Transpadex nació en el año de 1991, fruto de una tradición familiar de varias generaciones. </p>
		<p>A lo largo de 20 años se ha preocupado por innovar y diversificar sus servicios acorde a las necesidades de sus clientes, para brindar satisfacción en cada envío, con un servicio exprés y de alta calidad a cualquier parte de la república.</p>
	</div>

	<div class="container">
		<div class="col-sm-4 history-item first-one">
			<div class="title">1991</div>
			<div class="description">1991 Nace bajo el nombre de Transportes Padilla</div>
			<span class="icon-flecha-abajo red hidden-sm hidden-md hidden-lg"></span>
		</div>
		<div class="col-sm-1 arrow hidden-xs">
			<span class="icon-flecha-der red _768"></span>
		</div>

		<div class="col-sm-4 history-item second-one">
			<div class="title">2014</div>
			<div class="description">2014 Nos renovamos totalmente, cambiando el nombre a Transpadex.</div>
			<span class="icon-flecha-abajo red hidden-sm hidden-md hidden-lg"></span>
		</div>
		<div class="col-sm-1 arrow hidden-xs">
			<span class="icon-flecha-der red _768"></span>
		</div>
	</div>

	<div class="container">
		<div class="item mision row">
			<div class="image-item col-sm-3 col-md-4 hidden-xs">
				<img src="images/quienes-somos-mision.jpg" alt="quienes somos mision">
			</div>
			<div class="col-sm-9 col-md-8">
				<div class="title oswald italic">Misión</div>
				<div class="description">Brindar soluciones integrales a los requerimientos de nuestros clientes; que tengan seguridad y confianza en sus traslados gracias a las óptimas condiciones en equipo de transporte y capacidad del personal.</div>
			</div>
		</div>

		<div class="item vision row">
			<div class="image-item col-sm-3 col-md-4 hidden-xs">
				<img src="images/quienes-somos-vision.jpg" alt="quienes somos vision">
			</div>
			<div class="col-sm-9 col-md-8">
				<div class="title oswald italic">Visión</div>
				<div class="description">Consolidarse como una empresa líder en transporte exprés a toda la república, creciendo a un ritmo constante.</div>
			</div>
		</div>
	</div>

	<div class="container-fluid valores-back">
		<div class="row">
			<div class="container">
				<div class="item valores">
					<div class="title oswald italic bg-triangle col-xs-12">Valores</div>
					<div class="items col-sm-5 col-md-4">
						<div class="value">- Puntualidad</div>
						<div class="value">- Responsabilidad</div>
						<div class="value">- Honestidad</div>
						<div class="value">- Confianza</div>
						<div class="value">- Respeto</div>
					</div>
					<div class="description col-sm-7 col-md-8">
						Con estos valores como base, a lo largo de  20 años, hemos encontrado un crecimiento constante, excelente personal y la satisfacción de nuestros clientes.
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" id="ventajas">
		<div class="item advantages">
			<div class="title oswald italic bg-triangle">Ventajas Competitivas</div>
			<div class="item-advantage m-t-20">
				<span class="icon-check"></span>
				<div class="description">Rastreo satelital en todas nuestras unidades.</div>
			</div>

			<div class="item-advantage">
				<span class="icon-check"></span>
				<div class="description">Laboramos los 365 días del año.</div>
			</div>

			<div class="item-advantage">
				<span class="icon-check"></span>
				<div class="description">Atención personalizada con nuestros clientes.</div>
			</div>

			<div class="item-advantage">
				<span class="icon-check"></span>
				<div class="description">Personal con amplia experiencia.</div>
			</div>

			<div class="item-advantage">
				<span class="icon-check"></span>
				<div class="description">Seriedad y puntualidad en cada envío.</div>
			</div>

			<div class="item-advantage">
				<span class="icon-check"></span>
				<div class="description">Unidades último modelo y en óptimas condiciones.</div>
			</div>

			<div class="item-advantage">
				<span class="icon-check"></span>
				<div class="description">Diversidad de modelos y capacidades.</div>
			</div>

			<div class="item-advantage">
				<span class="icon-check"></span>
				<div class="description">Mantenimiento especializado a las unidades por parte de nuestra empresa.</div>
			</div>

			<div class="item-advantage">
				<span class="icon-check"></span>
				<div class="description">Flujo constante de información entre operador-oficina-cliente.</div>
			</div>

			<div class="item-advantage">
				<span class="icon-check"></span>
				<div class="description">Precios justos y competitivos.</div>
			</div>
		</div>
	</div>
@stop