<?php

declare(strict_types=1);

namespace Garmin\Training\WorkoutSteps;

use InvalidArgumentException;

use Garmin\Training\Traits\FunctionsTrait;

class WorkoutStep implements WorkoutStepInterface
{

    use FunctionsTrait;
    
    /** @var string */
    public string $type;

    /** @var int */
    public int $stepId;

    /** @var int */
    public int $stepOrder;

    /** @var string */
    public string $intensity;

    /** @var string */
    public string $description;

    /** @var string */
    public string $durationType;

    /** @var float */
    public float $durationValue;

    /** @var string */
    public string $durationValueType;

    /** @var string */
    public string $targetType;

    /** @var float */
    public float $targetValue;

    /** @var float */
    public float $targetValueLow;

    /** @var float */
    public float $targetValueHigh;

    /** @var string */
    public string $targetValueType;

    /** @var string */
    public string $strokeType;

    /** @var string */
    public string $equipmentType;

    /** @var string */
    public string $exerciseCategory;

    /** @var string */
    public string $exerciseName;

    /** @var float */
    public float $weightValue;

    /** @var string */
    public string $weightDisplayUnit;




    /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        $this->inialiaze($args);

    }

    /**
     * Default constructor
     */
    public function inialiaze(array $args = [])
    {
        // ...

        foreach ($args as $key => $value) 
        {
			if (isset($this->$key))
			{
				$method = 'set'.ucfirst($key);

				if (method_exists($this, $method))
				{
					$this->$method($value);
				}
				else
				{
					throw new InvalidArgumentException('Invalid argument '.$key);
				}
			}
        }

    }

    /**
     * @return string
     */
    public function getType(): string
    {
        // TODO implement here
        return $this->type;
    }

    /**
     * @param string $value
     */
    public function setType(string $value)
    {
        // TODO implement here
        $this->type = $value;
    }

    /**
     * @return int
     */
    public function getStepId(): int
    {
        // TODO implement here
        return $this->stepId;
    }

    /**
     * @param int $value
     */
    public function setStepId(int $value)
    {
        // TODO implement here
        $this->stepId = $value;
    }

    /**
     * @return int
     */
    public function getStepOrder(): int
    {
        // TODO implement here
        return $this->stepOrder;
    }

    /**
     * @param int $value
     */
    public function setStepOrder(int $value)
    {
        // TODO implement here
        $this->stepOrder = $value;
    }

    /**
     * @return string
     */
    public function getIntensity(): string
    {
        // TODO implement here
        return $this->intensity;
    }

    /**
     * @param string $value
     */
    public function setIntensity(string $value)
    {
        // TODO implement here
        $this->intensity = $value;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        // TODO implement here
        return $this->description;
    }

    /**
     * @param string $value
     */
    public function setDescription(string $value)
    {
        // TODO implement here
        $this->description = $value;
    }

    /**
     * @return string
     */
    public function getDurationType(): string
    {
        // TODO implement here
        return $this->durationType;
    }

    /**
     * @param string $value
     */
    public function setDurationType(string $value)
    {
        // TODO implement here
        $this->durationType = $value;
    }

    /**
     * @return float
     */
    public function getDurationValue(): float
    {
        // TODO implement here
        return $this->durationValue;
    }

    /**
     * @param float $value
     */
    public function setDurationValue(float $value)
    {
        // TODO implement here
        $this->durationValue = $value;
    }

    /**
     * @return string
     */
    public function getDurationValueType(): string
    {
        // TODO implement here
        return $this->durationValueType;
    }

    /**
     * @param string $value
     */
    public function setDurationValueType(string $value)
    {
        // TODO implement here
        $this->durationValueType = $value;
    }

    /**
     * @return string
     */
    public function getTargetType(): string
    {
        // TODO implement here
        return $this->targetType;
    }

    /**
     * @param string $value
     */
    public function setTargetType(string $value)
    {
        // TODO implement here
        $this->targetType = $value;
    }

    /**
     * @return float
     */
    public function getTargetValue(): float
    {
        // TODO implement here
        return $this->targetValue;
    }

    /**
     * @param float $value
     */
    public function setTargetValue(float $value)
    {
        // TODO implement here
        $this->targetValue = $value;
    }

    /**
     * @return float
     */
    public function getTargetValueLow(): float
    {
        // TODO implement here
        return $this->targetValueLow ;
    }

    /**
     * @param float $value
     */
    public function setTargetValueLow(float $value)
    {
        // TODO implement here
        $this->targetValueLow = $value;
    }

    /**
     * @return float
     */
    public function getTargetValueHigh(): float
    {
        // TODO implement here
        return $this->targetValueHigh;
    }

    /**
     * @param float $value
     */
    public function setTargetValueHigh(float $value)
    {
        // TODO implement here
        $this->targetValueHigh = $value;
    }

    /**
     * @return string
     */
    public function getTargetValueType(): string
    {
        // TODO implement here
        return $this->targetValueType;
    }

    /**
     * @param string $value
     */
    public function setTargetValueType(string $value)
    {
        // TODO implement here
        $this->targetValueType = $value;
    }

    /**
     * @return string
     */
    public function getStrokeType(): string
    {
        // TODO implement here
        return $this->strokeType;
    }

    /**
     * @param string $value
     */
    public function setStrokeType(string $value)
    {
        // TODO implement here
        $this->strokeType = $value;
    }

    /**
     * @return string
     */
    public function getEquipmentType(): string
    {
        // TODO implement here
        return $this->equipmentType;
    }

    /**
     * @param string $value
     */
    public function setEquipmentType(string $value)
    {
        // TODO implement here
        $this->equipmentType = $value;
    }

    /**
     * @return string
     */
    public function getExerciseCategory(): string
    {
        // TODO implement here
        return $this->exerciseCategory;
    }

    /**
     * @param string $value
     */
    public function setExerciseCategory(string $value)
    {
        // TODO implement here
        $this->exerciseCategory = $value;
    }

    /**
     * @return string
     */
    public function getExerciseName(): string
    {
        // TODO implement here
        return $this->exerciseName;
    }

    /**
     * @param string $value
     */
    public function setExerciseName(string $value)
    {
        // TODO implement here
        $this->exerciseName = $value;
    }

    /**
     * @return float
     */
    public function getWeightValue(): float
    {
        // TODO implement here
        return $this->weightValue;
    }

    /**
     * @param float $value
     */
    public function setWeightValue(float $value)
    {
        // TODO implement here
        $this->weightValue = $value;
    }

    /**
     * @return string
     */
    public function getWeightDisplayUnit(): string
    {
        // TODO implement here
        return $this->weightDisplayUnit;
    }

    /**
     * @param string $value
     */
    public function setWeightDisplayUnit(string $value)
    {
        // TODO implement here
        $this->weightDisplayUnit = $value;
    }

}
