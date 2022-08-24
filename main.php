<?php

$name = ($_POST['name']);
$price = ($_POST['price']);
$discount = ($_POST['discount']);


class Article{
    protected $name;
    protected $precio;
    
    
    public function __construct($name,$precio)
    {
        $this->nombre = $name;
        $this->precio = $precio;
    }
}

class ArticleRebajo extends Article{
    private $discount;
    
    public function __construct($name,$precio,$discount)
    {
        parent::__construct($name,$precio,$discount);
        $this->descuento = $discount;
    } 
    public function precioBase(){
        $impuesto = .2;
        $pBase = ($this->precio*$impuesto);
        return $pBase;
    }
    private function calculaDescuento(){
        
        $descuento = (self::precioBase()*$this->descuento)/100;

        return $descuento;
    }
    public function getDescuento():string{

        return $this->calculaDescuento();
        
    }
    public function precioRebajado(){

            $descuento = intval($this->getDescuento());
            $rebaja = ($this->precio-$descuento);
            return $rebaja;
    }
}

$user01 = new ArticleRebajo($name,$price,$discount);

$descuentoTotal = $user01->getDescuento();
$rebajatoTotal = $user01->precioRebajado();
$precioBase = $user01->precioBase();


