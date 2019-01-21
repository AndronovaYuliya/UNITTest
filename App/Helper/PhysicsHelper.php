<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 21.01.19
 * Time: 16:57
 */

namespace App\Helper;


class PhysicsHelper
{
    private const  LIGHT_SPEED = 300000;
    private const  LIMIT_PATH = 30000000;

    public function getLightPath(int $time): string
    {
        $calc = new CalcHelper();
        $path = $calc->multiply($time, self::LIGHT_SPEED);

        return $path <= self::LIMIT_PATH ? "Quite close".PHP_EOL : "Too far".PHP_EOL;
    }
}