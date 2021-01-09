<?php declare(strict_types=1);

use Garmin\Training\Exceptions\InvalidEquipmentType;
use Garmin\Training\Exceptions\InvalidStrokeType;
use Garmin\Training\WorkoutSteps\SwimmingWorkoutStep;
use PHPUnit\Framework\TestCase;
final class SwimmingWorkoutStepTest extends TestCase
{
    function testEmptySwimmingWorkoutStepTest() 
    {
        $step = new SwimmingWorkoutStep();
        $array = $step->toArray();
        $this->assertArrayHasKey('type', $array);
        $this->assertSame($array['type'], 'WorkoutStep');
    }

    function testStrokeType() 
    {
        $step = new SwimmingWorkoutStep(['strokeType' => 'BACKSTROKE']);
        $array = $step->toArray();
        $this->assertArrayHasKey('strokeType', $array);
        $this->assertSame($array['strokeType'], 'BACKSTROKE');
        
    }


    function testSetStrokeType()
    {
        $step = new SwimmingWorkoutStep();
        $step->setStrokeType('BACKSTROKE');
        $array = $step->toArray();
        $this->assertArrayHasKey('strokeType', $array);
        $this->assertSame($array['strokeType'], 'BACKSTROKE');
    }

    function testInvalidStrokeType()
    {
        $this->expectException(InvalidStrokeType::class);
        $step = new SwimmingWorkoutStep(['strokeType' => 'INVALID']);
    }

    function testSetInvalidStokeType() 
    {
        $this->expectException(InvalidStrokeType::class);
        $step = new SwimmingWorkoutStep();
        $step->setStrokeType('INVALID');
    }

    function testEquipmentType()
    {
        $step = new SwimmingWorkoutStep(['equipmentType' => 'SWIM_FINS']);
        $array = $step->toArray();
        $this->assertArrayHasKey('equipmentType', $array);
        $this->assertSame($array['equipmentType'], 'SWIM_FINS');
    }

    function testSetEquipmentType()
    {
        $step = new SwimmingWorkoutStep();
        $step->setEquipmentType('SWIM_FINS');
        $array = $step->toArray();
        $this->assertArrayHasKey('equipmentType', $array);
        $this->assertSame($array['equipmentType'], 'SWIM_FINS');
    }

    function testInvalidEquipmentType()
    {
        $this->expectException(InvalidEquipmentType::class);
        $step = new SwimmingWorkoutStep(['equipmentType' => 'INVALID']);
    }

    function testSetInvalidEquipmentType()
    {
        $this->expectException(InvalidEquipmentType::class);
        $step = new SwimmingWorkoutStep();
        $step->setEquipmentType('INVALID');
    }
    
}