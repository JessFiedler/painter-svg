<?php
class Triangle extends Polygon
{
    private $x1;
    private $y1;
    private $x2;
    private $y2;
    private $x3;
    private $y3;




    public function setCoordinates(int $x1, int $y1, int $x2, int $y2, int $x3, int $y3 )
    {
        $this->points=[$y1,$x1,$x2,$y2,$x3,$y3];
    } 




}