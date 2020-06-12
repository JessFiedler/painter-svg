<?php
class Circle extends Ellipse
{
    private $r;

    public function setSize(int $r, $useless=null)
    {
        $this->r=$r;
    }

}