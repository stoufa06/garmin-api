<?php declare(strict_types=1);

use Garmin\Training\Workouts\Workout;
use PHPUnit\Framework\TestCase;

final class WorkoutTest extends TestCase
{
    function testEmptyWorkout() 
    {
        $this->expectException(Error::class);
        $step = new Workout();
    }
}