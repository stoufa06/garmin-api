<?php

declare(strict_types=1);

namespace Garmin\Training\Enumeration;

use Garmin\Training\Enumeration\Enumeration;

class DurationValueType extends Enumeration
{
    const PERCENT = 0;
    const MILE = 1;
    const KILOMETER = 2;
    const METER = 3;
    const YARD = 4;
}
