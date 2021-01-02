<?php

declare(strict_types=1);

namespace Garmin\Training\Enumeration;
use Garmin\Training\Enumeration\Enumeration;
class SportType extends Enumeration
{
    const RUNNING = 0;
    const CYCLING = 1;
    const LAP_SWIMMING = 2;
    const STRENGTH_TRAINING = 3;
    const CARDIO_TRAINING = 4;
    const GENERIC = 5;
    const YOGA = 6;
    const PILATES = 7;
}