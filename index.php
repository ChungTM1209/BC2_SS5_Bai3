<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 25/01/2019
 * Time: 15:16
 */
include_once 'Point.php';
include_once 'MoveablePoint.php';
$moveablePoint = new MoveablePoint(2, 2, 5, 4);
echo $moveablePoint . "<br>";
echo "Point move to: " . $moveablePoint->move();