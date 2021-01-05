<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;

class PilatesWorkout extends Workout
{

   /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        $this->sport = 'PILATES';
        unset($args['sport']);
        $this->inialiaze($args);
        
    }

}
