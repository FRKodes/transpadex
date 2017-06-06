@extends('layout')

@section('content')
	<div class="section-top-banner contacto">
		<div class="container">
			<p class="asap">Contáctanos</p>
		</div>
	</div>

	<div class="container form-block">
		<div class="col-md-7 col-md-offset-5">
			{{ Form::open(['id' => 'contactForm', 'url'=>'sendmail']) }}
				
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				    {!! Form::text('name', null, ['class' => 'form-control', 'data-validate'=>'required', 'placeholder' => 'Nombre completo (requerido)']) !!}
				</div>
				
				<div class="col-sm-6 p-0">
					
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					    {!! Form::email('email', null, ['class' => 'form-control', 'data-validate'=>'required|email', 'placeholder' => 'Email (requerido)']) !!}
					</div>

					<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
					    {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Compañía']) !!}
					</div>
				</div>
				<div class="col-sm-6 xs-p-l-0-sm-p-l-15 p-r-0">
					
					<div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
					    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Teléfono']) !!}
					</div>

					<div class="form-group{{ $errors->has('asunto') ? ' has-error' : '' }}">
					    {!! Form::text('asunto', null, ['class' => 'form-control', 'placeholder' => 'Asunto']) !!}
					</div>
				</div>

				<div class="form-group{{ $errors->has('mensaje') ? ' has-error' : '' }}">
				    {!! Form::textarea('mensaje', null, ['class' => 'form-control', 'data-validate'=>'required', 'placeholder' => 'Mensaje (requerido)']) !!}
				</div>

				<div class="sent_mail_alert"><b>¡Gracias!</b> <br> Tu mensaje ha sido enviado con éxito, nos pondremos en contacto contigo a la brevedad.</div>

				<div class="form-group">
				    {!! Form::submit('Enviar', ['class' => 'btn btn-primary submit pull-right']) !!}
				</div>
			{{ Form::close() }}

		</div>
	</div>

	<div class="container-fluid bg-red" id="sucursales">

		<div class="row">
			<div class="container">
				<h2 class="title-top white oswald italic text-center">CEDIS MATRIZ GDL</h2>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-gray m-b-40 border-bottom-black">
		<div class="row branch-item">
			<div class="col-xs-5 branch-photo gdl"></div>
			<div class="col-xs-7 branch-info">
				<h2 class="title-top white oswald italic text-center hidden-xs hidden-sm hidden">CEDIS MATRIZ</h2>
				<div class="address">
					<p>
						Carretera a Chapala No. 5010<br>
						Col. Paseos del Lago. Tlaquepaque, Jalisco C.P. 45619 <br>
						Tel. <a class="white" href="tel:33 3657 6036">01 33 3657 6036</a> / <a class="white" href="tel:33 3344 6999">01 33 3344 6999</a> <br>
						Mail: <a class="white" href="mailto:trafico@transpadex.com">trafico@transpadex.com</a> / <a class="white" href="mailto:atencion.clientes@transpadex.com">atencion.clientes@transpadex.com</a>
					</p>
				</div>
				<div class="map" id="map_1"></div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-red">
		<div class="row">
			<div class="container">
				<h2 class="title-top white oswald italic text-center">SUCURSAL EN QUERÉTARO</h2>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-gray m-b-40 border-bottom-black">
		<div class="row branch-item">
			<div class="col-xs-5 branch-photo qro"></div>
			<div class="col-xs-7 branch-info">
				<h2 class="title-top white oswald italic text-center hidden-xs hidden-sm hidden">SUCURSAL EN QUERÉTARO</h2>
				<div class="address">
					<p>
						Calle Xocotl no. 14, <br>
						Colonia Cumbres de Conin. <br>
						El Marques, Qro. <br>
						Tel. <a class="white" href="tel:442 277 4583">442 277 4583</a> <br>
						Mail <a class="white" href="mailto:ventasqro@transpadex.com.mx">ventasqro@transpadex.com.mx</a> <br>
						Mobile <a class="white" href="tel:33 22 55 54 55">33 22 55 54 55</a> <br> <br><br>
					</p>
				</div>
				<div class="map" id="map_2"></div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-red">
		<div class="row">
			<div class="container">
				<h2 class="title-top white oswald italic text-center">SUCURSAL EN DF</h2>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-gray border-bottom-black">
		<div class="row branch-item">
			<div class="col-xs-5 branch-photo df"></div>
			<div class="col-xs-7 branch-info">
				<h2 class="title-top white oswald italic text-center hidden-xs hidden-sm hidden">SUCURSAL EN DF</h2>
				<div class="address">
					<p>
						Avance no. 10, col. Atlanta, <br>
						Cuautitlan Izcalli, Estado de Mexico <br>
						CP 54740 <br>
						Oficina <a class="white" href="tel:55 5881 9652">55 5881 9652</a> / <a class="white" href="tel:55 7592 0526">55 7592 0526</a> <br>
						Mail: <a class="white" href="mailto:ventasmx@transpadex.com">ventasmx@transpadex.com</a>  <br>
						Celular <a class="white" href="tel:33 14 79 27 24">33 14 79 27 24</a> <br> <br>
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
		    var latlng = {lat: 20.581057, lng: -103.317534};
		    var latlng2 = {lat: 20.575056, lng: -100.324551};
		    var latlng3 = {lat: 19.644411, lng: -99.208060};

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
	<script>
		/*-------------------------------
			VALIDATE.JS
			A barebones jQuery validation plugin
			@author Todd Francis
			@version 1.0.3
		-------------------------------*/
		;(function(r,d,l){d.fn.validate=function(m){return this.each(function(){var f=d(this);if(l===f.data("validate")){var j=new d.validate(m,f);f.data("validate",j)}})};d.validate=function(m,f){function j(a,b){-1==d.inArray(a,b)&&b.push(a);return b}function p(a){a=a.slice(a.indexOf("[")+1,-1);return-1!==a.indexOf(",")?a.split(","):[a]}function n(a){for(var b=[],c=0;c<a.length;c++){var g=a[c],d=[],h=g.indexOf("[");-1!==h&&(d=d.concat(p(g)),g=g.slice(0,h));b.push({rule:g,args:d})}return b}var h=d.extend(!0,
		{debug:!1,autoDetect:!1,visibleOnly:!0,beforeSubmit:function(){},singleError:function(){},overallError:function(){},singleSuccess:function(){},overallSuccess:function(){},regExp:{alpha:/^[a-zA-Z]*$/,numeric:/^[0-9]*$/,alphanumeric:/^[a-zA-Z0-9]*$/,url:/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,email:/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/}},
		m),c=this,q=["checkGroupRequired","checkGroupMin","checkGroupMax"];c.$form=f;c.version="1.0.0";if(f!==l)f.on("submit",function(a){if(!c.validate()||h.debug)a.stopImmediatePropagation(),a.preventDefault()});c.validate=function(a){a="undefined"===typeof a?c.$form:a;var b=!1,e=d();h.beforeSubmit.call(c);c.fieldsToCheck(a).each(function(){var a=d(this);if((h.visibleOnly&&a.is(":visible")||!h.visibleOnly)&&!c.checkField(a))b=!0,e=e.add(a)});b?h.overallError.call(c,a,e):!1===h.overallSuccess.call(c,a)&&
		(b=!0);return!b};c.checkField=function(a){var b=a.data("validate")?a.data("validate").split("|"):[];a.val();var e=[];if(h.autoDetect&&a.is('input:not([type="checkbox"], [type="radio"])')&&"text"!=a.attr("type"))switch(e=a.attr("type"),e){case "number":b=j("numeric",b);break;default:b=j(e,b)}b=n(b);e=c.checkValue(a,b);if(e instanceof Object)return h.singleError.call(c,a,e),!1;h.singleSuccess.call(c,a,b);return!0};c.checkValue=function(a,b){if(!b)return!0;b="string"==typeof b?n(b):b;for(var e=[],g=
		0;g<b.length;g++){var f=b[g].rule,k="",j=[a].concat(b[g].args.slice());f.indexOf("[");k="check"+f.charAt(0).toUpperCase()+f.slice(1);"checkRequired"==k&&a.is('input[type="checkbox"]')?k="checkRequiredCheckbox":-1!=d.inArray(k,q)&&(f=d('input[type="checkbox"]',a),f.length||(f=d('input[type="radio"]',a)),j=[f].concat(j.slice(1)));c[k]instanceof Function?c[k].apply(c,j)||e.push(b[g]):h.regExp[b[g].rule]?""!==a.val()&&!c.checkRegExp(a,b[g].rule)&&e.push(b[g]):e.push(b[g])}return 0<e.length?e:!0};c.fieldsToCheck=
		function(a){a=d("[data-validate]",a===l?c.$form:a);h.autoDetect&&(a=d("input[required]").add(a));return a};c.checkRequired=function(a){return 0<a.val().length?!0:!1};c.checkRequiredCheckbox=function(a){return a.is(":checked")};c.checkGroupRequired=function(a){return a.filter(":checked").length?!0:!1};c.checkGroupMin=function(a,b){return a.filter(":checked").length>=b};c.checkGroupMax=function(a,b){return a.filter(":checked").length<=b};c.checkCustomRegExp=function(a,b,c){if(""===a.val())return!0;
		b=RegExp(b,c);return a.val().match(b)?!0:!1};c.checkRegExp=function(a,b){return a.val().match(h.regExp[b])?!0:!1};c.checkMaxLength=function(a,b){return""===a.val()?!0:a.val().length<=b};c.checkMinLength=function(a,b){return""===a.val()?!0:a.val().length>=b};c.checkMax=function(a,b){return""===a.val()?!0:parseFloat(a.val())<=parseFloat(b)};c.checkMin=function(a,b){return""===a.val()?!0:parseFloat(a.val())>=parseFloat(b)}}})(window,jQuery);
		/*validator*/
		$(function(){

			var formSettings = {
				singleError : function($field, rules){ 
					$field.closest('.form-group').removeClass('valid').addClass('error');
					$('.text-danger').fadeIn();
				},
				singleSuccess : function($field, rules){ 
					$field.closest('.form-group').removeClass('error').addClass('valid');
					$('.text-danger').fadeOut();
				},
				overallSuccess : function(){
					var form    	= $('#contactForm'),
						name		= form.find( "input[name='name']").val(),
						email		= form.find( "input[name='email']").val(),
						company		= form.find( "input[name='company']").val(),
						telefono	= form.find( "input[name='telefono']").val(),
						asunto		= form.find( "input[name='asunto']").val(),
						_token		= form.find( "input[name='_token']").val(),
						mensaje		= form.find( "textarea[name='mensaje']").val(),
						action		= form.attr( "action"),
						url			= action;

					var posting = $.post(
						url, { name: name, company:company, asunto:asunto, email: email, tel:telefono, _token: _token, mensaje: mensaje }
					);
					posting.done(function( data ){
						console.log('email sent! \n' + data );
						$('#contactForm')[0].reset();
						$('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
					});
				},
				overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
					autoDetect : true, debug : true
				};
			var $validate = $('#contactForm').validate(formSettings).data('validate');
		});
	</script>
@stop