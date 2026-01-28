<?php
/**
 * TecnoMegaStore Home Page
 */
use app\models\Products;
// Fetch explicit products for the "Laptops" section if they exist, otherwise empty
$laptops = [];
try {
	$laptops = Products::all(['limit' => 4]);
} catch (\Exception $e) {
	// Database table might not exist yet
}

$this->title('Inicio');
?>

<!-- Top Bar -->
<div class="top-bar">
	<div class="container">
		<span>¿Quiénes Somos? | ¿Quieres Ser Distribuidor? | <i class="fab fa-whatsapp"></i> <i
				class="fab fa-facebook"></i></span>
	</div>
</div>

<!-- Main Header -->
<div class="main-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-3">
				<a href="/" class="header-logo">
					<i class="fas fa-microchip"></i> TecnoMegaStore
				</a>
			</div>
			<div class="col-md-6">
				<form action="#" class="search-container">
					<input type="text" class="search-input" placeholder="¿Qué estás buscando?">
					<button class="search-btn"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<div class="col-md-3 text-right">
				<a href="#" class="text-white mr-3"><i class="fas fa-user"></i> Iniciar Sesión</a>
				<a href="#" class="text-white "><i class="fas fa-shopping-cart"></i> (0)</a>
			</div>
		</div>
	</div>
</div>

<!-- Navigation -->
<div class="nav-bar">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-3">
				<div class="category-dropdown">
					<i class="fas fa-bars"></i> Categorías
				</div>
			</div>
			<div class="col-md-9 d-flex align-items-center">
				<a href="#" class="nav-link">Computadores</a>
				<a href="#" class="nav-link">Componentes</a>
				<a href="#" class="nav-link">Periféricos</a>
				<a href="#" class="nav-link">Monitores</a>
				<a href="#" class="nav-link">Impresoras</a>
				<a href="#" class="nav-link">Celulares</a>
				<a href="/products" class="nav-link text-warning">Ver Catálogo</a>
			</div>
		</div>
	</div>
</div>

<!-- Hero Banner -->
<!-- Hero Banner -->
<div class="hero-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<!-- Main Slider / Epson Banner -->
				<img src="https://mediaserver.goepson.com/ImConvServlet/imconv/3966524388e6538350587d6052ceaeb17112aa21/original?assetDescr=scanners-software-document-capture-pro-hero.jpg"
					alt="Epson Scanner Banner" class="main-banner-img" style="height: 350px; object-fit: cover;">
			</div>
			<div class="col-md-3 d-none d-md-block">
				<!-- Side Banner / Gaming -->
				<div
					style="background: #000; height: 350px; display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative; border-radius: 5px;">
					<img src="https://img.freepik.com/free-photo/young-woman-playing-video-games-with-headset_23-2149021676.jpg"
						alt="Gaming Zone" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;">
					<div
						style="position: absolute; bottom: 20px; left: 10px; color: white; font-weight: bold; font-size: 20px;">
						<i class="fas fa-gamepad"></i> Gaming Zone
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Categories Grid -->
<div class="categories-section">
	<div class="container">
		<h3 class="section-title">Categorías mas visitadas</h3>
		<div class="row">
			<div class="col-md-2 col-6 mb-3">
				<div class="category-item">
					<div class="category-icon"><i class="fas fa-mobile-alt"></i></div>
					<div class="category-name">Celulares & Tablets</div>
				</div>
			</div>
			<div class="col-md-2 col-6 mb-3">
				<div class="category-item">
					<div class="category-icon"><i class="fas fa-desktop"></i></div>
					<div class="category-name">Computadores</div>
				</div>
			</div>
			<div class="col-md-2 col-6 mb-3">
				<div class="category-item">
					<div class="category-icon"><i class="fas fa-print"></i></div>
					<div class="category-name">Impresoras</div>
				</div>
			</div>
			<div class="col-md-2 col-6 mb-3">
				<div class="category-item">
					<div class="category-icon"><i class="fas fa-tv"></i></div>
					<div class="category-name">Monitores</div>
				</div>
			</div>
			<div class="col-md-2 col-6 mb-3">
				<div class="category-item">
					<div class="category-icon"><i class="fas fa-video"></i></div>
					<div class="category-name">Televisores</div>
				</div>
			</div>
			<div class="col-md-2 col-6 mb-3">
				<div class="category-item">
					<div class="category-icon"><i class="fas fa-hdd"></i></div>
					<div class="category-name">Discos Duros</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Products Section (Simulating Local Database Data) -->
<?php if (!empty($laptops)): ?>
	<div class="container py-4">
		<h3 class="section-title">LAPTOPS & NOVEDADES</h3>
		<div class="row">
			<?php foreach ($laptops as $prod): ?>
				<div class="col-md-3 mb-4">
					<div class="product-card">
						<img src="<?= $prod->Image ?: 'https://via.placeholder.com/200' ?>" class="product-img"
							alt="<?= $prod->Name ?>">
						<div class="product-title"><?= $prod->Name ?></div>
						<div class="product-price">$<?= number_format($prod->Price, 2) ?></div>
						<button class="btn-add">Añadir al carrito</button>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php else: ?>
	<div class="container py-4 text-center">
		<div class="alert alert-warning">
			<i class="fas fa-exclamation-triangle"></i> No hay productos cargados. Ejecuta el archivo <code>db.sql</code> en
			Railway.
		</div>
	</div>
<?php endif; ?>