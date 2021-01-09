<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;

use Garmin\Training\Enumeration\UnitType;
use Garmin\Training\Enumeration\WorkoutStepType;
use Garmin\Training\Exceptions\InvalidRepeatType;
use Garmin\Training\Exceptions\InvalidUnitType;
use Garmin\Training\WorkoutRepeatSteps\SwimmingWorkoutRepeatStep;
use Garmin\Training\WorkoutSteps\SwimmingWorkoutStep;

class SwimmingWorkout extends Workout
{

    const SPORT = 'LAP_SWIMMING';

    /** @var float */
    public ?float $poolLength=null;

    /** @var string */
    public ?string $poolLengthUnit=null;

    /**
     * @return float
     */
    public function getPoolLength(): ?float
    {
        // TODO implement here
        return $this->poolLength;
    }

    /**
     * @param float $value
     */
    public function setPoolLength(?float $value)
    {
        // TODO implement here
        $this->poolLength = $value;
    }

    /**
     * @return string
     */
    public function getPoolLengthUnit(): ?string
    {
        // TODO implement here
        return $this->poolLengthUnit;
    }

    /**
     * @param string $value
     */
    public function setPoolLengthUnit(?string $value)
    {
        // TODO implement here
        if ($value) {
            $val = UnitType::valueOf($value);
            if ($val === false) {
                throw new InvalidUnitType();
            }
        }
        
        $this->poolLengthUnit = $value;
    }

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
                $step = new SwimmingWorkoutStep($value);
            }
            elseif($repeatType == WorkoutStepType::WorkoutRepeatStep)
            {
                $step = new SwimmingWorkoutRepeatStep($value);
            }
            $this->steps [] = $step;
        }
    }

}
