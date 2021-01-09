<?php

declare(strict_types=1);

namespace Garmin\Training\Enumeration;

use Garmin\Training\Enumeration\Enumeration;

class EquipmentType extends Enumeration
{
    const NONE = 0;
    const SWIM_FINS = 1;
    const SWIM_KICKBOARD = 2;
    const SWIM_PADDLES = 3;
    const SWIM_PULL_BUOY = 4;
    const SWIM_SNORKEL = 5;
}
