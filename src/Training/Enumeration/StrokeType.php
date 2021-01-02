<?php

declare(strict_types=1);

namespace Garmin\Training\Enumeration;
use Garmin\Training\Enumeration\Enumeration;
class StrokeType extends Enumeration
{
    const BACKSTROKE = 0;
    const BREASTSTROKE = 1;
    const DRILL = 2;
    const BUTTERFLY = 3;
    const FREESTYLE = 4;
    const MIXED = 5;
    const IM = 6;
}