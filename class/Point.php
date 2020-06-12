<?php
class Point
{ 
    private $x;
    private $y;

    function __construct()
    {
        $this->x=0;
        $this->y=0;
    }

    // Pour pouvoir  récupérer la valeur à l'extérieur de la classe
    function getX()
    {
        return $this->x;
    }

    function getY()
    {
        return $this->y;
    }
    //pour le setter
    function moveTo(int $x, int $y){
        $this->x=$x;
        $this->y=$y;
    }
}