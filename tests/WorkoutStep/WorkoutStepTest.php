<?php declare(strict_types=1);

//use Garmin\Training\Enumeration\Enumeration;

use Garmin\Training\Exceptions\InvalidDurationType;
use Garmin\Training\Exceptions\InvalidDurationValueType;
//use Garmin\Training\Exceptions\InvalidDurationValueTypeForDurationType;
use Garmin\Training\Exceptions\InvalidIntensity;
use Garmin\Training\Exceptions\InvalidTargetType;
use Garmin\Training\Exceptions\InvalidTargetValueType;
//use Garmin\Training\Exceptions\InvalidTargetValueTypeForTargetType;
use Garmin\Training\Exceptions\InvalidWorkoutStepType;
use Garmin\Training\WorkoutSteps\WorkoutStep;
use PHPUnit\Framework\TestCase;
final class WorkoutStepTest extends TestCase
{
    function testEmptyWorkoutStep() 
    {
        $step = new WorkoutStep();
        $array = $step->toArray();
        $this->assertArrayHasKey('type', $array);
        $this->assertSame($array['type'], 'WorkoutStep');
    }

    function testInvalidWorkoutStep() 
    {
        $this->expectException(InvalidWorkoutStepType::class);
        $step = new WorkoutStep(['type' => 'WorkoutRepeatStep']);
        
    }

    function testIntensity()
    {
        $step = new WorkoutStep(['intensity' => 'REST']);
        $array = $step->toArray();
        $this->assertArrayHasKey('intensity', $array);
        $this->assertSame($array['intensity'], 'REST');

        $step->setIntensity('WARMUP');
        $array = $step->toArray();
        $this->assertArrayHasKey('intensity', $array);
        $this->assertSame($array['intensity'], 'WARMUP');

        $step->setIntensity('COOLDOWN');
        $array = $step->toArray();
        $this->assertArrayHasKey('intensity', $array);
        $this->assertSame($array['intensity'], 'COOLDOWN');
        
        $step->setIntensity('RECOVERY');
        $array = $step->toArray();
        $this->assertArrayHasKey('intensity', $array);
        $this->assertSame($array['intensity'], 'RECOVERY');
        
        $step->setIntensity('INTERVAL');
        $array = $step->toArray();
        $this->assertArrayHasKey('intensity', $array);
        $this->assertSame($array['intensity'], 'INTERVAL');
    }

    function testInvalidIntensity()
    {
        $this->expectException(InvalidIntensity::class);
        $this->expectExceptionMessage('Invalid Intensity value');
        $step = new WorkoutStep(['intensity' => 'INVALID']);
        //$this->assertSame($step->toArray(), ['intensity' => 'REST']);
    }

    function testDurationType()
    {


        $step = new WorkoutStep(['durationType' => 'TIME']);
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'TIME');


