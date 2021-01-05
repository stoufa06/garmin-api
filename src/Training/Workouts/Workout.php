<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;
use DateTime;
use Exception;
use InvalidArgumentException;

use Garmin\Training\Enumeration\WorkoutStepType;
use Garmin\Training\WorkoutRepeatSteps\WorkoutRepeatStep;
use Garmin\Training\WorkoutSteps\WorkoutStep;

abstract class Workout implements WorkoutInterface
{

    /** @var int */
    protected int $workoutId;

    /** @var int */
    protected int $ownerId;

    /** @var string */
    protected string $workoutName;

    /** @var string */
    protected string $description;

    /** @var DateTime */
    protected DateTime $updatedDate;

    /** @var DateTime */
    protected DateTime $createdDate;

    /** @var string */
    protected string $sport;

    /** @var int */
    protected int $estimatedDurationInSecs;

    /** @var float */
    protected float $estimatedDistanceInMeters;

    /** @var string */
    protected string $workoutProvider;

    /** @var string */
    protected string $workoutSourceId;

    /** @var array<[object Object]> */
    protected array $steps;




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
     * @return int
     */
    public function getWorkoutId(): int
    {
        // TODO implement here
        return $this->workoutId;
    }

    /**
     * @param int $value
     */
    public function setWorkoutId(int $value)
    {
        // TODO implement here
        $this->workoutId = $value;
    }

    /**
     * @return int
     */
    public function getOwnerId(): int
    {
        // TODO implement here
        return $this->ownerId;
    }

    /**
     * @param int $value
     */
    public function setOwnerId(int $value)
    {
        // TODO implement here
        $this->ownerId = $value;
    }

    /**
     * @return string
     */
    public function getWorkoutName(): string
    {
        // TODO implement here
        return $this->workoutName;
    }

    /**
     * @param string $value
     */
    public function setWorkoutName(string $value)
    {
        // TODO implement here
        $this->workoutName = $value;
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
     * @return DateTime
     */
    public function getUpdatedDate(): DateTime
    {
        // TODO implement here
        return $this->updatedDate;
    }

    /**
     * @param DateTime $value
     */
    public function setUpdatedDate(DateTime $value)
    {
        // TODO implement here
        $this->updatedDate = new DateTime($value);
    }

    /**
     * @return DateTime
     */
    public function getCreatedDate(): DateTime
    {
        // TODO implement here
        return $this->createdDate;
    }

    /**
     * @param DateTime $value
     */
    public function setCreatedDate(DateTime $value)
    {
        // TODO implement here
        $this->createdDate = new DateTime($value);
    }

    /**
     * @return int
     */
    public function getEstimatedDurationInSecs(): int
    {
        // TODO implement here
        return $this->estimatedDurationInSecs;
    }

    /**
     * @param int $value
     */
    public function setEstimatedDurationInSecs(int $value)
    {
        // TODO implement here
        $this->estimatedDurationInSecs = $value;
    }

    /**
     * @return float
     */
    public function getEstimatedDistanceInMeters(): float
    {
        // TODO implement here
        return $this->estimatedDistanceInMeters;
    }

    /**
     * @param float $value
     */
    public function setEstimatedDistanceInMeters(float $value)
    {
        // TODO implement here
        $this->estimatedDistanceInMeters = $value;
    }

    /**
     * @return string
     */
    public function getWorkoutProvider(): string
    {
        // TODO implement here
        return $this->workoutProvider;
    }

    /**
     * @param string $value
     */
    public function setWorkoutProvider(string $value)
    {
        // TODO implement here
        $this->workoutProvider = $value;
    }

    /**
     * @return string
     */
    public function getWorkoutSourceId(): string
    {
        // TODO implement here
        return $this->workoutSourceId;
    }

    /**
     * @param string $value
     */
    public function setWorkoutSourceId(string $value)
    {
        // TODO implement here
        $this->workoutSourceId = $value;
    }

    /**
     * @return [object Object]
     */
    public function getSteps(): array
    {
        // TODO implement here
        return $this->steps;
    }

    /**
     * @param [object Object] $value
     */
    public function setSteps(array $steps) 
    {
        
        foreach ($steps as $key => $value) {
            $repeatType = WorkoutStepType::valueOf($value['type']?? '');
            if ($repeatType === false) 
            {
                throw new Exception('Invalid repeat type');
            }
            elseif($repeatType == WorkoutStepType::WorkoutStep)
            {
                $step = new WorkoutStep($value);
            }
            elseif($repeatType == WorkoutStepType::WorkoutRepeatStep)
            {
                $step = new WorkoutRepeatStep($value);
            }
            $this->steps [] = $step;
        }
    }

     /**
     * @return string
     */
    public function getSport(): string
    {
        // TODO implement here
        return $this->sport;
    }

}
