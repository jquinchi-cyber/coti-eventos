<main class="container-fluid my-5 flex-grow-1">

<div id="weddingCarousel" class="carousel slide mb-5 shadow" data-bs-ride="carousel">
<div class="carousel-inner rounded-4 ">
<div class="carousel-item active">
<img src="https://i.pinimg.com/736x/24/c6/a7/24c6a7e6e183d78d9d1beea77b6d160e.jpg" class="d-block w-100 object-fit-cover" style="max-height: 450px;" alt="platillo 1">
</div>
<div class="carousel-item">
<img src="https://i.pinimg.com/736x/fc/c5/1a/fcc51aa787c3381f57b8acb4b5ca4d7a.jpg" class="d-block w-100 object-fit-cover" style="max-height: 450px;" alt="platillo 2">
</div>
</div>
       
<button class="carousel-control-prev" type="button" data-bs-target="#weddingCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#weddingCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
</button>
</div>

<div class="row align-items-center g-5">
        
<div class="col-lg-5 text-center">
<div class="ratio ratio-1x1 mx-auto shadow-lg rounded-circle overflow-hidden" style="max-width: 400px;">
<img src="https://i.pinimg.com/1200x/53/d1/2f/53d12f18a4fb6675158c0945813c0c45.jpg" 
class="object-fit-cover" 
alt="comida">
</div>
</div>

<div class="col-lg-7">
<h1 class="display-4 fw-light mb-3">Platillos</h1>
<p class="lead text-dark">Una selección de platillos elegantes con una presentación cuidada y moderna, dispuestos individualmente con detalle y armonía. 
Cada plato resalta por su diseño sofisticado, acompañado de luces cálidas y delicados arreglos florales que realzan la experiencia visual y gastronómica.
Una propuesta refinada, ideal para elevar celebraciones y eventos especiales con un toque de distinción.</p>

<div class="list-group list-group-flush">
                
<a href="<?= BASE_URL ?>module=menu&view=listar" class="list-group-item list-group-item-action border-0 bg-transparent px-0 py-3 d-flex align-items-center">
<i class="bi bi-egg-fried me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i>
<span class="fs-5 fw-normal text-dark">Menú</span>
<i class="bi bi-chevron-rightd ms-auto text-muted small"></i>
</a>

<a href="<?= BASE_URL ?>module=postres&view=listar" class="list-group-item list-group-item-action border-0 bg-transparent px-0 py-3 d-flex align-items-center">
<i class="bi bi-cake me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i>
<span class="fs-5 fw-normal text-dark">Postres</span>
<i class="bi bi-chevron-right ms-auto text-muted small"></i>
</a>

<a href="<?= BASE_URL ?>module=cocteles&view=listar" class="list-group-item list-group-item-action border-0 bg-transparent px-0 py-3 d-flex align-items-center">
<i class="bi bi-cup-straw  me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i>
<span class="fs-5 fw-normal text-dark">Cocteles</span>
<i class="bi bi-chevron-right ms-auto text-muted small"></i>
</a>

<a href="<?= BASE_URL ?>module=tortas&view=listar" class="list-group-item list-group-item-action border-0 bg-transparent px-0 py-3 d-flex align-items-center">
<i class="bi bi-cake2 me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i>
<span class="fs-5 fw-normal text-dark">Tortas</span>
<i class="bi bi-chevron-right ms-auto text-muted small"></i>
</a>
</div> 
</div>
</div>
</main>