<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;



class StrenthTrainingWorkout extends Workout
{

    /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        $this->sport = 'STRENTH_TRAINING';
        unset($args['sport']);
        $this->inialiaze($args);
        
    }

}
