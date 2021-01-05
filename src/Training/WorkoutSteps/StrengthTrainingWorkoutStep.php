<?php

declare(strict_types=1);

namespace Garmin\Training\WorkoutSteps;

class StrengthTrainingWorkoutStep extends CardioTrainingWorkoutStep
{

    /** @var float */
    public float $weightValue;

    /** @var string */
    public string $weightDisplayUnit;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @return float
     */
    public function getWeightValue(): float
    {
        // TODO implement here
        return 0.0;
    }

    /**
     * @param float $value
     */
    public function setWeightValue(float $value)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getWeightDisplayUnit(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $value
     */
    public function setWeightDisplayUnit(string $value)
    {
        // TODO implement here
    }

}
