<?php include 'includes/header.php';

//ABSTRACCION
//1definir una clase
class Producto{
    // public $nombre; //2agregamos atributos o propiedades
    // public $precio;
    // public $disponible;

    //funcion constructor PHP8  
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
        // $this->nombre =$nombre;
        // $this->precio = $precio;
        // $this->disponible = $disponible;
    }

    public function mostrarProducto(){
        //Metodos en Clases PHP8 #345
        echo "El producto es: ".$this->nombre." y su precio es de: ".$this->precio."Mil";
                                //this hace referencia a losa tributos agregados en la clase de arriba
    }
}

//instanciar clase = new
$producto = new Producto("Tv", 200, true);
$producto->mostrarProducto();


//asignar valores
// $producto -> nombre = 'Tablet';
// $producto -> precio = 500; 
// $producto -> disponible = true;
//ver el contenido
echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto("Monitor", 250, true);
//Metodos en Clases PHP8 #345
// echo "El producto es: ".$producto2->nombre." y su precio es de: ".$producto2->precio."Mil";
$producto2->mostrarProducto();

//asignar valores
// $producto2 -> nombre = 'Monitor';
// $producto2 -> precio = 300; 
// $producto2 -> disponible = true;
//ver el contenido
echo "<pre>";
var_dump($producto2);
echo "</pre>";


include 'includes/footer.php';
