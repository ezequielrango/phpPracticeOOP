<?php
require_once 'Cuenta.php';
/* 
representa Caja de ahorro
tope de extraccion
No permite numeros negativos
*/

class CajaAhorro extends Cuenta {
    protected $topeExtraccion;


    public function __construct($numero,$titular,$saldo, $tope=2000) {
        parent::__construct($numero,$titular,$saldo);
        $this->topeExtraccion = $tope;
    }

    /**permite realizar un deposito, incrementando el saldo de la cuenta
    * @param int $monto El monto a depositar
    *@return string Mensaje que especifica el resultado de la operacion
    */ 
    public function extraer($monto){
        if($monto > $this->topeExtraccion){
            return "Tope excedido";
        }elseif ( $monto > $this->saldo){
            return "Saldo insuficiente";
        }
        else {
           return parent::extraer($monto);
        }
    }
}