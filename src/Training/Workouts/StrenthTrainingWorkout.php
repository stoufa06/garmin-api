<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;

use Garmin\Training\Enumeration\WorkoutStepType;
use Garmin\Training\Exceptions\InvalidRepeatType;
use Garmin\Training\WorkoutRepeatSteps\StrengthTrainingWorkoutRepeatStep;
use Garmin\Training\WorkoutSteps\StrengthTrainingWorkoutStep;

class StrenthTrainingWorkout extends Workout
{
    const SPORT = 'STRENTH_TRAINING';

    /**
     * @param [object Object] $value
     */
    public function setSteps(array $steps) 
    {
        
        foreach ($steps as $key => $value) {
            $repeatType = WorkoutStepType::valueOf($value['type']?? '');
            if ($repeatType === false) 
            {
                throw new InvalidRepeatType();
            }
            elseif($repeatType == WorkoutStepType::WorkoutStep)
            {
                $step = new StrengthTrainingWorkoutStep($value);
            }
            elseif($repeatType == WorkoutStepType::WorkoutRepeatStep)
            {
                $step = new StrengthTrainingWorkoutRepeatStep($value);
            }
            $this->steps [] = $step;
        }
    }

}
