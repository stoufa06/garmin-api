<?php

declare(strict_types=1);

namespace Garmin\Training\Workouts;

use DateTime;
use Garmin\Training\Traits\FunctionsTrait;

class WorkoutSchedule
{

    use FunctionsTrait;
    
    public ?int $scheduleId=null;

    public ?int $workoutId=null;

    public ?DateTime $date=null;

    /**
     * @return int
     */
    public function getScheduleId(): ?int
    {
        // TODO implement here
        return $this->scheduleId;
    }

    /**
     * @param  int $value
     */
    public function setScheduleId(?int $value)
    {
        // TODO implement here
        $this->scheduleId = $value;
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
     * @param int  $value
     */
    public function setWorkoutId(?int $value)
    {
        // TODO implement here
        $this->workoutId = $value;
    }

    /**
     * @return string
     */
    public function getDate(): ?string
    {
        // TODO implement here
        return $this->date instanceof DateTime ? $this->date->format('Y-m-d\TH:i:s.v') : $this->date;
    }

    /**
     * @param string $value
     */
    public function setDate(?string $value)
    {
        // TODO implement here
        $value && ($this->date = new DateTime($value));
    }

}
