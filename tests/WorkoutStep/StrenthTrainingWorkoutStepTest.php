<?php declare(strict_types=1);

use Garmin\Training\Exceptions\InvalidWeightUnit;
use Garmin\Training\WorkoutSteps\StrengthTrainingWorkoutStep;
use PHPUnit\Framework\TestCase;
final class StrenthTrainingWorkoutStepTest extends TestCase
{
    function testEmptyCardioTrainingWorkoutStep() 
    {
        $step = new StrengthTrainingWorkoutStep();
        $array = $step->toArray();
        $this->assertArrayHasKey('type', $array);
        $this->assertSame($array['type'], 'WorkoutStep');
    }


    function testWeightValue() 
    {
        $step = new StrengthTrainingWorkoutStep(['weightValue' => 300]);
        $array = $step->toArray();
        $this->assertArrayHasKey('weightValue', $array);
        $this->assertEquals($array['weightValue'], 300);
        $this->assertIsFloat($array['weightValue']);
    }

    function testSetWeightValue()
    {
        $step = new StrengthTrainingWorkoutStep();
        $step->setWeightValue(300);
        $array = $step->toArray();
        $this->assertArrayHasKey('weightValue', $array);
        $this->assertEquals($array['weightValue'], 300);
        $this->assertIsFloat($array['weightValue']);
    }

    function testInvalidWeightValue()
    {
        $this->expectException(TypeError::class);
        $step = new StrengthTrainingWorkoutStep(['weightValue' => '123']);
    }

    function testSetInvalidWeightValue()
    {
        $this->expectException(TypeError::class);
        $step = new StrengthTrainingWorkoutStep();
        $step->setWeightValue('300');
    }

    function testWeightUnit()
    {
        $step = new StrengthTrainingWorkoutStep(['weightDisplayUnit' => 'KILOGRAM']);
        $array = $step->toArray();
        $this->assertArrayHasKey('weightDisplayUnit', $array);
        $this->assertSame($array['weightDisplayUnit'], 'KILOGRAM');
    }
    function testSetWeightUnit()
    {
        $step = new StrengthTrainingWorkoutStep();
        $step->setWeightDisplayUnit('KILOGRAM');
        $array = $step->toArray();
        $this->assertArrayHasKey('weightDisplayUnit', $array);
        //print_r($array);
        $this->assertSame($array['weightDisplayUnit'], 'KILOGRAM');
    }

    function testInvalidWeightUnit()
    {
        $this->expectException(InvalidWeightUnit::class);
        $step = new StrengthTrainingWorkoutStep(['weightDisplayUnit' => 'INVALID']);

    }

    function testSetInvalidWeightUnit()
    {
        $this->expectException(InvalidWeightUnit::class);
        $step = new StrengthTrainingWorkoutStep();
        $step->setWeightDisplayUnit('INVALID');
    }

}