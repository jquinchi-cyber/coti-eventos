<?php

/**
 * Clase Database - Implementación del patrón Singleton
 * Esta clase gestiona la conexión a MySQL/MariaDB
 */
class Database 
{
    // Instancia única de la clase (Singleton)
    private static $instance = null;
    
    // Objeto de conexión PDO
    private $connection;
    
    // Configuración de la base de datos
    private $host = DB_HOST;
    private $database = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $charset = DB_CHARSET;
    private $port = DB_PORT;
    
    /**
     * Constructor privado - Previene la creación directa de instancias
     * Solo puede ser llamado internamente por getInstance()
     */
    private function __construct() 
    {
        try {
            // DSN (Data Source Name) - Cadena de conexión
            $dsn = "mysql:host={$this->host};dbname={$this->database};charset={$this->charset};port={$this->port}";
            
            // Opciones de configuración de PDO
            $options = [
                // Modo de errores: lanza excepciones
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                
                // Modo de fetch por defecto: array asociativo
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                
                // Deshabilita la emulación de prepared statements
                PDO::ATTR_EMULATE_PREPARES => false,
                
                // Conexión persistente para mejor rendimiento
                PDO::ATTR_PERSISTENT => true
            ];
            
            // Crear la conexión PDO
            $this->connection = new PDO($dsn, $this->username, $this->password, $options);
            
        } catch (PDOException $e) {
            // Manejo de errores de conexión
            die("Error de conexión: " . $e->getMessage());
        }
    }
    
    /**
     * Previene la clonación del objeto
     * Parte del patrón Singleton
     */
    private function __clone() 
    {
        // Método vacío - no se permite clonar
    }
    
    /**
     * Previene la deserialización del objeto
     * Parte del patrón Singleton
     */
    public function __wakeup() 
    {
        throw new Exception("No se puede deserializar un Singleton");
    }
    
    /**
     * Método estático para obtener la única instancia
     * Este es el único punto de acceso a la conexión
     * 
     * @return Database Instancia única de la clase
     */
    public static function getInstance() 
    {
        // Si no existe una instancia, créala
        if (self::$instance === null) {
            self::$instance = new self();
        }
        
        // Retorna la instancia única
        return self::$instance;
    }
    
    /**
     * Obtiene el objeto de conexión PDO
     * 
     * @return PDO Objeto de conexión
     */
    public function getConnection() 
    {
        return $this->connection;
    }
}