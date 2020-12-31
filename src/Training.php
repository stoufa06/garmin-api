<?php

declare(strict_types=1);

namespace Garmin;

use Garmin\Training\Workout;
use Garmin\Training\WorkoutSchedule;

class Training extends Client
{

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @param string $uri 
     * @param string $data
     */
    public function create(string $uri, string $data)
    {
        // TODO implement here
    }

    /**
     * @param string $uri
     */
    public function retrieve(string $uri)
    {
        // TODO implement here
    }

    /**
     * @param string $uri 
     * @param string $data
     */
    public function update(string $uri, string $data)
    {
        // TODO implement here
    }

    /**
     * @param string $uri
     */
    public function delete(string $uri)
    {
        // TODO implement here
    }

    /**
     * @param [object Object] $workout
     */
    public function createWorkout(Workout $workout)
    {
        // TODO implement here
    }

    /**
     * @param int $workoutId
     */
    public function retrieveWorkout(int $workoutId)
    {
        // TODO implement here
    }

    /**
     * @param [object Object] $workout
     */
    public function updateWorkout(Workout $workout)
    {
        // TODO implement here
    }

    /**
     * @param int $workoutId
     */
    public function deleteWorkout(int $workoutId)
    {
        // TODO implement here
    }

    /**
     * @param [object Object] $workout
     */
    public function createWorkoutSchedule(WorkoutSchedule $workout)
    {
        // TODO implement here
    }

    /**
     * @param int $workoutId
     */
    public function retrieveWorkoutSchedule(int $workoutId)
    {
        // TODO implement here
    }

    /**
     * @param [object Object] $workout
     */
    public function updateWorkoutSchedule(WorkoutSchedule $workout)
    {
        // TODO implement here
    }

    /**
     * @param int $workoutId
     */
    public function deleteWorkoutSchedule(int $workoutId)
    {
        // TODO implement here
    }

}
