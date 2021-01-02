<?php

declare(strict_types=1);

namespace Garmin\Training\Enumeration;
use Garmin\Training\Enumeration\Enumeration;
class Intensity extends Enumeration
{
    const REST = 0;
    const WARMUP = 1;
    const COOLDOWN = 2;
    const RECOVERY = 3;
    const INTERVAL = 4;
}