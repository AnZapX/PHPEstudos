<?php
namespace classes;
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
        $this->prodId = htmlspecialchars($prodId);
    }
    /*
    public function getLastName(){
        return $this->lastName;
    }
    public function setLastName($lastName){
        $this->lastName = htmlspecialchars($lastName);
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
        if(filter_var(htmlspecialchars($email), FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
            
    }
    */
    
}