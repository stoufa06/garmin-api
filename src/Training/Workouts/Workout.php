<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;
use DateTime;
use Garmin\Training\Enumeration\SportType;
use Garmin\Training\Enumeration\WorkoutStepType;
use Garmin\Training\Exceptions\InvalidRepeatType;
use Garmin\Training\Exceptions\InvalidWorkoutType;
use Garmin\Training\Traits\FunctionsTrait;
use Garmin\Training\WorkoutRepeatSteps\WorkoutRepeatStep;
use Garmin\Training\WorkoutSteps\WorkoutStep;

abstract class Workout implements WorkoutInterface
{

    use FunctionsTrait;

    const SPORT = null;

    /** @var int */
    protected ?int $workoutId=null;

    /** @var int */
    protected ?int $ownerId=null;

    /** @var string */
    protected ?string $workoutName=null;

    /** @var string */
    protected ?string $description=null;

    /** @var DateTime */
    protected ?DateTime $updatedDate=null;

    /** @var DateTime */
    protected ?DateTime $createdDate=null;

    /** @var string */
    protected ?string $sport=null;

    /** @var int */
    protected ?int $estimatedDurationInSecs=null;

    /** @var float */
    protected ?float $estimatedDistanceInMeters=null;

    /** @var string */
    protected ?string $workoutProvider=null;

    /** @var string */
    protected ?string $workoutSourceId=null;

    /** @var array<[object Object]> */
    protected array $steps=[];

    /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        if (isset($args['sport']) && $args['sport'] != $this::SPORT) {
            throw new InvalidWorkoutType();
        }
        if (!isset($args['sport'])) {
            $this->setSport($this::SPORT);
        }
        
        $this->inialiaze($args);
    }    

    public static function create(array $workout) 
    {
        $newWorkout = null;
        $sport = $workout['sport'] ?? null;
        if (!($sport && SportType::in($workout['sport']))) {
            throw new InvalidWorkoutType();
        }
        switch (SportType::valueOf($sport)) {
            case SportType::RUNNING:
                $newWorkout = new RunningWorkout($workout);
                break;
            case SportType::CYCLING:
                $newWorkout = new CyclingWorkout($workout);
                break;
            case SportType::GENERIC:
                $newWorkout = new GenericWorkout($workout);
                break;
            case SportType::LAP_SWIMMING:
                $newWorkout = new SwimmingWorkout($workout);
                break;
            case SportType::STRENGTH_TRAINING:
                $newWorkout = new StrenthTrainingWorkout($workout);
                break;
            case SportType::PILATES:
                $newWorkout = new PilatesWorkout($workout);
                break;
            case SportType::YOGA:
                $newWorkout = new YogaWorkout($workout);
                break;
            default:
                # code...
                break;
        }
        return $newWorkout;
    }

    /**
     * @return int
     */
    public function getWorkoutId(): ?int
    {
        // TODO implement here
        return $this->workoutId;
    }

    /**
     * @param int $value
     */
    public function setWorkoutId(?int $value)
    {
        // TODO implement here
        $this->workoutId = $value;
    }

    /**
     * @return int
     */
    public function getOwnerId(): ?int
    {
        // TODO implement here
        return $this->ownerId;
    }

    /**
     * @param int $value
     */
    public function setOwnerId(?int $value)
    {
        // TODO implement here
        $this->ownerId = $value;
    }

    /**
     * @return string
     */
    public function getWorkoutName(): ?string
    {
        // TODO implement here
        return $this->workoutName;
    }

    /**
     * @param string $value
     */
    public function setWorkoutName(?string $value)
    {
        // TODO implement here
        $this->workoutName = $value;
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
    public function getUpdatedDate(): ?string
    {
        // TODO implement here

        return $this->updatedDate instanceof DateTime ? $this->updatedDate->format('Y-m-d\TH:i:s.v') : $this->updatedDate;
    }

    /**
     * @param string $value
     */
    public function setUpdatedDate(?string $value)
    {
        // TODO implement here
        $value && ($this->updatedDate = new DateTime($value));
    }

    /**
     * @return string
     */
    public function getCreatedDate(): ?string
    {
        // TODO implement here
        return $this->createdDate instanceof DateTime ? $this->createdDate->format('Y-m-d\TH:i:s.v') : $this->createdDate;
    }

    /**
     * @param DateTime $value
     */
    public function setCreatedDate(?string $value)
    {
        // TODO implement here
        $value && ($this->createdDate = new DateTime($value));
    }

    /**
     * @return int
     */
    public function getEstimatedDurationInSecs(): ?int
    {
        // TODO implement here
        return $this->estimatedDurationInSecs;
    }

    /**
     * @param int $value
     */
    public function setEstimatedDurationInSecs(?int $value)
    {
        // TODO implement here
        $this->estimatedDurationInSecs = $value;
    }

    /**
     * @return float
     */
    public function getEstimatedDistanceInMeters(): ?float
    {
        // TODO implement here
        return $this->estimatedDistanceInMeters;
    }

    /**
     * @param float $value
     */
    public function setEstimatedDistanceInMeters(?float $value)
    {
        // TODO implement here
        $this->estimatedDistanceInMeters = $value;
    }

    /**
     * @return string
     */
    public function getWorkoutProvider(): ?string
    {
        // TODO implement here
        return $this->workoutProvider;
    }

    /**
     * @param string $value
     */
    public function setWorkoutProvider(?string $value)
    {
        // TODO implement here
        $this->workoutProvider = $value;
    }

    /**
     * @return string
     */
    public function getWorkoutSourceId(): ?string
    {
        // TODO implement here
        return $this->workoutSourceId;
    }

    /**
     * @param string $value
     */
    public function setWorkoutSourceId(?string $value)
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
                throw new InvalidRepeatType();
            }
            elseif($repeatType == WorkoutStepType::WorkoutStep)
            {
                $step = new WorkoutStep($value);
            }
            elseif($repeatType == WorkoutStepType::WorkoutRepeatStep)
            {
                $step = new WorkoutRepeatStep($value);
            }
            $this->steps[] = $step;
        }
    }

    /**
     * @return string
     */
    public function getSport(): ?string
    {
        // TODO implement here
        return $this->sport;
    }

    /**
     *
     * @param string|null $value
     * @return void
     */
    protected function setSport(?string $value)
    {
        // TODO implement here
        $val = SportType::valueOf($value);
        if ($val === false) {
            throw new InvalidWorkoutType();
        }
        $this->sport = $value;
    }

}
