<div class="container py-5">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-7 col-lg-5">

            <div class="p-4 rounded shadow bg-light">

                <!-- Correo -->
                <input 
                    type="email" 
                    class="form-control mb-3 rounded-pill text-center fs-6 py-2"
                    placeholder="Correo electrónico">

                <!-- Contraseña -->
                <input 
                    type="password" 
                    class="form-control mb-3 rounded-pill text-center fs-6 py-2"
                    placeholder="Contraseña">

                <!-- Iniciar sesión -->
                <button class="btn btn-primary w-100 rounded-pill py-2 fs-6 mb-3">
                    Iniciar sesión
                </button>

                <!-- Crear cuenta -->
                <a href="<?= BASE_URL ?>module=usuarios&view=register"
                   class="btn btn-light w-100 rounded-pill border py-2 fs-6 mb-3">
                    Crear tu cuenta
                </a>

                <!-- Google -->
                <button class="btn btn-light w-100 mb-3 d-flex align-items-center justify-content-center border rounded-pill py-2 fs-6">
                    <img src="./assets/img/logo_google.png"
                         alt="Google" width="24" class="me-2">
                    Iniciar sesión con Google
                </button>

                <!-- Facebook -->
                <button class="btn btn-light w-100 mb-3 d-flex align-items-center justify-content-center border rounded-pill py-2 fs-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                         alt="Facebook" width="24" class="me-2">
                    Iniciar sesión con Facebook
                </button>

                <!-- Apple -->
                <button class="btn btn-light w-100 d-flex align-items-center justify-content-center border rounded-pill py-2 fs-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
                         alt="Apple" width="24" class="me-2">
                    Iniciar sesión con Apple
                </button>

            </div>

        </div>
    </div>
</div>
