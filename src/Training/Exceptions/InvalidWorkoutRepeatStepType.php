<?php

namespace Garmin\Training\Exceptions;

class InvalidWorkoutRepeatStepType extends TrainingException
{
    protected $message = 'Invalid Workout Repeat Step Type. Type must be "WorkoutRepeatStep" only';
}
