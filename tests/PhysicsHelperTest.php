<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 21.01.19
 * Time: 17:08
 */

use PHPUnit\Framework\TestCase;
use App\Helper\PhysicsHelper;

class PhysicsHelperTest extends TestCase
{
    public function testGetLightPathIsCorrect(): void
    {
        $physicsHelper = new PhysicsHelper();

        $this->assertEquals('Quite close' . PHP_EOL, $physicsHelper->getLightPath(10));
        $this->assertEquals('Too far' . PHP_EOL, $physicsHelper->getLightPath(1000));
    }
}