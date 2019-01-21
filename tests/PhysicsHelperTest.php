<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 21.01.19
 * Time: 17:08
 */

use PHPUnit\Framework\TestCase;
use App\Helper\PhysicsHelper;
use App\Helper\CalcHelper;

class PhysicsHelperTest extends TestCase
{
    public function testGetLightPathIsCorrect(): void
    {
        //dvoynik
        $calc = $this->createMock(CalcHelper::class);

        //check
        $this->assertInstanceOf(CalcHelper::class, $calc);

        //poddelka dannih
        $map = [
            [300000, 10, 3000000],
            [300000, 1000, 300000000]
        ];

        //poddelka metoda
        $calc->method('multiply')
            ->will($this->returnValueMap($map));

        //vizov s dvoynikom
        $physicsHelper = new PhysicsHelper($calc);

        $this->assertEquals('Quite close' . PHP_EOL, $physicsHelper->getLightPath(10));
        $this->assertEquals('Too far' . PHP_EOL, $physicsHelper->getLightPath(1000));
    }
}