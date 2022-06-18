<?php

abstract class Cuenta{
        protected $numero;
        protected $saldo;
        protected $titular;
        
        public function __construct($numero,$titular,$saldo) {
            $this->numero = $numero;
            $this->titular = $titular;
            $this->saldo = $saldo;
        }
        public function depositar($monto){
            $this->saldo += $monto;
            return "El deposito se realizo correctamente";
        }
        
        public function extraer($monto){
                $this->saldo -= $monto;
                return "La extraccion se realizo correctamente";
        }
        public function getSaldo() {
            return $this->saldo;
        }
}
