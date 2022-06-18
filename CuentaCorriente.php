<?php
require_once 'Cuenta.php'

class CuentaCorriente extends Cuenta{
    protected $topeDescubierto;

    public function __construct($numero,$titular,$saldo, $tope=2000) {
        parent::__construct($numero,$titular,$saldo);
        $this->topeDescubierto = $tope;
    }
   /**permite realizar un deposito, incrementando el saldo de la cuenta
    * @param int $monto El monto a depositar
    *@return string Mensaje que especifica el resultado de la operacion
    */  
    public function extraer($monto){
        if ( $monto > $this->saldo + $this->topeDescubierto){
            return "Tope de desubierto excedido";
        }
        else {
            return parent::extraer($monto);
        }
    }

}