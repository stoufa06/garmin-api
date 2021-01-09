<?php

namespace Garmin\Training\Exceptions;

class InvalidWorkoutStepType extends TrainingException
{
    protected $message = 'Invalid Workout Step Type. Type must be "WorkoutStep" only';
}
