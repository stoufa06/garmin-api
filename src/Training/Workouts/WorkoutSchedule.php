<?php

declare(strict_types=1);

namespace Garmin\Training;

use DateTime;

class WorkoutSchedule
{

    public int $scheduleId;

    public int $workoutId;

    public DateTime $date;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @return int
     */
    public function getScheduleId(): int
    {
        // TODO implement here
        return $this->scheduleId;
    }

    /**
     * @param  int $value
     */
    public function setScheduleId(int $value)
    {
        // TODO implement here
        $this->scheduleId = $value;
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
     * @param int  $value
     */
    public function setWorkoutId(int $value)
    {
        // TODO implement here
        $this->workoutId = $value;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        // TODO implement here
        return $this->date;
    }

    /**
     * @param DateTime $value
     */
    public function setDate(DateTime $value)
    {
        // TODO implement here
        $this->date = $value;
    }

}
