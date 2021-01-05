<?php

declare(strict_types=1);

namespace Garmin\Training\Enumeration;
use Garmin\Training\Enumeration\Enumeration;
class RepeatType extends Enumeration
{
    const REPEAT_UNTIL_STEPS_CMPLT = 0;
    const REPEAT_UNTIL_TIME = 1;
    const REPEAT_UNTIL_DISTANCE = 2;
    const REPEAT_UNTIL_CALORIES = 3;
    const REPEAT_UNTIL_HR_LESS_THAN = 4;
    const REPEAT_UNTIL_HR_GREATER_THAN = 5;
    const REPEAT_UNTIL_POWER_LESS_THAN = 6;
    const REPEAT_UNTIL_POWER_GREATER_THAN = 7;
    const REPEAT_UNTIL_POWER_LAST_LAP_LESS_THAN = 8;
    const REPEAT_UNTIL_MAX_POWER_LAST_LAP_LESS_THAN = 9;
}