        $step->setDurationType('DISTANCE');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'DISTANCE');

        $step->setDurationType('HR_LESS_THAN');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'HR_LESS_THAN');
        
        $step->setDurationType('HR_GREATER_THAN');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'HR_GREATER_THAN');

        $step->setDurationType('CALORIES');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'CALORIES');

        $step->setDurationType('OPEN');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'OPEN');

        $step->setDurationType('POWER_LESS_THAN');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'POWER_LESS_THAN');

        $step->setDurationType('POWER_GREATER_THAN');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'POWER_GREATER_THAN');

        $step->setDurationType('REPETITION_TIME');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'REPETITION_TIME');
        
        $step->setDurationType('REPS');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'REPS');

        $step->setDurationType('TIME_AT_VALID_CDA');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'TIME_AT_VALID_CDA');

        $step->setDurationType('FIXED_REST');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationType', $array);
        $this->assertSame($array['durationType'], 'FIXED_REST');
    }
    
    function testInvalidDurationType()
    {
        $this->expectException(InvalidDurationType::class);
        //$this->expectExceptionMessage('Invalid Duration Type value');
        $step = new WorkoutStep(['durationType' => 'INVALID']);
    }

    function testDurationValueType()
    {
        $step = new WorkoutStep(['durationType' => 'HR_LESS_THAN', 'durationValueType' => 'PERCENT']);
        $step = new WorkoutStep(['durationType' => 'HR_GREATER_THAN', 'durationValueType' => 'PERCENT']);
        $step = new WorkoutStep(['durationType' => 'POWER_LESS_THAN', 'durationValueType' => 'PERCENT']);
        $step = new WorkoutStep(['durationType' => 'POWER_GREATER_THAN', 'durationValueType' => 'PERCENT']);
        $array = $step->toArray();
        $this->assertArrayHasKey('durationValueType', $array);
        $this->assertSame($array['durationValueType'], 'PERCENT');

        $step->setDurationValueType('MILE');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationValueType', $array);
        $this->assertSame($array['durationValueType'], 'MILE');

        $step->setDurationValueType('KILOMETER');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationValueType', $array);
        $this->assertSame($array['durationValueType'], 'KILOMETER');

        $step->setDurationValueType('METER');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationValueType', $array);
        $this->assertSame($array['durationValueType'], 'METER');

        $step->setDurationValueType('YARD');
        $array = $step->toArray();
        $this->assertArrayHasKey('durationValueType', $array);
        $this->assertSame($array['durationValueType'], 'YARD');
    }
    
    function testInvalidDurationValueType()
    {
        $this->expectException(InvalidDurationValueType::class);
        $this->expectExceptionMessage('Invalid Duration Value Type value');
        $step = new WorkoutStep(['durationType' => 'HR_LESS_THAN','durationValueType' => 'INVALID']);
        
    }

    function testSetInvalidDurationValueType()
    {
        $step = new WorkoutStep(['durationType' => 'HR_LESS_THAN']);
        $this->expectException(InvalidDurationValueType::class);
        $step->setDurationValueType('INVALID');
    }

    // function testInvalidDurationValueTypeForDurationType()
    // {
    //     $this->expectException(InvalidDurationValueTypeForDurationType::class);
        
    //     $step = new WorkoutStep(['durationValueType' => 'YARD']);
        
    // }

    // function testSetInvalidDurationValueTypeForDurationType()
    // {
    //     $step = new WorkoutStep(['durationType' => 'TIME']);
    //     $this->expectException(InvalidDurationValueTypeForDurationType::class);
    //     $step->setDurationValueType('YARD');
    // }

    function testTargetType()
    {
        $step = new WorkoutStep(['targetType' => 'SPEED']);
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'SPEED');
        
        $step->setTargetType('HEART_RATE');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'HEART_RATE');


        $step->setTargetType('OPEN');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'OPEN');

        $step->setTargetType('CADENCE');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'CADENCE');

        $step->setTargetType('POWER');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'POWER');

        $step->setTargetType('GRADE');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'GRADE');

        $step->setTargetType('RESISTANCE');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'RESISTANCE');

        $step->setTargetType('POWER_3S');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'POWER_3S');

        $step->setTargetType('POWER_10S');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'POWER_10S');

        $step->setTargetType('POWER_30S');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'POWER_30S');

        $step->setTargetType('POWER_LAP');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'POWER_LAP');

        $step->setTargetType('SWIM_STROKE');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'SWIM_STROKE');

        $step->setTargetType('SPEED_LAP');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'SPEED_LAP');

        $step->setTargetType('HEART_RATE_LAP');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'HEART_RATE_LAP');

        $step->setTargetType('PACE');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetType', $array);
        $this->assertSame($array['targetType'], 'PACE');
    }
    
    function testInvalidTargetType()
    {
        $this->expectException(InvalidTargetType::class);
        $this->expectExceptionMessage('Invalid Target Type value');
        $step = new WorkoutStep(['targetType' => 'INVALID']);

        $this->expectException(InvalidTargetType::class);
        $step = new WorkoutStep();
        $step->setTargetType('INVALID');
    }

    function testTargetValueType()
    {
        $step = new WorkoutStep(['targetType' => 'HEART_RATE',      'targetValueType' => 'PERCENT']);
        $step = new WorkoutStep(['targetType' => 'HEART_RATE_LAP',  'targetValueType' => 'PERCENT']);
        $step = new WorkoutStep(['targetType' => 'POWER',           'targetValueType' => 'PERCENT']);
        $step = new WorkoutStep(['targetType' => 'POWER_3S',        'targetValueType' => 'PERCENT']);
        $step = new WorkoutStep(['targetType' => 'POWER_10S',       'targetValueType' => 'PERCENT']);
        $step = new WorkoutStep(['targetType' => 'POWER_30S',       'targetValueType' => 'PERCENT']);
        $step = new WorkoutStep(['targetType' => 'POWER_LAP',       'targetValueType' => 'PERCENT']);
        $array = $step->toArray();
        $this->assertArrayHasKey('targetValueType', $array);
        $this->assertSame($array['targetValueType'], 'PERCENT');

        $step->setTargetValueType('MILE');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetValueType', $array);
        $this->assertSame($array['targetValueType'], 'MILE');

        $step->setTargetValueType('KILOMETER');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetValueType', $array);
        $this->assertSame($array['targetValueType'], 'KILOMETER');

        $step->setTargetValueType('METER');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetValueType', $array);
        $this->assertSame($array['targetValueType'], 'METER');

        $step->setTargetValueType('YARD');
        $array = $step->toArray();
        $this->assertArrayHasKey('targetValueType', $array);
        $this->assertSame($array['targetValueType'], 'YARD');
    }
    
    function testInvalidTargetValueType()
    {
        $this->expectException(InvalidTargetValueType::class);
        $this->expectExceptionMessage('Invalid Target Value Type value');
        $step = new WorkoutStep(['targetType' => 'HEART_RATE','targetValueType' => 'INVALID']);
        
    }

    function testSetInvalidTargetValueType()
    {
        $this->expectException(InvalidTargetValueType::class);
        $step = new WorkoutStep(['targetType' => 'HEART_RATE']);
        $step->setTargetValueType('INVALID');
        
    }

    // function testInvalidTargetValueTypeForTargetType()
    // {
    //     $this->expectException(InvalidTargetValueTypeForTargetType::class);
    //     $step = new WorkoutStep(['targetValueType' => 'METER']);
    // }

    // function testSetInvalidTargetValueTypeForTargetType()
    // {
    //     $this->expectException(InvalidTargetValueTypeForTargetType::class);
    //     $step = new WorkoutStep();
    //     $step->setTargetValueType('METER');
    // }


    // function testStrokeType()
    // {

    // }
    
    // function testInvalidStrokeType()
    // {

    // }

    // function testWeightDisplayUnit()
    // {

    // }
    
    // function testInvalidWeightDisplayUnit()
    // {

    // }
}