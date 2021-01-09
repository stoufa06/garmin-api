<?php

namespace Garmin\Training\Exceptions;

class InvalidTargetValueTypeForTargetType extends TrainingException
{
    protected $message = 'Invalid Target Value Type. Target value type is used only for HR and POWER types.';
}
