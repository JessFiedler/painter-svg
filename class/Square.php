<?php
class Square extends Rectangle
{
   private $size;

    public function setSize(int $size, int $useless=null)
    {
        $this->height=$size;
        $this->width=$size;
    } 


}