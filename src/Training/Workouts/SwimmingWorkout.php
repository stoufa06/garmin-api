<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;


class SwimmingWorkout extends Workout
{

    /** @var float */
    public float $poolLength;

    /** @var string */
    public string $poolLengthUnit;

    /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        $this->sport = 'LAP_SWIMMING';
        unset($args['sport']);
        $this->inialiaze($args);
        
    }

        /**
     * @return float
     */
    public function getPoolLength(): float
    {
        // TODO implement here
        return $this->poolLength;
    }

    /**
     * @param float $value
     */
    public function setPoolLength(float $value)
    {
        // TODO implement here
        $this->poolLength = $value;
    }

    /**
     * @return string
     */
    public function getPoolLengthUnit(): string
    {
        // TODO implement here
        return $this->poolLengthUnit;
    }

    /**
     * @param string $value
     */
    public function setPoolLengthUnit(string $value)
    {
        // TODO implement here
        $this->poolLengthUnit = $value;
    }

}
