<?php
class Ellipse extends Shape
{
    protected $cx;
    protected $cy;
    protected $rx;
    protected $ry;

    function construct()
    { 
    parent::construct();
    $this->cx;
    $this->cy;
    $this->rx;
    $this->ry;
    }

    public function setSize(int $rx, $ry)
    {
        $this->rx=$rx;
        $this->ry=$ry;
    } 

    public function setLocation(int $cx, int $cy)
    {
        $this->cx=$cx;
        $this->cy=$cy;
    } 



    public function draw()
    {
        $ellipse2= '<ellipse cx="'. $this->cx.'" cy="'.$this->cy.'" rx = "'.$this->rx.'" ry = "'.$this->ry.'"fill= "' .$this->color . '"  opacity= "' .$this->opacity .'"/>';
return $ellipse2;
    }

}