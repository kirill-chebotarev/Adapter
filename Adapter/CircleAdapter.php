<?php


namespace Adapter;


use Contract\ICircle;
use Lib\CircleAreaLib;

class CircleAdapter implements ICircle
{
    protected $circleArea;

    public function __construct(CircleAreaLib $circleArea)
    {
        $this->circleArea = $circleArea;
    }

    public function circleArea(int $circumference)
    {
        $diagonal =$circumference/M_PI;
        return $this->circleArea->getCircleArea($diagonal);
    }

}