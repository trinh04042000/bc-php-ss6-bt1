<?php
include "index1.php";
$resizes[0] = new Circle('circle', 13);
$resizes[1] = new Rectangle('rectangle', 120, 220);
$resizes[2] = new Square('square', 90, 90);
echo 'Interface Resizeable: <br>';
foreach ($resizes as $resize)
{
    echo $resize->show() . ' Area: ' . $resize->calculateArea() . '<br>';
}
echo 'After Interface Resizeable: <br>';
$random = random_int(1,100);
foreach ($resizes as $resize)
{
    $resize->resize($random);
    echo $resize->show() . ' Area: ' . $resize->calculateArea() . '<br>';
}