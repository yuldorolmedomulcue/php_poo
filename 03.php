<?php include 'includes/header.php';

// Metodos estaticos

// Definir una clase
class Producto {

    public $imagen;
    // static es un atributo
    public static $imagenPlaceholder = "Imagen.jpg";

    // funcion constructor PHP8  | Propiedades
    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if($imagen){
            self::$imagenPlaceholder = $imagen;
        }
    }
    
    // Métodos estáticos
    public static function obtenerProducto() {
        echo "Obteniendo datos del producto";
    }

    // Métodos estáticos
    public static function obtenerImgProducto() {
        return self::$imagenPlaceholder;
    }

    // Método
    public function mostrarProducto(): void {   // : void = retorna nada
        // Métodos en Clases PHP8 #345
        echo "El producto es: ".$this->nombre." y su precio es de: ".$this->precio." Mil";
                                // this hace referencia a los atributos agregados en la clase de arriba
    }

    // Método para Protected
    public function getNombre(): string {  // : string = retorna un string
        return $this->nombre;
    }

    // Modificar un valor
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

// Llamamos static
// echo Producto::obtenerProducto();
// echo Producto::obtenerImgProducto();

// echo $producto->obtenerImgProducto();

// Instanciar clase = new
$producto = new Producto("Tv", 200, true, '');
// $producto->mostrarProducto();
// echo $producto->getNombre();  // echo porque tiene un return arriba
echo $producto->obtenerImgProducto();
echo $producto->getNombre();
// Función para modificar el objeto
$producto->setNombre("Nuevo Nombre");
// Modificar mis datos | Producto está muy abierto
// $producto->nombre = "Nuevo Nombre";  NO FUNCIONA CON PROTECTED
// echo $producto->nombre;

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto("Monitor", 250, true, "MonitorCurvo.jpg");
// Métodos en Clases PHP8 #345
echo $producto2->getNombre();
echo $producto2->obtenerImgProducto();

// $producto2->mostrarProducto();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';
