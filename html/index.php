<?php


$prod = new Produto();
    $prod->setProdId(1);
    $prod->setProdName("Celular do Miguel");
    $prod->setProdValor(2700);

$arr = [
    "Id" => $prod->getProdId(),
    "Produto" => $prod->getProdName(),
    "Valor" => $prod->getProdValor()
];



echo "Id -> " . $prod->getProdId();
echo "<br>Produto -> " . $prod->getProdName();
echo "<br>Valor -> " . $prod->getProdValor();

echo "<br> ================================ <br>";



foreach ($arr as $key => $value) {
    echo "{$key} - {$value}";
    echo "</br>";
}

class Produto{
    //Objeto cuida dos requisitos na classe
    
    //Propriedades //Caracteristicas do Usuário
    public $prodId;
    public $prodName;
    public $prodValor;

    //Ações permitidas pelo Usuário 
    // Responsável pela manipulação das suas propriedades
    public function getProdId(){
        return $this->prodId;
    }
    public function setProdId($prodId){
        $this->prodId = $prodId;
    }
    public function getProdName(){
        return $this->prodName;
    }
    public function setProdName($prodName){
        $this->prodName = $prodName;
    }
    public function getProdValor(){
        return $this->prodValor;
    }
    public function setProdValor($prodValor){
        $this->prodValor = number_format($prodValor, 2, ".", ",");
    }

}