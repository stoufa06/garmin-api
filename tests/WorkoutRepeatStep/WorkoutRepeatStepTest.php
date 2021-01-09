<?php declare(strict_types=1);

use Garmin\Training\Enumeration\DurationType;
use Garmin\Training\Exceptions\InvalidRepeatType;
use Garmin\Training\Exceptions\InvalidWorkoutRepeatStepType;
use Garmin\Training\WorkoutRepeatSteps\WorkoutRepeatStep;
use Garmin\Training\WorkoutSteps\WorkoutStep;
use PHPUnit\Framework\TestCase;

final class WorkoutRepeatStepTest extends TestCase
{
    function testEmptyWorkoutRepeatStep() 
    {
        $step = new WorkoutRepeatStep();
        $array = $step->toArray();
        $this->assertArrayHasKey('type', $array);
        $this->assertSame($array['type'], 'WorkoutRepeatStep');
    }

    function testInvalidWorkoutStep() 
    {
        $this->expectException(InvalidWorkoutRepeatStepType::class);
        $step = new WorkoutRepeatStep(['type' => 'WorkoutStep']);
    }


    function testRepeatType()
    {
        $step = new WorkoutRepeatStep(['repeatType' => 'REPEAT_UNTIL_STEPS_CMPLT']);
        $array = $step->toArray();
        $this->assertArrayHasKey('repeatType', $array);
        $this->assertSame($array['repeatType'],'REPEAT_UNTIL_STEPS_CMPLT');
    }

    function testSetRepeatType()
    {
        //$step->setIntensity('WARMUP');
        $step = new WorkoutRepeatStep();
        $step->setRepeatType('REPEAT_UNTIL_STEPS_CMPLT');
        $array = $step->toArray();
        $this->assertArrayHasKey('repeatType', $array);
        $this->assertSame($array['repeatType'],'REPEAT_UNTIL_STEPS_CMPLT');
    }

    function testInvalidRepeatType()
    {
        $this->expectException(InvalidRepeatType::class);
        $step = new WorkoutRepeatStep(['repeatType' => 'INVLAID']);
    }

    function testSetInvalidRepeatType()
    {
        $this->expectException(InvalidRepeatType::class);
        $step = new WorkoutRepeatStep();
        $step->setRepeatType('INVALID');
    }

    function testRepeatValue()
    {
        $step = new WorkoutRepeatStep(['repeatValue' => 200]);
        $array = $step->toArray();
        $this->assertArrayHasKey('repeatValue', $array);
        $this->assertSame($array['repeatValue'],200.0);
    
    }

    function testSetRepeatValue()
    {
        $step = new WorkoutRepeatStep();
        $step->setRepeatValue(12);
        $array = $step->toArray();
        $this->assertArrayHasKey('repeatValue', $array);
        $this->assertSame($array['repeatValue'],12.0);
    }

    function testInvalidRepeatValue()
    {
        $this->expectException(TypeError::class);
        $step = new WorkoutRepeatStep(['repeatValue' => '200']);
    }

    function testSetInvalidRepeatValue()
    {
        $this->expectException(TypeError::class);
        $step = new WorkoutRepeatStep();
        $step->setRepeatValue('12');
    }

    function testSetps()
    {
        $steps = [
            [
                'type'      => 'WorkoutStep',
                'stepId'    => 123456,
                'stepOrder' => 1,
                'intensity' => 'WARMUP',
                'durationType' => DurationType::nameOf(DurationType::CALORIES),
                'durationValue' => 2,
                'targetType' => 'OPEN',
            ],
            [
                'type'      => 'WorkoutRepeatStep',
                'stepId'    => 123456,
                'stepOrder' => 2,
                'steps'     => [
                    [
                        'type'      => 'WorkoutStep',
                        'stepId'    => 12345678,
                        'stepOrder' => 5,
                        'intensity' => 'INTERVAL',
                        'durationType' => 'TIME',
                        'durationValue' => 120,
                        'TargetType'    => 'POWER',
                        'targetValue'   => 1
                    ],
                    [
                        "type"=> "WorkoutStep",
                        "stepId"=> 1478,
                        "stepOrder"=> 6,
                        "intensity"=> "INTERVAL",
                        "description"=> null,
                        "durationType"=> "DISTANCE",
                        "durationValue"=> 32186.880859,
                        "durationValueType"=> "MILE",
                        "targetType"=> "OPEN",
                    ]
                ]
            ]
        ];
        $step = new WorkoutRepeatStep(['steps' => $steps]);
        $array = $step->toArray();
        $this->assertArrayHasKey('steps', $array);
        //print_r($array['steps']);
        
        //$this->assertSame($array['repeatType'],'REPEAT_UNTIL_STEPS_CMPLT');
    }

    function testSetSteps()
    {
        $steps = [
            [
                'type'      => 'WorkoutStep',
                'stepId'    => 123456,
                'stepOrder' => 1,
                'intensity' => 'WARMUP',
                'durationType' => DurationType::nameOf(DurationType::CALORIES),
                'durationValue' => 2,
                'targetType' => 'OPEN',
            ],
            [
                'type'      => 'WorkoutRepeatStep',
                'stepId'    => 123456,
                'stepOrder' => 2,
                'steps'     => [
                    [
                        'type'      => 'WorkoutStep',
                        'stepId'    => 12345678,
                        'stepOrder' => 5,
                        'intensity' => 'INTERVAL',
                        'durationType' => 'TIME',
                        'durationValue' => 120,
                        'TargetType'    => 'POWER',
                        'targetValue'   => 1
                    ],
                    [
                        "type"=> "WorkoutStep",
                        "stepId"=> 1478,
                        "stepOrder"=> 6,
                        "intensity"=> "INTERVAL",
                        "description"=> null,
                        "durationType"=> "DISTANCE",
                        "durationValue"=> 32186.880859,
                        "durationValueType"=> "MILE",
                        "targetType"=> "OPEN",
                    ]
                ]
            ]
        ];
        $step = new WorkoutRepeatStep();
        $step->setSteps($steps);
        $steps = $step->getSteps();
        $testInstanceOf = function($item) use(&$testInstanceOf){
            $this->assertInstanceOf(WorkoutStep::class, $item);  
            if ($item instanceof WorkoutRepeatStep && ($steps = $item->getSteps('steps'))) {
                array_walk($steps, $testInstanceOf);
            }
        };
        array_walk($steps, $testInstanceOf);

        $array = $step->toArray();
        $this->assertArrayHasKey('steps', $array);
    }

    function testInvalidSteps()
    {

    }

    function testSetInvalidSteps()
    {
        
    }
}