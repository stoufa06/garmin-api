<?php

declare(strict_types=1);

namespace Garmin\Training;
use DateTime;
use Garmin\Training\WorkoutStep;
use Garmin\Training\WorkoutRepeatStep;
use Garmin\Training\Enumeration\SportType;
class Workout
{

    /** @var int */
    public int $workoutId;

    /** @var int */
    public int $ownerId;

    /** @var string */
    public string $workoutName;

    /** @var string */
    public string $description;

    /** @var DateTime */
    public DateTime $updatedDate;

    /** @var DateTime */
    public DateTime $createdDate;

    /** @var string */
    public string $sport;

    /** @var int */
    public int $estimatedDurationInSecs;

    /** @var float */
    public float $estimatedDistanceInMeters;

    /** @var float */
    public float $poolLength;

    /** @var string */
    public string $poolLengthUnit;

    /** @var string */
    public string $workoutProvider;

    /** @var string */
    public string $workoutSourceId;

    /** @var array<[object Object]> */
    public array $steps;




    /**
     * Default constructor
     */
    public function __construct(array $args)
    {
        // ...

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
        $this->updatedDate = $value;
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
        $this->createdDate = $value;
    }

    /**
     * @return string
     */
    public function getSport(): string
    {
        // TODO implement here
        return $this->sport;
    }

    /**
     * @param string $value
     */
    public function setSport(string $value)
    {
        // TODO implement here
        $this->sport = $value;
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
    public function setSteps(array $value)
    {
        // TODO implement here
        $this->steps = $value;
    }

}
