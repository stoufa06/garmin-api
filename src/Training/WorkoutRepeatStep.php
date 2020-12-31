<?php

declare(strict_types=1);

namespace Garmin\Training;

class WorkoutRepeatStep extends WorkoutStep
{

    /** @var array<[object Object]> */
    public array $steps;

    /** @var string */
    public string $repeatType;

    /** @var float */
    public float $repeatValue;



    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @return [WorkoutStep Object]
     */
    public function getSteps(): array
    {
        // TODO implement here
        return $this->steps;
    }

    /**
     * @param [object Object] $value
     */
    public function setSteps(array $value)
    {
        // TODO implement here
        $this->steps = $value;
    }

    /**
     * @return string
     */
    public function getRepeatType(): string
    {
        // TODO implement here
        return $this->repeatType;
    }

    /**
     * @param string $value
     */
    public function setRepeatType(string $value)
    {
        // TODO implement here
        $this->repeatType = $value;
    }

    /**
     * @return float
     */
    public function getRepeatValue(): float
    {
        // TODO implement here
        return $this->repeatValue;
    }

    /**
     * @param float $value
     */
    public function setRepeatValue(float $value)
    {
        // TODO implement here
        $this->repeatValue = $value;
    }

}
