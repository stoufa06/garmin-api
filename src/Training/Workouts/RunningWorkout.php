<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;


class RunningWorkout extends Workout
{

    /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        $this->sport = 'RUNNING';
        unset($args['sport']);
        $this->inialiaze($args);
        
    }

}
