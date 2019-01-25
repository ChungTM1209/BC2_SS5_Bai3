<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 25/01/2019
 * Time: 15:09
 */
include_once 'Point.php';

class MoveablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;

    public function __construct($x, $y, $xS, $yS)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xS;
        $this->ySpeed = $yS;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setSpeed($xS, $yS)
    {
        $this->xSpeed = $xS;
        $this->ySpeed = $yS;
    }

    public function getSpeed()
    {
        $arr[] = $this->getXSpeed();
        $arr[] = $this->getYSpeed();
        return $arr;
    }

    public function __toString()
    {
        return parent::__toString() . "Speed = " . json_encode($this->getSpeed());
    }

    public function move()
    {
        $this->x += $this->getXSpeed();
        $this->y += $this->getYSpeed();
        return "[" . $this->x . "," . $this->y . "]";
    }
}