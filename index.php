<?php 
    class Movie {
        //VARIABILI D'ISTANZA
        public $titolo;
        public $anno;
        public $attori = " Bradley Cooper, Ed Helms, Zach Galifianakis, Justin Bartha e Heather Graham";
        public $lingua = "Inglese";

        //COSTRUTTORE
        function __construct ($titolo, $anno = 2009){
            $this->titolo = $titolo;
            $this->anno = $anno;
        }

        //METODO
        public function informazioni() {
            echo $this->titolo;
            echo " " ."L'anno di pubblicazione è  ".$this->anno;
        }

    }   
    $primaEdizione = new Movie("Una notte da leoni (The Hangover)");
    $secondaEdizione = new Movie("Una notte da leoni 2", 2011);
    $terzaEdizione = new Movie("Una notte da leoni 3", 2013);

    echo " " ."Questa è la prima edizione del film" .$primaEdizione->informazioni()."<br>";
    echo " " ."Questa è la seconda edizione del film" .$secondaEdizione->informazioni()."<br>";
    echo " " ."Questa è la terza edizione del film" .$terzaEdizione->informazioni();
; ?>
