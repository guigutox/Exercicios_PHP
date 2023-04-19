<?php
    
        class Car{
            public $color;
            public $model;
            
            public function __construct($color, $model){
                $this->color = $color;
                $this->model = $model;
                
            }   

            public function message(){
                return "My car is a ". $this->color . " " . $this->model . "!";
            }

            public function inverter(){
                return strrev($this->model);
            }
            public function comprimento(){
                return strlen($this->model);
            }
            public function contarPalavras(){
                return str_word_count($this->model);
            }


        }

        $myCar = new Car("black", "Volvo");
        echo $myCar -> message();
        echo "<br>";
        $myCar = new Car("Verde", "Toyota");
        echo $myCar -> message();
        echo "<br>";    
        echo "Nome do carro invertido = ".$myCar -> inverter();
        echo "<br>";  
        echo "Comprimento da palavra = ".$myCar -> comprimento();
        echo "<br>";  
        echo "Quantidade de palavras = ".$myCar -> contarPalavras();
        echo "<br>";  


    
    ?>