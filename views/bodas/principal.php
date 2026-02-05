<main class="container-fluid my-5 flex-grow-1">

    <div id="weddingCarousel" class="carousel slide mb-5 shadow" data-bs-ride="carousel">
        <div class="carousel-inner rounded-4">
            <div class="carousel-item active">
                <img src="https://i.pinimg.com/736x/6e/d3/76/6ed37635050c84634fb1820e9c9ecf28.jpg" class="d-block w-100 object-fit-cover" style="max-height: 450px;" alt="Boda 1">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/65/f9/07/65f907ad8aab4dc8835fb4ae113032d1.jpg" class="d-block w-100 object-fit-cover" style="max-height: 450px;" alt="Boda 2">
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
                <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=600" 
                     class="object-fit-cover" 
                     alt="Pareja">
            </div>
        </div>

        <div class="col-lg-7">
            <h1 class="display-4 fw-light mb-3">Bodas</h1>
            <p class="lead text-dark">Tu boda merece mucho más que un evento: merece convertirse en un recuerdo eterno.</p>
            <p class="text-muted mb-4">Diseñamos experiencias únicas y cuidamos cada detalle.</p>

            <div class="list-group list-group-flush">
                
                <a href="<?= BASE_URL ?>module=vestuarios&view=index" class="list-group-item list-group-item-action border-0 bg-transparent px-0 py-3 d-flex align-items-center">
                    <i class="bi bi-star-fill me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i>
                    <span class="fs-5 fw-normal text-dark">vestuarios</span>
                    <i class="bi bi-chevron-right ms-auto text-muted small"></i>
                </a>

                <a href="<?= BASE_URL ?>module=platillos&view=principal" class="list-group-item list-group-item-action border-0 bg-transparent px-0 py-3 d-flex align-items-center">
                    <i class="bi bi-cup-hot-fill me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i>
                    <span class="fs-5 fw-normal text-dark">Banquete personalizado</span>
                    <i class="bi bi-chevron-right ms-auto text-muted small"></i>
                </a>

                <a href="servicios-musica.php" class="list-group-item list-group-item-action border-0 bg-transparent px-0 py-3 d-flex align-items-center">
                    <i class="bi bi-music-note-beamed me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i>
                    <span class="fs-5 fw-normal text-dark">Música en vivo - D.j</span>
                    <i class="bi bi-chevron-right ms-auto text-muted small"></i>
                </a>

                <a href="servicios-fotografia.php" class="list-group-item list-group-item-action border-0 bg-transparent px-0 py-3 d-flex align-items-center">
                    <i class="bi bi-camera-video-fill me-3 text-secondary p-2 bg-light rounded-circle shadow-sm"></i>
                    <span class="fs-5 fw-normal text-dark">Fotografía y video</span>
                    <i class="bi bi-chevron-right ms-auto text-muted small"></i>
                </a>

            </div> 
        </div>
    </div>
</main>