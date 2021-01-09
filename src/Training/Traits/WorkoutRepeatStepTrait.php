<?php

declare(strict_types=1);

namespace Garmin\Training\Traits;

use Garmin\Training\Enumeration\RepeatType;
use Garmin\Training\Exceptions\InvalidRepeatType;
use Garmin\Training\Exceptions\InvalidSteps;
use Garmin\Training\Exceptions\InvalidWorkoutRepeatStepType;
use Garmin\Training\WorkoutRepeatSteps\WorkoutRepeatStep;
use Garmin\Training\WorkoutSteps\WorkoutStep;
use stdClass;

trait WorkoutRepeatStepTrait
{

    use FunctionsTrait;

    /** @var array<[object Object]> */
    public array $steps=[];

    /** @var string */
    public ?string $repeatType=null;

    /** @var float */
    public ?float $repeatValue=null;



    /**
     * Default constructor
     */
    public function __construct(array $args = [])
    {
        // ...
        if (isset($args['type']) && $args['type'] != 'WorkoutRepeatStep') {
            throw new InvalidWorkoutRepeatStepType();
        }
        if (!isset($args['type'])) {
            $this->setType('WorkoutRepeatStep');
        }
        
        $this->inialiaze($args);

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
        foreach ($value as $key => $step) {
            if (is_object($step) && $step instanceof WorkoutStep) {
                $this->steps[] = $step;
                continue;
            }
            
            if(is_object($step) && $step instanceof stdClass) {
                $step = json_decode(json_encode($step), true);
            }
            if (is_array($step)) {
                if(!isset($step['type'])) {
                    $step['type'] = 'WorkoutStep';
                }
            }
            else {
                throw new InvalidSteps();
            }

            if ($step['type'] == 'WorkoutStep') {
                $parent = get_parent_class($this) ?: get_class($this);
                $step = new $parent($step);
            }
            elseif ($step['type'] == 'WorkoutRepeatStep') {
                $class = static::class;
                $step = new $class($step);
            }
            $this->steps[] = $step;
            
        }
        //$this->steps = $value;
    }

    /**
     * @return string
     */
    public function getRepeatType(): ?string
    {
        // TODO implement here
        
        return $this->repeatType;
    }

    /**
     * @param string $value
     */
    public function setRepeatType(?string $value)
    {
        // TODO implement here
        if ($value !== null && $value !== '') {
            $val = RepeatType::valueOf($value);
            if ($val === false) {
                throw new InvalidRepeatType();
            }
        }
        $this->repeatType = $value;
    }

    /**
     * @return float
     */
    public function getRepeatValue(): ?float
    {
        // TODO implement here
        return $this->repeatValue;
    }

    /**
     * @param float $value
     */
    public function setRepeatValue(?float $value)
    {
        // TODO implement here
        $this->repeatValue = $value;
    }

}
