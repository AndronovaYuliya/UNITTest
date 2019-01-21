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

    /**
     * @var CalcHelper
     */
    private $calc;

    /**
     * PhysicsHelper constructor.
     * @param CalcHelper $calc
     *
     */
    public function __construct(CalcHelper $calc)
    {
        //dependency injection
        $this->calc = $calc;
    }

    /**
     * @param int $time
     * @return string
     */
    public function getLightPath(int $time): string
    {
        $path = $this->calc->multiply(self::LIGHT_SPEED, $time);

        return $path <= self::LIMIT_PATH ? "Quite close" . PHP_EOL : "Too far" . PHP_EOL;
    }
}