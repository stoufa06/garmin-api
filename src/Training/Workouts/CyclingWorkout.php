<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;

class CyclingWorkout extends Workout
{

    /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        $this->sport = 'CYCLING';
        unset($args['sport']);
        $this->inialiaze($args);
        
    }

}
