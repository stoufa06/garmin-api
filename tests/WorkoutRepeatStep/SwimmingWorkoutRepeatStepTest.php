<?php declare(strict_types=1);

use Garmin\Training\Enumeration\DurationType;
use Garmin\Training\Exceptions\InvalidWorkoutRepeatStepType;
use Garmin\Training\WorkoutRepeatSteps\SwimmingWorkoutRepeatStep;
use Garmin\Training\WorkoutSteps\SwimmingWorkoutStep;
use PHPUnit\Framework\TestCase;

final class SwimmingWorkoutRepeatStepTest extends TestCase
{
    function testEmptySwimmingWorkoutRepeatStep() 
    {
        $step = new SwimmingWorkoutRepeatStep();
        $array = $step->toArray();
        $this->assertArrayHasKey('type', $array);
        $this->assertSame($array['type'], 'WorkoutRepeatStep');
    }

    function testInvalidWorkoutStep() 
    {
        $this->expectException(InvalidWorkoutRepeatStepType::class);
        $step = new SwimmingWorkoutRepeatStep(['type' => 'WorkoutStep']);
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
        $step = new SwimmingWorkoutRepeatStep(['steps' => $steps]);
        //print_r($step);
        $steps = $step->getSteps();

        $testInstanceOf = function($item) use(&$testInstanceOf){
            $this->assertInstanceOf(SwimmingWorkoutStep::class, $item);  
            if ($item instanceof SwimmingWorkoutRepeatStep && ($steps = $item->getSteps('steps'))) {
                array_walk($steps, $testInstanceOf);
            }
        };
        array_walk($steps, $testInstanceOf);
        $array = $step->toArray();
        $this->assertArrayHasKey('steps', $array);
        //print_r($array['steps']);
        
        //$this->assertSame($array['repeatType'],'REPEAT_UNTIL_STEPS_CMPLT');
    }
}
