<?php
// Asegúrate de que DataBase.php esté requerido
// require_once 'DataBase.php'; 

/**
 * Clase TipoDocumento
 * Modelo para la tabla 'tipo_documento', con conexión en el constructor.
 */
class TipoDocumento {
    
    // -----------------------------------------------------------------
    // ATRIBUTOS
    // -----------------------------------------------------------------
    private $id;
    private $nombre;
    private $abreviatura;

    // Propiedad para almacenar la conexión PDO
    private $db; 

    // -----------------------------------------------------------------
    // CONSTRUCTOR (Únicamente establece la conexión)
    // -----------------------------------------------------------------
    public function __construct() {
        // Inicializa la conexión a la base de datos
        $this->db = DataBase::connect();
    }

    // -----------------------------------------------------------------
    // MÉTODOS DE INSTANCIA (Interacción con la Base de Datos)
    // -----------------------------------------------------------------

    /**
     * Obtiene todos los tipos de documento de la base de datos.
     * @return array|bool Un array de objetos TipoDocumento o false si hay un error.
     */
    public function getAll() {
        
        $query = "SELECT id, nombre, abreviatura FROM tipo_documento ORDER BY nombre ASC";
        
        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $tiposDocumento = []; 

            // Mapear los resultados a objetos TipoDocumento
            foreach ($resultados as $row) {
                // Creamos un nuevo objeto TipoDocumento para mapeo de datos.
                // Es importante notar que esta línea crea una NUEVA instancia 
                // y llama al constructor nuevamente (estableciendo la conexión otra vez).
                // Para bases de datos pequeñas o no persistentes, esto funciona, 
                // pero para evitar la sobrecarga, en frameworks se usa inyección de dependencias.
                
                $tipo = new TipoDocumento(); // Conexión
                $tipo->setId($row['id']);
                $tipo->setNombre($row['nombre']);
                $tipo->setAbreviatura($row['abreviatura']);
                
                $tiposDocumento[] = $tipo;
            }

            return $tiposDocumento;

        } catch (PDOException $e) {
            error_log("Error al obtener tipos de documento: " . $e->getMessage());
            return false;
        }
    }

    // -----------------------------------------------------------------
    // GETTERS Y SETTERS
    // -----------------------------------------------------------------
    
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }

    public function getAbreviatura() { return $this->abreviatura; }
    public function setAbreviatura($abreviatura) { $this->abreviatura = $abreviatura; }
}