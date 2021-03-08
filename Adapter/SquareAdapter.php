<?php


namespace Adapter;


use Contract\ISquare;
use Lib\SquareAreaLib;

class SquareAdapter implements ISquare
{
    protected $squareArea;

    public function __construct(SquareAreaLib $squareArea)
    {
      $this->squareArea = $squareArea;
    }

    public function squareArea(int $sideSquare)
    {
        $diagonal = sqrt(2*$sideSquare**2);
        return $this->squareArea->getSquareArea($diagonal);
    }
}