@extends('layout')

@section('content')
	<div class="section-top-banner flotilla">
		<div class="container">
			<p class="asap">
				Unidades de caja seca y plataforma <br>
				Servicio de Carga Completa (FTL) <br>
				Servicio de Carga Consolidada (LTL)
			</p>
		</div>
	</div>

	<div class="container-fluid bg-red">
		<div class="row">
			<div class="container">
				<h1 class="title-top white oswald italic text-center">Unidades caja seca</h1>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-gray">
		<div class="row">
			<div class="col-xs-5 col-sm-6 bg-dry-box"></div>
			<div class="col-xs-7 col-sm-6 p-t-20 p-b-20 text-box">
				<p>Con riel logístico para sujetar y asegurar la carga. Ideales para:</p>
				<ul>
					<li>Toda clase de manufacturas</li>
					<li>Pallets con materia prima</li>
					<li>Material delicado</li>
					<li>Muebles diversos</li>
					<li>Electrodomésticos</li>
					<li>Mercancía en General</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container truck-icons">
		<div class="col-xs-6 col-sm-3">
			<a href="#" class="black" data-toggle="modal" data-target="#modal-1ton">
				<img src="images/caja-seca-1-tonelada.svg" alt="caja seca 1 tonelada">
				<p class="mayus text-center">Camión <br> 1 tonelada</p>
			</a>
			
			<div class="modal fade" id="modal-1ton" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Unidades 1 Tonelada</h4>
			      </div>
			      <div class="modal-body text-center">
			        <img src="images/caja-seca-500kg.jpg" class="_50-percent" alt="caja seca 500kg"> <br>
			        <img src="images/caja-seca-1000kg.jpg" class="_50-percent" alt="caja seca 1000kg">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>

		</div>
		<div class="col-xs-6 col-sm-3">
			<a href="#" class="black" data-toggle="modal" data-target="#modal-3ton">
				<img src="images/caja-seca-3-y-5-toneladas.svg" alt="caja seca 3 y 5 toneladas">
				<p class="mayus text-center">Camión <br> 3 Y 5 toneladas</p>
			</a>
			<div class="modal fade" id="modal-3ton" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Unidades 3 y 5 Toneladas</h4>
			      </div>
			      <div class="modal-body text-center">
			        <img src="images/caja-seca-3-toneladas.jpg" class="_50-percent" alt="caja seca 3 toneladas">
			        <img src="images/caja-seca-5-toneladas.jpg" class="_50-percent" alt="caja seca 5 toneladas">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-3">
			<a href="#" class="black" data-toggle="modal" data-target="#modal-10ton">
				<img src="images/camion-10-toneladas.svg" alt="camion 10 toneladas">
				<p class="mayus text-center">Camión <br> 10 toneladas</p>
			</a>

			<div class="modal fade" id="modal-10ton" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Unidades 10 Toneladas</h4>
			      </div>
			      <div class="modal-body text-center">
			        <img src="images/caja-seca-10-toneladas.jpeg" class="_50-percent" alt="caja seca 10 toneladas">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-3">
			<a href="#" class="black" data-toggle="modal" data-target="#modal-40">
				<img src="images/camion-4853-pies.svg" alt="camion 40 pies">
				<p class="mayus text-center">Camión <br> 48 y 53 pies</p>
			</a>
			<div class="modal fade" id="modal-40" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Unidades 40 Pies</h4>
			      </div>
			      <div class="modal-body text-center">
			        <img src="images/caja-seca-40-pies.jpg" class="_50-percent" alt="caja seca 40 pies">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-red">
		<div class="row">
			<div class="container">
				<h1 class="title-top white oswald italic text-center">Unidades con plataforma</h1>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-gray">
		<div class="row">
			<div class="col-xs-5 col-sm-6 bg-platform"></div>
			<div class="col-xs-7 col-sm-6 p-t-20 p-b-20 text-box">
				<p>Con redilas desmontables y ganchos para sujetar la mercancía con eslingas. Además de una lona para cubrir su mercancía. Ideal para:</p>
				<ul>
					<li>Mercancía con embalaje</li>
					<li>Material voluminoso</li>
					<li>Rollo de acero</li>
					<li>Montacargas</li>
					<li>Maquinaria</li>
					<li>Tubería</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container truck-icons">
		<div class="col-xs-6 col-sm-3">
			<a href="#" class="black" data-toggle="modal" data-target="#modal-1ton_">
				<img src="images/camion-tonelada.svg" alt="camión 1 tonelada">
				<p class="mayus text-center">Camión <br> 1 tonelada</p>
			</a>

			<div class="modal fade" id="modal-1ton_" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Unidades 1 Tonelada</h4>
			      </div>
			      <div class="modal-body text-center">
			        <img src="images/plataforma-1ton-01.jpg" class="_50-percent" alt="plataforma 1ton 01"> <br>
			        <img src="images/plataforma-1ton-02.jpg" class="_50-percent" alt="plataforma 1ton 02">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>

		</div>
		<div class="col-xs-6 col-sm-3">
			<a href="#" class="black" data-toggle="modal" data-target="#modal-3ton_">
				<img src="images/camion-35-toneladas.svg" alt="camión 3 y 5 toneladas">
				<p class="mayus text-center">Camión <br> 3 Y 5 toneladas</p>
			</a>

			<div class="modal fade" id="modal-3ton_" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Unidades 3 y 5 Toneladas</h4>
			      </div>
			      <div class="modal-body text-center">
			        <img src="images/plataforma-3-toneladas.jpg" class="_50-percent" alt="plataforma 3 toneladas"> <br>
			        <img src="images/plataforma-5-toneladas.jpg" class="_50-percent" alt="plataforma 5 toneladas">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>

		</div>
		<div class="col-xs-6 col-sm-3">
			<a href="#" class="black" data-toggle="modal" data-target="#modal-10ton_">
				<img src="images/camion-plataforma-10-toneladas.svg" alt="camion plataforma 10 toneladas">
				<p class="mayus text-center">Camión <br> 10 toneladas</p>
			</a>

			<div class="modal fade" id="modal-10ton_" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Unidades 10 Toneladas</h4>
			      </div>
			      <div class="modal-body text-center">
			        <img src="images/plataforma-10-toneladas.jpg" class="_50-percent" alt="plataforma 10 toneladas">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>

		</div>
		<div class="col-xs-6 col-sm-3">
			<a href="#" class="black" data-toggle="modal" data-target="#modal-40_">
				<img src="images/camion-plataforma-48-y-53-pies.svg" alt="camion plataforma 40 pies">
				<p class="mayus text-center">Camión <br> 40" pies</p>
			</a>

			<div class="modal fade" id="modal-40_" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Unidades 40" Pies</h4>
			      </div>
			      <div class="modal-body text-center">
			        <img src="images/plataforma-40-pies.jpg" class="_50-percent" alt="plataforma 40 pies">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>

		</div>
	</div>
@stop