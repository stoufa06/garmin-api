<?php

declare(strict_types=1);

namespace Garmin\Training\WorkoutSteps;

class SwimmingWorkoutStep extends WorkoutStep
{

    /** @var string */
    public string $strokeType;

    /** @var string */
    public string $equipmentType;

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
    public function getStrokeType(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $value
     */
    public function setStrokeType(string $value)
    {
        // TODO implement here
    }

    /**
     * @return string
     */
    public function getEquipmentType(): string
    {
        // TODO implement here
        return "";
    }

    /**
     * @param string $value
     */
    public function setEquipmentType(string $value)
    {
        // TODO implement here
    }

}
