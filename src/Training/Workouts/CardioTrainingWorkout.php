<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;

class CardioTrainingWorkout extends Workout
{

    /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        $this->sport = 'CARDIO_TRAINING';
        unset($args['sport']);
        $this->inialiaze($args);
        
    }

}
