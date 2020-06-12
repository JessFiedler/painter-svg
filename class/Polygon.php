<?php
class Polygon extends Shape
{
    // declaration d'un tableau de points
    //Protected signifit que cette donnée n'est visible  que  dans la classe polygone et celle qui en héritent
    protected $points; 

   //Constructeur prenant un tableau de point en argument
    public function construct()
    {
      parent::construct();
      $this->points=[];  //initialisation a vide du tableau 
    }

    function setPoints(array $points)
    {
        $this->points=$points;
    }

    public function draw()
    {
        return '<polygon points="' .
        implode(' ', $this->points) . '"
        fill="'.$this->color.'" 
        opacity="'.$this->opacity.'
        " />';
    }

}