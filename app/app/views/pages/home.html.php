<?php
/**
 * Car Dealership Landing Page
 */
$this->title('Inicio');
?>

<div class="row hero-section">
	<!-- Seminuevos / Used Cars -->
	<div class="col-md-6">
		<div class="card-custom card-yellow">
			<div class="card-title">Carros Seminuevos y usados</div>
			<div class="card-text">
				Seminuevos con garantía mecánica y alistamiento. Usados con garantía legal.
			</div>

			<form action="/cars/search" method="get">
				<div class="search-box">
					<input type="text" name="q" class="search-input" placeholder="Buscar un seminuevo">
					<button type="submit" class="btn-search">Buscar</button>
				</div>
			</form>

			<img src="https://png.pngtree.com/png-vector/20240124/ourmid/pngtree-white-color-car-png-image_11467471.png"
				alt="Carro Usado" class="car-image">
		</div>
	</div>

	<!-- Nuevos / New Cars -->
	<div class="col-md-6">
		<div class="card-custom card-purple">
			<div class="card-title">CHANGAN Nuevos</div>
			<div class="card-text">
				Carros CHANGAN NUEVOS con garantía de fábrica y financiamiento.
			</div>

			<a href="#" class="btn-action">Ver Catálogo</a>

			<img src="https://png.pngtree.com/png-vector/20230906/ourmid/pngtree-white-car-png-image_10017354.png"
				alt="Carro Nuevo" class="car-image">
		</div>
	</div>
</div>

<div class="brands-section">
	<div class="brands-title">Marcas de carros destacadas en Ecuador</div>
	<div class="brand-grid">
		<div class="brand-item">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Toyota_Logo_2019.svg/1200px-Toyota_Logo_2019.svg.png"
				alt="Toyota" class="brand-logo">
		</div>
		<div class="brand-item">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Changan_Automobile_logo.svg/2560px-Changan_Automobile_logo.svg.png"
				alt="Changan" class="brand-logo">
		</div>
		<div class="brand-item">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Kia_logo.svg/2560px-Kia_logo.svg.png"
				alt="Kia" class="brand-logo">
		</div>
		<div class="brand-item">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Chevrolet-logo.png/2560px-Chevrolet-logo.png"
				alt="Chevrolet" class="brand-logo">
		</div>
		<div class="brand-item">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Mazda_logo_with_emblem.svg/2560px-Mazda_logo_with_emblem.svg.png"
				alt="Mazda" class="brand-logo">
		</div>
		<div class="brand-item">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Suzuki_logo_2.svg/2560px-Suzuki_logo_2.svg.png"
				alt="Suzuki" class="brand-logo">
		</div>
	</div>
</div>