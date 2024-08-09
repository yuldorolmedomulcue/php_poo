<?php include 'includes/header.php';


//Herencia en POO
class transporte{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    //metodo
    public function getInfo(): string{
        return "El transporte tiene ".$this->ruedas." y una capacidad de ".$this->capacidad." personas";
    }
}
   

include 'includes/footer.php';