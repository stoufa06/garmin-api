<?php

declare(strict_types=1);

namespace Garmin\Training\WorkoutSteps;

use Garmin\Training\Enumeration\DurationType;
use Garmin\Training\Enumeration\DurationValueType;
use Garmin\Training\Enumeration\Intensity;
use Garmin\Training\Enumeration\TargetType;
use Garmin\Training\Enumeration\WorkoutStepType;
use Garmin\Training\Exceptions\InvalidDurationType;
use Garmin\Training\Exceptions\InvalidDurationValueType;
use Garmin\Training\Exceptions\InvalidDurationValueTypeForDurationType;
use Garmin\Training\Exceptions\InvalidIntensity;
use Garmin\Training\Exceptions\InvalidTargetType;
use Garmin\Training\Exceptions\InvalidTargetValueType;
use Garmin\Training\Exceptions\InvalidTargetValueTypeForTargetType;
use Garmin\Training\Exceptions\InvalidWorkoutStepType;
use Garmin\Training\Traits\FunctionsTrait;

class WorkoutStep implements WorkoutStepInterface
{
    /** @var string */
    public ?string $type='WorkoutStep';

    /** @var int */
    public ?int $stepId=null;

    /** @var int */
    public ?int $stepOrder=null;

    /** @var string */
    public ?string $intensity=null;

    /** @var string */
    public ?string $description=null;

    /** @var string */
    public ?string $durationType=null;

    /** @var float */
    public ?float $durationValue=null;

    /** @var string */
    public ?string $durationValueType=null;

    /** @var string */
    public ?string $targetType=null;

    /** @var float */
    public ?float $targetValue=null;

    /** @var float */
    public ?float $targetValueLow=null;

    /** @var float */
    public ?float $targetValueHigh=null;

    /** @var string */
    public ?string $targetValueType=null;

    use FunctionsTrait;

    /**
     * Default constructor
     *
     * @param array $args
     * @throws InvalidWorkoutStepType
     * @throws InvalidDurationType
     * @throws InvalidDurationValueType
     * @throws InvalidDurationValueTypeForDurationType
     * @throws InvalidIntensity
     * @throws InvalidTargetType
     * @throws InvalidTargetValueType
     * @throws InvalidTargetValueTypeForTargetType 
     */
    public function __construct(array $args = [])
    {
        // ...
        if (isset($args['type']) && $args['type'] != 'WorkoutStep') {
            throw new InvalidWorkoutStepType();
        }
        $this->inialiaze($args);

    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        // TODO implement here
        return $this->type;
    }

    /**
     *
     * @param string|null $value
     * @return void
     * @throws InvalidWorkoutStepType
     */
    public function setType(?string $value)
    {
        // TODO implement here
        $val = WorkoutStepType::valueOf($value);
        if ($val === false) {
            throw new InvalidWorkoutStepType();
        }
        
        $this->type = $value;
    }

    /**
     * @return int
     */
    public function getStepId(): ?int
    {
        // TODO implement here
        return $this->stepId;
    }

    /**
     * @param int $value
     */
    public function setStepId(?int $value)
    {
        // TODO implement here
        $this->stepId = $value;
    }

    /**
     * @return int
     */
    public function getStepOrder(): ?int
    {
        // TODO implement here
        return $this->stepOrder;
    }

    /**
     * @param int $value
     */
    public function setStepOrder(?int $value)
    {
        // TODO implement here
        $this->stepOrder = $value;
    }

    /**
     * @return string
     */
    public function getIntensity(): ?string
    {
        // TODO implement here
        return $this->intensity;
    }

    /**
     * @param string $value
     */
    public function setIntensity(?string $value)
    {
        // TODO implement here
        if ($value !== null && $value !== '') {
            $val = Intensity::valueOf($value);
            if ($val === false) {
                throw new InvalidIntensity();
            }
        }
        
        $this->intensity = $value;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        // TODO implement here
        return $this->description;
    }

