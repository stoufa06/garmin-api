<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;

class YogaWorkout extends Workout
{

    /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        $this->sport = 'YOGA';
        unset($args['sport']);
        $this->inialiaze($args);
        
    }

}
