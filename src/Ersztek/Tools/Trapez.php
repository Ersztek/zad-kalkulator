<?php

namespace Ersztek\Tools;

class Trapez
{
    private $a;
    private $b;
    private $h;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }
    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }
    public function getH()
    {
        return $this->h;
    }


    public function trapez()
    {
         return (($this->a + $this->b)*$this->h)/2;
    }
}
