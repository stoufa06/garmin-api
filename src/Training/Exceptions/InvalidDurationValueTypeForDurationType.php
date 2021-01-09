<?php

namespace Garmin\Training\Exceptions;

class InvalidDurationValueTypeForDurationType extends TrainingException
{
    protected $message = 'Invalid Duration Value Type. Duration value type is used only for HR and POWER types.';
}
