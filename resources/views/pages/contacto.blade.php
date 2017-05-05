@extends('layout')

@section('content')
	<div class="section-top-banner contacto">
		<div class="container">
			<p class="asap">Contáctanos</p>
		</div>
	</div>

	<div class="container form-block">
		<div class="col-md-7 col-md-offset-5">
			{{ Form::open(['id' => 'contactForm']) }}
				
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Nombre completo (requerido)']) !!}
				    <small class="text-danger">{{ $errors->first('name') }}</small>
				</div>
				
				<div class="col-sm-6 p-0">
					
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email (requerido)']) !!}
					    <small class="text-danger">{{ $errors->first('email') }}</small>
					</div>

					<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
					    {!! Form::text('company', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Compañía']) !!}
					    <small class="text-danger">{{ $errors->first('company') }}</small>
					</div>
				</div>
				<div class="col-sm-6 xs-p-l-0-sm-p-l-15 p-r-0">
					
					<div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
					    {!! Form::text('telefono', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Teléfono']) !!}
					    <small class="text-danger">{{ $errors->first('telefono') }}</small>
					</div>

					<div class="form-group{{ $errors->has('asunto') ? ' has-error' : '' }}">
					    {!! Form::text('asunto', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Asunto']) !!}
					    <small class="text-danger">{{ $errors->first('asunto') }}</small>
					</div>
				</div>


				<div class="form-group{{ $errors->has('mensaje') ? ' has-error' : '' }}">
				    {!! Form::textarea('mensaje', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Mensaje']) !!}
				    <small class="text-danger">{{ $errors->first('mensaje') }}</small>
				</div>

				<div class="form-group">
				    {!! Form::submit('Enviar', ['class' => 'btn btn-primary submit pull-right']) !!}
				</div>
			{{ Form::close() }}

		</div>
	</div>

	<div class="container-fluid bg-red">
		<div class="row">
			<div class="container">
				<h2 class="title-top white oswald italic text-center hidden-md hidden-lg">OFICINAS GENERALES</h2>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-gray">
		<div class="row branch-item">
			<div class="col-xs-5 branch-photo gdl"></div>
			<div class="col-xs-7 branch-info">
				<h2 class="title-top white oswald italic text-center hidden-xs hidden-sm">OFICINAS GENERALES</h2>
				<div class="address">
					<p>
						Carretera a Chapala #5010 <br>
						Col. Paseos del Lago <br>
						Tlaquepaque, Jalisco. <br>
						C.P. 45619
					</p>
				</div>
				<div class="map" id="map_1"></div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-red">
		<div class="row">
			<div class="container">
				<h2 class="title-top white oswald italic text-center hidden-md hidden-lg">SUCURSAL EN MONTERREY</h2>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-gray">
		<div class="row branch-item">
			<div class="col-xs-5 branch-photo gdl"></div>
			<div class="col-xs-7 branch-info">
				<h2 class="title-top white oswald italic text-center hidden-xs hidden-sm">SUCURSAL EN MONTERREY</h2>
				<div class="address">
					<p>
						Carretera a Chapala #5010 <br>
						Col. Paseos del Lago <br>
						Tlaquepaque, Jalisco. <br>
						C.P. 45619
					</p>
				</div>
				<div class="map" id="map_2"></div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-red">
		<div class="row">
			<div class="container">
				<h2 class="title-top white oswald italic text-center hidden-md hidden-lg">SUCURSAL EN DF</h2>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-gray">
		<div class="row branch-item">
			<div class="col-xs-5 branch-photo gdl"></div>
			<div class="col-xs-7 branch-info">
				<h2 class="title-top white oswald italic text-center hidden-xs hidden-sm">SUCURSAL EN DF</h2>
				<div class="address">
					<p>
						Carretera a Chapala #5010 <br>
						Col. Paseos del Lago <br>
						Tlaquepaque, Jalisco. <br>
						C.P. 45619
					</p>
				</div>
				<div class="map" id="map_3"></div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script>
		function initialize()
		{
		    var latlng = {lat: 20.580445, lng: -103.317138};
		    var latlng2 = {lat: 20.580445, lng: -103.317138};
		    var latlng3 = {lat: 20.580445, lng: -103.317138};

		    var myOptions =
		    {
		        zoom: 15,
		        scrollwheel: false,
		        center: latlng,
		        mapTypeId: google.maps.MapTypeId.ROADMAP
		    };

		    var myOptions2 =
		    {
		        zoom: 15,
		        scrollwheel: false,
		        center: latlng2,
		        mapTypeId: google.maps.MapTypeId.ROADMAP
		    };

		    var myOptions3 =
		    {
		        zoom: 15,
		        scrollwheel: false,
		        center: latlng3,
		        mapTypeId: google.maps.MapTypeId.ROADMAP
		    };

		    var map = new google.maps.Map(document.getElementById("map_1"), myOptions);
		    var map2 = new google.maps.Map(document.getElementById("map_2"), myOptions2);
		    var map3 = new google.maps.Map(document.getElementById("map_3"), myOptions3);

		    var myMarker = new google.maps.Marker(
		    {
		        position: latlng,
		        map: map,
		        title:"GDL"
		   });

		    var myMarker2 = new google.maps.Marker(
		    {
		        position: latlng2,
		        map: map2,
		        title:"MTY"
		    });

		    var myMarker3 = new google.maps.Marker(
		    {
		        position: latlng3,
		        map: map3,
		        title:"DF"
		    });
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD77lo6QWgOpoJlBYY8lqWIBjSe9eoO1S0&callback=initialize"></script>
@stop