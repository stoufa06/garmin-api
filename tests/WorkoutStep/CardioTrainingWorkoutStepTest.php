<?php declare(strict_types=1);

use Garmin\Training\Exceptions\InvalidExerciseCategory;
use Garmin\Training\WorkoutSteps\CardioTrainingWorkoutStep;
use PHPUnit\Framework\TestCase;
final class CardioTrainingWorkoutStepTest extends TestCase
{
    function testEmptyCardioTrainingWorkoutStep() 
    {
        $step = new CardioTrainingWorkoutStep();
        $array = $step->toArray();
        $this->assertArrayHasKey('type', $array);
        $this->assertSame($array['type'], 'WorkoutStep');

        //$this->assertSame($step->toArray(), ['type' => 'WorkoutStep']);
    }

    function testExerciseCategory()
    {  
        
        $step = new CardioTrainingWorkoutStep(['exerciseCategory' => 'BENCH_PRESS']);
        $array = $step->toArray();
        $this->assertArrayHasKey('exerciseCategory', $array);
        $this->assertSame($array['exerciseCategory'], 'BENCH_PRESS');
    }

    function testSetExerciseCategory()
    {  
        
        $step = new CardioTrainingWorkoutStep();
        $step->setExerciseCategory('BENCH_PRESS');
        $array = $step->toArray();
        $this->assertArrayHasKey('exerciseCategory', $array);
        $this->assertSame($array['exerciseCategory'], 'BENCH_PRESS');
    }

    function testInvalidExerciseCategory()
    {
        $this->expectException(InvalidExerciseCategory::class);
        $step = new CardioTrainingWorkoutStep(['exerciseCategory' => 'Invalid']);
    }

    function testSetInvalidExerciseCategory()
    {  
        $this->expectException(InvalidExerciseCategory::class);
        $step = new CardioTrainingWorkoutStep();
        $step->setExerciseCategory('Invalid');
    }

    function testExerciseName()
    {
        $step = new CardioTrainingWorkoutStep(['exerciseName' => 'excecice name']);
        $array = $step->toArray();
        $this->assertArrayHasKey('exerciseName', $array);
        $this->assertSame($array['exerciseName'], 'excecice name');
    }

    function testSetExerciseName()
    {
        $step = new CardioTrainingWorkoutStep();
        $step->setExerciseName('excecice name');
        $array = $step->toArray();
        $this->assertArrayHasKey('exerciseName', $array);
        $this->assertSame($array['exerciseName'], 'excecice name');
    }

    function testInvalidExerciseName()
    {
        $this->expectException(TypeError::class);
        $step = new CardioTrainingWorkoutStep(['exerciseName' => 123]);
        
    }

    function testInvalidSetExerciseName()
    {
        $this->expectException(TypeError::class);
        $step = new CardioTrainingWorkoutStep();
        $step->setExerciseName(new stdClass());
    }
}