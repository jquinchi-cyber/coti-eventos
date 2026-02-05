<?php
// 1. Llamamos a la función que creamos para limpiar la sesión
// Si no le pasas parámetro, destruye todo según la función que hicimos
eliminarSesion();
// 2. Redirigimos al usuario a la página de inicio o al login
header("Location: " . BASE_URL . "module=home&view=index");
exit;