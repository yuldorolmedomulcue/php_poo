<?php include 'includes/header.php';

//ENCAPSULACION
//definir una clase
class Producto{
    //Public -se puede acceder y modificar en cualquier lugar(clase y objeto)
    //Protected -se puede acceder unicamente en la clase
    //Privated -solo miembros de la misma clase pueden acceder a el

    //funcion constructor PHP8  | Propiedades
    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {

    }
    //Metodo
    public function mostrarProducto(): void {   // : void= retorna nada
        //Metodos en Clases PHP8 #345
        echo "El producto es: ".$this->nombre." y su precio es de: ".$this->precio."Mil";
                                //this hace referencia a losa tributos agregados en la clase de arriba
    }

    //metodo para Protected
    public function getNombre (): string{  // : string= retorna un string
        return $this->nombre;
    }
    //moficar un valor
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

}

//instanciar clase = new
$producto = new Producto("Tv", 200, true);
// $producto->mostrarProducto();
echo $producto->getNombre();  //echo poque tiene un return arriba

//funcion para modificar el objeto
$producto->setNombre("Nuevo Nombre");
//modificar mis datos | Producto esta muy abierto
// $producto->nombre = "Nuevo Nombre";  NO FUNCIONA CON PROTECTED
// echo $producto->nombre;

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto("Monitor", 250, true);
//Metodos en Clases PHP8 #345
echo $producto2->getNombre();

// $producto2->mostrarProducto();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';
