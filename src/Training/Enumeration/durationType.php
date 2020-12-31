<?php

declare(strict_types=1);

namespace Garmin\Training\Enumeration;

class durationType
{
    const TIME = 0;
    const DISTANCE = 1;
    const HR_LESS_THAN = 2;
    const HR_GREATER_THAN = 3;
    const CALORIES = 4;
    const OPEN = 5;
    const POWER_LESS_THAN = 6;
    const POWER_GREATER_THAN = 7;
    const REPETITION_TIME = 8;
    const REPS = 9;
    const TIME_AT_VALID_CDA = 10;
    const FIXED_REST = 11;
}