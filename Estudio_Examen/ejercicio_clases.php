<?php

    class Vehiculo
    {
        //Atributos
        private $peso;
        private $color;
        //Metodos (solo la cabezera)
        public function circula()
        {
            //Funcion que haga lo que sea
        }
        public function añadir_persona($peso_persona)
        {
            //Funcion que acceda al peso de la persona
        }
    }
    class Cuatro_ruedas extends Vehiculo
    {
        //Atributos
        private $numero_puertas;
        //  Funcion get
        public function getNumero_puertas()
        {
            return $this->numero_puertas; //Devuleve el numero de puertas
        }
        //  Funcion set
        public function setNumero_puertas()
        {
            $this->numero_puertas = $numero_puertas;
        }
        //Metodos (solo la cabezera)
        public function repintar($color)
        {
            //Funcion que repinta un coche de 4 o mas ruedas
        }
    }
?>