<?php

declare(strict_types=1);

namespace Garmin\Training\WorkoutRepeatSteps;
use Garmin\Training\Traits\WorkoutRepeatStepTrait;
use Garmin\Training\WorkoutSteps\CardioTrainingWorkoutStep;

class CardioTrainingWorkoutRepeatStep extends CardioTrainingWorkoutStep
{

    use WorkoutRepeatStepTrait;
    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

}
