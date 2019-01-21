<?php

require __DIR__ . '/../vendor/autoload.php';

/*use App\Helper\CalcHelper;

$calc = new CalcHelper();

$a = $argv[1];
$b = $argv[2];

echo "Result for multiply $a by $b: " . $calc->multiply($a, $b) . PHP_EOL;
try {
    echo "Result for division $a by $b: " . $calc->divide($a, $b) . PHP_EOL;
}catch (\InvalidArgumentException $exception){
    echo $exception->getMessage();
}
*/

use App\Helper\PhysicsHelper;

$physics=new PhysicsHelper();
$a = $argv[1];

echo 'Light will travel: '.$physics->getLightPath($a);