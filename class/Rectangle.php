<?php
class Rectangle extends Shape{
    protected $width;
    protected $height;


    function construct(){
    parent::construct();
    $this->width;
    $this->height;
    }

    public function setSize(int $width, int $height)
    {
        $this->width=$width;
        $this->height=$height;
    } 


    public function draw()
    {
        $rect= '<rect x="'. $this->x.'" y="'.$this->y.'" width = "'.$this->width.'" height= "' .$this->height.'" fill= "' .$this->color . '"  opacity= "' .$this->opacity .'"/>';
        return $rect;
    }

}
