<div class="container">
	<div class="col-sm-4 hidden-xs">
		<div class="title oswald">Acerca de Transpadex</div>
		<ul class="links">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Servicios</a></li>
			<li><a href="#">Quiénes Somos</a></li>
			<li><a href="#">Flotillas</a></li>
			<li><a href="#">Clientes</a></li>
			<li><a href="#">Contacto</a></li>
		</ul>
	</div>
	<div class="col-sm-4 social-column">
		<div class="title oswald">Redes Sociales</div>
		<ul class="social">
			<li><a href="#" class="icon-facebook"></a></li>
			<li><a href="#" class="icon-instagram"></a></li>
			<li><a href="#" class="icon-twitter"></a></li>
		</ul>
	</div>
	<div class="col-sm-4">
		<figure class="logo-footer"><img src="images/logo-transpadex.svg" alt="logo transpadex"></figure>
		<figure class="_25-years-footer"><img src="images/25-aniversario.svg" alt="25 aniversario"></figure>
	</div>
</div>

<script>
	function initMap() {
			var uluru = {lat: 20.580445, lng: -103.317138};
			var map = new google.maps.Map(document.getElementById('map'), {
			  zoom: 15,
			  scrollwheel: false,
			  center: uluru
			});
			var marker = new google.maps.Marker({
			  position: uluru,
			  map: map
			});
		  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD77lo6QWgOpoJlBYY8lqWIBjSe9eoO1S0&callback=initMap"></script>