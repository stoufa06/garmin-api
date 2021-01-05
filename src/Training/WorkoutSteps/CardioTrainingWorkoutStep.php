<?php

declare(strict_types=1);

namespace Garmin\Training\WorkoutSteps;

class CardioTrainingWorkoutStep extends WorkoutStep
{

    /** @var string */
    public string $exerciseCategory;

    /** @var string */
    public string $exerciseName;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @return string
     */
    public function getExerciseCategory(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $value
     */
    public function setExerciseCategory(string $value)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getExerciseName(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $value
     */
    public function setExerciseName(string $value)
    {
        // TODO implement here
    }

}
