<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;

use Garmin\Training\Enumeration\WorkoutStepType;
use Garmin\Training\Exceptions\InvalidRepeatType;
use Garmin\Training\WorkoutRepeatSteps\CardioTrainingWorkoutRepeatStep;
use Garmin\Training\WorkoutSteps\CardioTrainingWorkoutStep;

class CardioTrainingWorkout extends Workout
{
    const SPORT = 'CARDIO_TRAINING';
    
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
                $step = new CardioTrainingWorkoutStep($value);
            }
            elseif($repeatType == WorkoutStepType::WorkoutRepeatStep)
            {
                $step = new CardioTrainingWorkoutRepeatStep($value);
            }
            $this->steps [] = $step;
        }
    }

}
