<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">

            <div class="p-4 rounded shadow-sm bg-light">

                <!-- Google -->
                <button class="btn btn-light w-100 mb-3 d-flex align-items-center justify-content-center border rounded-pill py-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
                        alt="Google" width="22" class="me-2">
                    Iniciar sesión con Google
                </button>

                <!-- Facebook -->
                <button class="btn btn-light w-100 mb-3 d-flex align-items-center justify-content-center border rounded-pill py-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                        alt="Facebook" width="22" class="me-2">
                    Iniciar sesión con Facebook
                </button>

                <!-- Apple -->
                <button class="btn btn-light w-100 mb-4 d-flex align-items-center justify-content-center border rounded-pill py-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
                        alt="Apple" width="22" class="me-2">
                    Iniciar sesión con Apple
                </button>

                <!-- Correo -->
                <input type="email" class="form-control mb-3 rounded-pill text-center" placeholder="Correo electrónico">

                <!-- Contraseña -->
                <input type="password" class="form-control mb-4 rounded-pill text-center" placeholder="Contraseña">

                <!-- Crear cuenta -->
                <a href="<?= BASE_URL ?>module=usuarios&view=register"
                    class="btn btn-light w-100 rounded-pill border py-2">
                    Crear tu cuenta
                </a>


            </div>

        </div>
    </div>
</div>