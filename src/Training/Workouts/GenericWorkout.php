<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;

class GenericWorkout extends Workout
{

    /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        $this->sport = 'GENERIC';
        unset($args['sport']);
        $this->inialiaze($args);
        
    }

}
