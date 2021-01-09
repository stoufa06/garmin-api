<?php declare(strict_types=1);

use Garmin\Training\Workouts\RunningWorkout;
use PHPUnit\Framework\TestCase;

final class RunningWorkoutTest extends TestCase
{
    function testEmptyRunningWorkout() 
    {
        $workout = new RunningWorkout();
        
        $array = $workout->toArray();
        $this->assertArrayHasKey('sport', $array);
        $this->assertSame($array['sport'], 'RUNNING');
    }

    function testRunningWorkout() 
    {
        $step = new RunningWorkout(
            [
                'workoutId' => 2201,
                'ownerId' => 232,
                'workoutName' => 'Bike Workout',
                'description' => NULL,
                'updatedDate' => '2018-10-23T21:17:53.0',
                'createdDate' => '2018-10-23T21:17:53.0',
                'sport' => 'RUNNING',
                'estimatedDurationInSecs' => NULL,
                'estimatedDistanceInMeters' => NULL,
                'poolLength' => NULL,
                'poolLengthUnit' => NULL,
                'workoutProvider' => NULL,
                'workoutSourceId' => NULL,
                'steps' => [
                  0 => [
                    'type' => 'WorkoutStep',
                    'stepId' => 1475,
                    'stepOrder' => 1,
                    'intensity' => 'WARMUP',
                    'description' => NULL,
                    'durationType' => 'CALORIES',
                    'durationValue' => 2,
                    'durationValueType' => NULL,
                    'targetType' => 'OPEN',
                    'targetValue' => NULL,
                    'targetValueLow' => NULL,
                    'targetValueHigh' => NULL,
                    'targetValueType' => NULL,
                    'strokeType' => NULL,
                    'equipmentType' => NULL,
                    'exerciseCategory' => NULL,
                    'exerciseName' => NULL,
                    'weightValue' => NULL,
                    'weightDisplayUnit' => NULL,
                  ],
                  1 => [
                    'type' => 'WorkoutRepeatStep',
                    'stepId' => 1476,
                    'stepOrder' => 2,
                    'repeatType' => NULL,
                    'repeatValue' => NULL,
                    'steps' => [
                      0 => [
                        'type' => 'WorkoutStep',
                        'stepId' => 1477,
                        'stepOrder' => 5,
                        'intensity' => 'WARMUP',
                        'description' => NULL,
                        'durationType' => 'TIME',
                        'durationValue' => 120,
                        'durationValueType' => NULL,
                        'targetType' => 'POWER',
                        'targetValue' => 1,
                        'targetValueLow' => NULL,
                        'targetValueHigh' => NULL,
                        'targetValueType' => NULL,
                        'strokeType' => NULL,
                        'equipmentType' => NULL,
                        'exerciseCategory' => NULL,
                        'exerciseName' => NULL,
                        'weightValue' => NULL,
                        'weightDisplayUnit' => NULL,
                      ],
                      1 => [
                        'type' => 'WorkoutStep',
                        'stepId' => 1478,
                        'stepOrder' => 6,
                        'intensity' => 'WARMUP',
                        'description' => NULL,
                        'durationType' => 'DISTANCE',
                        'durationValue' => 32186.880859,
                        'durationValueType' => 'MILE',
                        'targetType' => 'OPEN',
                        'targetValue' => NULL,
                        'targetValueLow' => NULL,
                        'targetValueHigh' => NULL,
                        'targetValueType' => NULL,
                        'strokeType' => NULL,
                        'equipmentType' => NULL,
                        'exerciseCategory' => NULL,
                        'exerciseName' => NULL,
                        'weightValue' => NULL,
                        'weightDisplayUnit' => NULL,
                      ],
                    ],
                  ],
                ],
              ]
        );
        //print_r($step);
        $array = $step->toArray();
        print_r($array['updatedDate']);
        $this->assertArrayHasKey('sport', $array);
        $this->assertSame($array['sport'], 'RUNNING');
    }
}