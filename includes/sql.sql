CREATE DATABASE  bd_cotieventos;
USE bd_cotieventos;

CREATE TABLE roles (
id_rol  INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
nombre VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE tipo_documento (
id_tipo_documento INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
nombre VARCHAR(100) NOT NULL, -- Ejemplo: "Cédula de Ciudadanía", "Pasaporte", "RUT"
abreviatura VARCHAR(10) UNIQUE
);

CREATE TABLE usuarios (
id_usuario INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
nombre VARCHAR(255) NOT NULL,
email VARCHAR(255) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL, 
telefono_fijo VARCHAR(20),      -- Nuevo campo
telefono_movil VARCHAR(20),     -- Nuevo campo
direccion VARCHAR(255),
documento VARCHAR(50) UNIQUE NOT NULL, -- Nuevo campo
id_tipo_documento INT NOT NULL,        -- Clave foránea para el tipo de documento
id_rol INT,
FOREIGN KEY (id_rol) REFERENCES roles(id_rol),
FOREIGN KEY (id_tipo_documento) REFERENCES tipo_documento(id_tipo_documento) -- Nueva clave foránea
);


CREATE TABLE genero (
id_genero INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
nombre VARCHAR(255)
);

CREATE TABLE vestuarios (
id_vestuario INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
nombre VARCHAR(255),
descripcion VARCHAR(255),
precio DECIMAL(10,2),
id_genero INT,
stock INT,
img_principal VARCHAR(255),
FOREIGN KEY (id_genero) REFERENCES genero(id_genero)
);

CREATE TABLE tallas (
id_talla INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
nombre VARCHAR(255)
);

CREATE TABLE vestuarios_tallas (
id_vestuario_talla INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
id_vestuario INT,
id_talla INT,
FOREIGN KEY (id_vestuario) REFERENCES vestuarios(id_vestuario),
FOREIGN KEY (id_talla) REFERENCES tallas(id_talla)
);

CREATE TABLE imagenes_vestuarios (
id_imagen_vestuario INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
id_vestuario INT,
img VARCHAR(255),
FOREIGN KEY (id_vestuario) REFERENCES vestuarios(id_vestuario)
);

CREATE TABLE lugares (
id_lugar INT PRIMARY KEY AUTO_INCREMENT  NOT NULL,
nombre VARCHAR(255),
ubicacion VARCHAR(255),
precio DECIMAL(10,2),
capacidad_persona INT,
estado ENUM('ocupado','disponible') DEFAULT ('disponible')
);

CREATE TABLE eventos (
id_evento INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
fecha_inicio DATE,
fecha_fin DATE,
cantidad_adultos INT,
cantidad_menores INT,
nombre VARCHAR(255),
id_lugar INT UNIQUE,
FOREIGN KEY (id_lugar) REFERENCES lugares(id_lugar)
);

CREATE TABLE cotizaciones (
id_cotizacion INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
id_lugar INT,
id_vestuario INT, -- Nota: El nombre de la columna es 'id_vestiario', ¿quizás querías 'id_vestuario'?
id_decoracion INT, -- Esta columna no tiene una clave foránea asociada, ¿es intencional?
precio_total DECIMAL(10,2),
estado ENUM('pendiente','aprobada','rechazada','completada') DEFAULT 'pendiente',
total DECIMAL(10,2),
id_evento INT,
fecha DATE,
hora TIME,
FOREIGN KEY (id_lugar) REFERENCES lugares(id_lugar),
FOREIGN KEY (id_evento) REFERENCES eventos(id_evento) -- Agregué esta FK que faltaba
);

CREATE TABLE platillos (
id_platillo INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
nombre VARCHAR(255),
precio DECIMAL(10,2)
);

CREATE TABLE platillos_cotizaciones (
id_platillo_cotizacion INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
id_cotizacion INT,
id_platillo INT,
cantidad INT,
FOREIGN KEY (id_cotizacion) REFERENCES cotizaciones(id_cotizacion),
FOREIGN KEY (id_platillo) REFERENCES platillos(id_platillo)
);

CREATE TABLE tipos_sonidos (
id_tipo_sonido INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
nombre VARCHAR(255),
img_principal VARCHAR(255)
);

CREATE TABLE sonido (
id_sonido INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
id_tipo_sonido  INT,
precio DECIMAL(10,2),
min_horas INT,
telefono VARCHAR(20),
img_principal VARCHAR(255),
descripcion TEXT,
FOREIGN KEY (id_tipo_sonido) REFERENCES tipos_sonidos(id_tipo_sonido)
);

CREATE TABLE cotizaciones_sonidos (
id_cotizacion_sonido INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
id_sonido INT,
id_cotizacion INT,
fecha DATE,
hora_inicio TIME,
hora_fin TIME,
FOREIGN KEY (id_sonido) REFERENCES sonido(id_sonido),
FOREIGN KEY (id_cotizacion) REFERENCES cotizaciones(id_cotizacion)
);

CREATE TABLE vestuarios_cotizaciones (
id_vestuario_cotizacion INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
id_vestuario INT,
id_cotizacion INT,
cantidad_asignada INT,
fecha_asignacion DATETIME,
FOREIGN KEY (id_vestuario) REFERENCES vestuarios(id_vestuario),
FOREIGN KEY (id_cotizacion) REFERENCES cotizaciones(id_cotizacion)
);

select *  from usuarios;

CREATE TABLE cocteles (
id_coctel INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
nombre VARCHAR(255),
img_principal VARCHAR(255),
precio DECIMAL(10,2),
descripcion TEXT
);

CREATE TABLE cotizaciones_cocteles (
id_cotizacion_coctel INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
id_cotizacion INT,
id_coctel INT,
cantidad INT,
FOREIGN KEY (id_cotizacion) REFERENCES cotizaciones(id_cotizacion),
FOREIGN KEY (id_coctel) REFERENCES cocteles(id_coctel)
);

CREATE TABLE imagenes_cocteles (
id_imagen_coctel INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
img VARCHAR(255),
id_coctel INT,
FOREIGN KEY (id_coctel) REFERENCES cocteles (id_coctel)
);

CREATE TABLE img_platillos (
id_imagen_platillo INT PRIMARY KEY AUTO_INCREMENT UNIQUE NOT NULL,
img VARCHAR(255),
id_platillo INT,
FOREIGN KEY (id_platillo) REFERENCES platillos(id_platillo)
);

-- --- Triggers ---
-- Trigger para descontar stock (Correcto)
DELIMITER ¡¡
CREATE TRIGGER tr_actualizar_stock_aprobada
AFTER UPDATE ON cotizaciones
FOR EACH ROW
BEGIN
-- Solo ejecutar si el estado cambió a 'aprobada'
IF NEW.estado = 'aprobada' AND OLD.estado <> 'aprobada' THEN
UPDATE vestuarios v
JOIN vestuarios_cotizaciones vc 
ON vc.id_vestuario = v.id_vestuario
SET v.stock = v.stock - vc.cantidad_asignada
 WHERE vc.id_cotizacion = NEW.id_cotizacion;
END IF;
END¡¡
DELIMITER ;

-- Trigger para devolver stock (Corregido: 'vestuario' a 'vestuarios')
DELIMITER $$
CREATE TRIGGER tr_actualizar_stock_devuelta
AFTER UPDATE ON cotizaciones
FOR EACH ROW
BEGIN
-- Solo ejecutar si el estado cambió a 'completada'
IF NEW.estado = 'completada' AND OLD.estado <> 'completada' THEN
UPDATE vestuarios v -- Tabla corregida
JOIN vestuarios_cotizaciones vc 
ON vc.id_vestuario = v.id_vestuario
SET v.stock = v.stock + vc.cantidad_asignada
WHERE vc.id_cotizacion = NEW.id_cotizacion;
END IF;
END$$
DELIMITER ;

-- Trigger: Cambiar lugar a "ocupado" cuando la cotización es aprobada (Correcto)
DELIMITER $$
CREATE TRIGGER tr_lugar_ocupado_aprobada
AFTER UPDATE ON cotizaciones
FOR EACH ROW
BEGIN
-- Verificamos si el estado cambió a 'aprobada'
IF NEW.estado = 'aprobada' AND OLD.estado <> 'aprobada' THEN
UPDATE lugares
SET estado = 'ocupado'
WHERE id = NEW.id_lugar;
 END IF;
END$$
DELIMITER ;

-- Trigger: Cambiar lugar a "disponible" cuando la cotización es completada (Correcto)
DELIMITER $$
CREATE TRIGGER tr_lugar_disponible_completada
AFTER UPDATE ON cotizaciones
FOR EACH ROW
BEGIN
    -- Verificamos si el estado cambió a 'completada'
    IF NEW.estado = 'completada' AND OLD.estado <> 'completada' THEN
        UPDATE lugares
        SET estado = 'disponible'
        WHERE id = NEW.id_lugar;
    END IF;
END$$
DELIMITER ;

INSERT INTO tipo_documento (nombre, abreviatura) VALUES 
('cedula de extrangeria','CE'),
('Cédula de Ciudadanía', 'CC'),
('Tarjeta de Identidad', 'TI');

select*from tipo_documento;

INSERT INTO roles (nombre) VALUES 
('Administrador'),
('Cliente');