    /**
     * @param string $value
     */
    public function setDescription(?string $value)
    {
        // TODO implement here
        $this->description = $value;
    }

    /**
     * @return string
     */
    public function getDurationType(): ?string
    {
        // TODO implement here
        return $this->durationType;
    }

    /**
     * @param string $value
     */
    public function setDurationType(?string $value)
    {

        if ($value !== null && $value !== '') {
            $val = DurationType::valueOf($value);
            if ($val === false) {
                throw new InvalidDurationType();
            }
        }
        $this->durationType = $value;
    }

    /**
     * @return float
     */
    public function getDurationValue(): ?float
    {
        // TODO implement here
        return $this->durationValue;
    }

    /**
     * @param float $value
     */
    public function setDurationValue(?float $value)
    {
        // TODO implement here
        $this->durationValue = $value;
    }

    /**
     * @return string
     */
    public function getDurationValueType(): ?string
    {
        
        // TODO implement here
        return $this->durationValueType;
    }

    /**
     * @param string $value
     */
    public function setDurationValueType(?string $value)
    {
        if ($value !== null && $value !== '') {
            $val = DurationValueType::valueOf($value);
            if ($val === false) {
                throw new InvalidDurationValueType();
            }
            /*elseif (!in_array(DurationType::valueOf($this->durationType), [DurationType::HR_GREATER_THAN, DurationType::HR_LESS_THAN, DurationType::POWER_GREATER_THAN, DurationType::POWER_LESS_THAN])) {
                throw new InvalidDurationValueTypeForDurationType();
            }*/
        }
        // TODO implement here
        $this->durationValueType = $value;
    }

    /**
     * @return string
     */
    public function getTargetType(): ?string
    {
        // TODO implement here
   
        return $this->targetType;
    }

    /**
     * @param string $value
     */
    public function setTargetType(?string $value)
    {
        // TODO implement here
        if ($value !== null && $value !== '') {
            $val = TargetType::valueOf($value);
            if ($val === false) {
                throw new InvalidTargetType();
            }
        }
        $this->targetType = $value;
    }

    /**
     * @return float
     */
    public function getTargetValue(): ?float
    {
        // TODO implement here
        return $this->targetValue;
    }

    /**
     * @param float $value
     */
    public function setTargetValue(?float $value)
    {
        // TODO implement here
        $this->targetValue = $value;
    }

    /**
     * @return float
     */
    public function getTargetValueLow(): ?float
    {
        // TODO implement here
        return $this->targetValueLow ;
    }

    /**
     * @param float $value
     */
    public function setTargetValueLow(?float $value)
    {
        // TODO implement here
        $this->targetValueLow = $value;
    }

    /**
     * @return float
     */
    public function getTargetValueHigh(): ?float
    {
        // TODO implement here
        return $this->targetValueHigh;
    }

    /**
     * @param float $value
     */
    public function setTargetValueHigh(?float $value)
    {
        // TODO implement here
        $this->targetValueHigh = $value;
    }

    /**
     * @return string
     */
    public function getTargetValueType(): ?string
    {
        // TODO implement here
        return $this->targetValueType;
    }

    /**
     * @param string $value
     */
    public function setTargetValueType(?string $value)
    {
        if ($value !== null && $value !== '') {
            $val = DurationValueType::valueOf($value);
            if ($val === false) {
                throw new InvalidTargetValueType();
            }
            // elseif (!in_array(TargetType::valueOf($this->targetType), [TargetType::HEART_RATE, TargetType::HEART_RATE_LAP, TargetType::POWER, TargetType::POWER_10S, TargetType::POWER_3S, TargetType::POWER_30S, TargetType::POWER_LAP])) {
            //     throw new InvalidTargetValueTypeForTargetType();
            // }
        }
        // TODO implement here
        $this->targetValueType = $value;
    }
}
