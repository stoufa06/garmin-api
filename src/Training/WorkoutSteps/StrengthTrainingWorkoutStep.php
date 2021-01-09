<?php

declare(strict_types=1);

namespace Garmin\Training\WorkoutSteps;

use Garmin\Training\Enumeration\WeightUnit;
use Garmin\Training\Exceptions\InvalidWeightUnit;

class StrengthTrainingWorkoutStep extends CardioTrainingWorkoutStep
{

    /** @var float */
    public ?float $weightValue=null;

    /** @var string */
    public ?string $weightDisplayUnit=null;

    /**
     * @return float
     */
    public function getWeightValue(): ?float
    {
        // TODO implement here
        return $this->weightValue;
    }

    /**
     * @param float $value
     */
    public function setWeightValue(?float $value)
    {
        // TODO implement here
        $this->weightValue = $value;
    }

    /**
     * @return string
     */
    public function getWeightDisplayUnit(): ?string
    {
        // TODO implement here
        return $this->weightDisplayUnit;
    }

    /**
     * @param string $value
     */
    public function setWeightDisplayUnit(?string $value)
    {
        // TODO implement here
        if ($value !== null && $value !== '') {
            $val = WeightUnit::valueOf($value);
            if ($val === false) {
                throw new InvalidWeightUnit();
            }
        }
        $this->weightDisplayUnit = $value;
    }

}
