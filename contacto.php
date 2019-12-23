<div class="container-fluid">
	<!-- Inicio formulario de contacto -->
	<section id="contacto">
		<div class="container" id="transparente">
			<div class="container-fluid">
				<h2 class="text-center">Dónde Encontrarnos?</h2>
				<div class="container-fluid pb-3">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13620.701466414766!2d-64.1893472!3d-31.4092941!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6693430c4ee3410f!2sEspacio%20Project!5e0!3m2!1ses-419!2sar!4v1576412754995!5m2!1ses-419!2sar" width="100%" height="50%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-4" id="dire">
							<h5><i class="icon ion-md-map"></i> Dirección de la Oficina: </h5>
							<p class="m-0">
								<ion-icon name="navigate"></ion-icon> La Rioja 532
							</p>
							<p class="m-0">Córdoba Capital</p>
							<p class="m-0">Argentina</p>
						</div>
						<div class="col-lg-4 pt-1" id="telefono">
							<h5><i class="icon ion-md-call"></i>Teléfono:</h5>
							<a href="https://api.whatsapp.com/send?phone=54903517832514&text=Quiero%20comprar!" class="card-link text-dark">
								<i class="icon ion-logo-whatsapp"></i>3517832514
						</div>
						<div class="col-lg-4 pt-1" id="redes">
							<h5 class="text-center"> Nuestras Redes:</h5>
							<div class="container-fluid" id="iconos">
								<a class="text-dark" href="https://facebook.com"><i class="icon ion-logo-facebook"></i></a>
								<a class="text-dark" href="https://instagram.com"><i class="icon ion-logo-instagram"></i></a>
								<a class="text-dark" href="https://youtube.com"><i class="icon ion-logo-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<form class="container" method="POST">
					<div class="form-group">
						<label for="nombre" id="nombre">nombre completo:</label>
						<input type="text" class="form-control" id="nombre" placeholder="Introduzca aquí su nombre" required>
					</div>
					<div class="form-group">
						<label for="motivo" name="motivo" id="motivo">motivo</label>
						<select class="form-control" name="motivo" id="motivo" style="text-transform: capitalize">
							<option>consulta general</option>
							<option>realizar pedido</option>
							<option>informar un problema</option>
						</select>
					</div>
					<div class="form-group">
						<label for="empresa" id="empresa">empresa:</label>
						<input type="text" class="form-control" id="empresa" placeholder="Introduzca el nombre de su empresa" required>
					</div>
					<div class="form-group">
						<label for="correo" id="correo">correo electronico:</label>
						<input type="email" class="form-control" id="correo" name="Correo" placeholder="Introduzca su correo electrónico" required>
					</div>
					<div class="form-group">
						<label for="mensaje" id="mensaje"> Mensaje:</label>
						<textarea class="form-control" id="Mensaje" name="Mensaje" placeholder="Introduzca su mensaje" required></textarea>
					</div>
					<div class="col-xs-12 col-md-6 pb-3">
						<button class="btn btn-primary" type="submit"><i class="icon ion-md-checkbox"></i> Enviar </button>
						<button class="btn btn-danger" type="reset"><i class="icon ion-md-refresh"></i> Limpiar</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>