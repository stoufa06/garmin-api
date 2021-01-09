<?php

declare(strict_types=1);

namespace Garmin\Training\WorkoutSteps;

use Garmin\Training\Enumeration\EquipmentType;
use Garmin\Training\Enumeration\StrokeType;
use Garmin\Training\Exceptions\InvalidEquipmentType;
use Garmin\Training\Exceptions\InvalidStrokeType;

class SwimmingWorkoutStep extends WorkoutStep
{

    /** @var string */
    public ?string $strokeType=null;

    /** @var string */
    public ?string $equipmentType=null;


    
    /**
     * @return string
     */
    public function getStrokeType(): ?string
    {
        // TODO implement here
        return $this->strokeType;
    }

    /**
     * @param string $value
     */
    public function setStrokeType(?string $value)
    {
        // TODO implement here
        if ($value !== null && $value !== '') {
            $val = StrokeType::valueOf($value);
            if ($val === false) {
                throw new InvalidStrokeType();
            }
        }
        $this->strokeType = $value;
    }

    /**
     * @return string
     */
    public function getEquipmentType(): ?string
    {
        // TODO implement here
        return $this->equipmentType;
    }

    /**
     * @param string $value
     */
    public function setEquipmentType(?string $value)
    {
        // TODO implement here
        if ($value !== null && $value !== '') {
            $val = EquipmentType::valueOf($value);
            if ($val === false) {
                throw new InvalidEquipmentType();
            }
        }
        $this->equipmentType = $value;
    }

}
