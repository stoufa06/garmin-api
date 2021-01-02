<?php

declare(strict_types=1);

namespace Garmin\Training\Enumeration;
use Garmin\Training\Enumeration\Enumeration;
class DurationType extends Enumeration
{
    public const TIME = 0;
    public const DISTANCE = 1;
    public const HR_LESS_THAN = 2;
    public const HR_GREATER_THAN = 3;
    public const CALORIES = 4;
    public const OPEN = 5;
    public const POWER_LESS_THAN = 6;
    public const POWER_GREATER_THAN = 7;
    public const REPETITION_TIME = 8;
    public const REPS = 9;
    public const TIME_AT_VALID_CDA = 10;
    public const FIXED_REST = 11;
}