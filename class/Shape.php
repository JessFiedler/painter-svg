<?php
class Shape{
    protected $x;
    protected $y;
    protected $color;
    protected $opacity;


    function __construct(){
        $this->x = 0;
        $this->y = 0;
        $this->color = "blue";
        $this->opacity = 1;
    }

    public function setLocation(int $x, int $y){
        $this->x=$x;
        $this->y=$y;
    } 

    public function setColor(string $color, float $opacity){
        $this->color=$color;
        $this->opacity=$opacity;
    }

}



