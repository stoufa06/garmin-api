<?php

declare(strict_types=1);

namespace Garmin\Training\WorkoutSteps;

use Garmin\Training\Enumeration\ExerciseCategory;
use Garmin\Training\Exceptions\InvalidExerciseCategory;
use Garmin\Training\Traits\FunctionsTrait;

class CardioTrainingWorkoutStep extends WorkoutStep
{

    use FunctionsTrait;
    /** @var string */
    public ?string $exerciseCategory=null;

    /** @var string */
    public ?string $exerciseName=null;

    

    /**
     * @return string
     */
    public function getExerciseCategory(): ?string
    {
        // TODO implement here
        return $this->exerciseCategory;
    }

    /**
     * @param string $value
     */
    public function setExerciseCategory(?string $value)
    {
        // TODO implement here
        if ($value !== null && $value !== '') {
            $val = ExerciseCategory::valueOf($value);
            if ($val === false) {
                throw new InvalidExerciseCategory();
            }
        }
        $this->exerciseCategory = $value;
    }

    /**
     * @return string
     */
    public function getExerciseName(): ?string
    {
        // TODO implement here
        return $this->exerciseName;
    }

    /**
     * @param string $value
     */
    public function setExerciseName(?string $value)
    {
        // TODO implement here
        $this->exerciseName = $value;
    }

}
