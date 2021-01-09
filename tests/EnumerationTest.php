<?php declare(strict_types=1);

use Garmin\Training\Enumeration\DurationType;
use Garmin\Training\Enumeration\DurationValueType;
use Garmin\Training\Enumeration\EquipmentType;
use Garmin\Training\Enumeration\ExerciseCategory;
use Garmin\Training\Enumeration\Intensity;
use Garmin\Training\Enumeration\RepeatType;
use Garmin\Training\Enumeration\SportType;
use Garmin\Training\Enumeration\StrokeType;
use Garmin\Training\Enumeration\UnitType;
use Garmin\Training\Enumeration\WeightUnit;
use Garmin\Training\Enumeration\WorkoutStepType;
//use Garmin\Training\Enumeration\Enumeration;
use PHPUnit\Framework\TestCase;
final class EnumerationTest extends TestCase
{
    const INVALID_VALUE = 999;
    public function testDurationType(): void
    {
        // const TIME = 0;
        // const DISTANCE = 1;
        // const HR_LESS_THAN = 2;
        // const HR_GREATER_THAN = 3;
        // const CALORIES = 4;
        // const OPEN = 5;
        // const POWER_LESS_THAN = 6;
        // const POWER_GREATER_THAN = 7;
        // const REPETITION_TIME = 8;
        // const REPS = 9;
        // const TIME_AT_VALID_CDA = 10;
        // const FIXED_REST = 11;
        
        $this->assertSame(DurationType::valueOf('TIME'),DurationType::TIME);
        $this->assertSame(DurationType::nameOf(DurationType::TIME), 'TIME');

        $this->assertSame(DurationType::valueOf('DISTANCE'),DurationType::DISTANCE);
        $this->assertSame(DurationType::nameOf(DurationType::DISTANCE), 'DISTANCE');

        $this->assertSame(DurationType::valueOf('HR_LESS_THAN'),DurationType::HR_LESS_THAN);
        $this->assertSame(DurationType::nameOf(DurationType::HR_LESS_THAN), 'HR_LESS_THAN');

        $this->assertSame(DurationType::valueOf('HR_GREATER_THAN'),DurationType::HR_GREATER_THAN);
        $this->assertSame(DurationType::nameOf(DurationType::HR_GREATER_THAN), 'HR_GREATER_THAN');

        $this->assertSame(DurationType::valueOf('CALORIES'),DurationType::CALORIES);
        $this->assertSame(DurationType::nameOf(DurationType::CALORIES), 'CALORIES');

        $this->assertSame(DurationType::valueOf('OPEN'),DurationType::OPEN);
        $this->assertSame(DurationType::nameOf(DurationType::OPEN), 'OPEN');

        $this->assertSame(DurationType::valueOf('POWER_LESS_THAN'),DurationType::POWER_LESS_THAN);
        $this->assertSame(DurationType::nameOf(DurationType::POWER_LESS_THAN), 'POWER_LESS_THAN');

        $this->assertSame(DurationType::valueOf('POWER_GREATER_THAN'),DurationType::POWER_GREATER_THAN);
        $this->assertSame(DurationType::nameOf(DurationType::POWER_GREATER_THAN), 'POWER_GREATER_THAN');

        $this->assertSame(DurationType::valueOf('REPETITION_TIME'),DurationType::REPETITION_TIME);
        $this->assertSame(DurationType::nameOf(DurationType::REPETITION_TIME), 'REPETITION_TIME');

        $this->assertSame(DurationType::valueOf('REPS'),DurationType::REPS);
        $this->assertSame(DurationType::nameOf(DurationType::REPS), 'REPS');

        $this->assertSame(DurationType::valueOf('TIME_AT_VALID_CDA'),DurationType::TIME_AT_VALID_CDA);
        $this->assertSame(DurationType::nameOf(DurationType::TIME_AT_VALID_CDA), 'TIME_AT_VALID_CDA');

        $this->assertSame(DurationType::valueOf('FIXED_REST'),DurationType::FIXED_REST);
        $this->assertSame(DurationType::nameOf(DurationType::FIXED_REST), 'FIXED_REST');

    }
    public function testDurationTypeInvlidValue(): void
    {
        
        $this->assertSame(DurationType::valueOf('INVALID_VALUE'),false);
        $this->assertSame(DurationType::nameOf(self::INVALID_VALUE), false);
    }

    public function testDurationTypeValue(): void
    {
        // const PERCENT = 0;
        // const MILE = 1;
        // const KILOMETER = 2;
        // const METER = 3;
        // const YARD = 4;

        $this->assertSame(DurationValueType::valueOf('PERCENT'),DurationValueType::PERCENT);
        $this->assertSame(DurationValueType::nameOf(DurationValueType::PERCENT), 'PERCENT');

        $this->assertSame(DurationValueType::valueOf('MILE'),DurationValueType::MILE);
        $this->assertSame(DurationValueType::nameOf(DurationValueType::MILE), 'MILE');

        $this->assertSame(DurationValueType::valueOf('KILOMETER'),DurationValueType::KILOMETER);
        $this->assertSame(DurationValueType::nameOf(DurationValueType::KILOMETER), 'KILOMETER');

        $this->assertSame(DurationValueType::valueOf('METER'),DurationValueType::METER);
        $this->assertSame(DurationValueType::nameOf(DurationValueType::METER), 'METER');
    }
    
    public function testDurationTypeValueInvlidValue(): void
    {
        $this->assertSame(DurationValueType::valueOf('INVALID_VALUE'),false);
        $this->assertSame(DurationValueType::nameOf(self::INVALID_VALUE), false);
    }

    public function testEquipmentType(): void
    {
        // const NONE = 0;
        // const SWIM_FINS = 1;
        // const SWIM_KICKBOARD = 2;
        // const SWIM_PADDLES = 3;
        // const SWIM_PULL_BUOY = 4;
        // const SWIM_SNORKEL = 5;

        $this->assertSame(EquipmentType::valueOf('NONE'),EquipmentType::NONE);
        $this->assertSame(EquipmentType::nameOf(EquipmentType::NONE), 'NONE');

        $this->assertSame(EquipmentType::valueOf('SWIM_FINS'),EquipmentType::SWIM_FINS);
        $this->assertSame(EquipmentType::nameOf(EquipmentType::SWIM_FINS), 'SWIM_FINS');

        $this->assertSame(EquipmentType::valueOf('SWIM_KICKBOARD'),EquipmentType::SWIM_KICKBOARD);
        $this->assertSame(EquipmentType::nameOf(EquipmentType::SWIM_KICKBOARD), 'SWIM_KICKBOARD');

        $this->assertSame(EquipmentType::valueOf('SWIM_PADDLES'),EquipmentType::SWIM_PADDLES);
        $this->assertSame(EquipmentType::nameOf(EquipmentType::SWIM_PADDLES), 'SWIM_PADDLES');

        $this->assertSame(EquipmentType::valueOf('SWIM_PULL_BUOY'),EquipmentType::SWIM_PULL_BUOY);
        $this->assertSame(EquipmentType::nameOf(EquipmentType::SWIM_PULL_BUOY), 'SWIM_PULL_BUOY');

        $this->assertSame(EquipmentType::valueOf('SWIM_SNORKEL'),EquipmentType::SWIM_SNORKEL);
        $this->assertSame(EquipmentType::nameOf(EquipmentType::SWIM_SNORKEL), 'SWIM_SNORKEL');
    }
    public function testEquipmentTypeInvalidValue(): void
    {
        $this->assertSame(EquipmentType::valueOf('INVALID_VALUE'),false);
        $this->assertSame(EquipmentType::nameOf(self::INVALID_VALUE), false);
    }

    public function testExerciseCategory(): void
    {
    
    }
    public function testExerciseCategoryInvalidValue(): void
    {
        $this->assertSame(ExerciseCategory::valueOf('INVALID_VALUE'),false);
        $this->assertSame(ExerciseCategory::nameOf(self::INVALID_VALUE), false);
    }

    public function testIntensity(): void
    {
        // const REST = 0;
        // const WARMUP = 1;
        // const COOLDOWN = 2;
        // const RECOVERY = 3;
        // const INTERVAL = 4;

        $this->assertSame(Intensity::valueOf('REST'),Intensity::REST);
        $this->assertSame(Intensity::nameOf(Intensity::REST), 'REST');

        $this->assertSame(Intensity::valueOf('WARMUP'),Intensity::WARMUP);
        $this->assertSame(Intensity::nameOf(Intensity::WARMUP), 'WARMUP');

        $this->assertSame(Intensity::valueOf('COOLDOWN'),Intensity::COOLDOWN);
        $this->assertSame(Intensity::nameOf(Intensity::COOLDOWN), 'COOLDOWN');

        $this->assertSame(Intensity::valueOf('RECOVERY'),Intensity::RECOVERY);
        $this->assertSame(Intensity::nameOf(Intensity::RECOVERY), 'RECOVERY');

        $this->assertSame(Intensity::valueOf('INTERVAL'),Intensity::INTERVAL);
        $this->assertSame(Intensity::nameOf(Intensity::INTERVAL), 'INTERVAL');

    }
    public function testIntensityInvalidValue(): void
    {
        $this->assertSame(Intensity::valueOf('INVALID_VALUE'),false);
        $this->assertSame(Intensity::nameOf(self::INVALID_VALUE), false);
    }

    public function testRepeatType(): void
    {
        // const REPEAT_UNTIL_STEPS_CMPLT = 0;
        // const REPEAT_UNTIL_TIME = 1;
        // const REPEAT_UNTIL_DISTANCE = 2;
        // const REPEAT_UNTIL_CALORIES = 3;
        // const REPEAT_UNTIL_HR_LESS_THAN = 4;
        // const REPEAT_UNTIL_HR_GREATER_THAN = 5;
        // const REPEAT_UNTIL_POWER_LESS_THAN = 6;
        // const REPEAT_UNTIL_POWER_GREATER_THAN = 7;
        // const REPEAT_UNTIL_POWER_LAST_LAP_LESS_THAN = 8;
        // const REPEAT_UNTIL_MAX_POWER_LAST_LAP_LESS_THAN = 9;

        $this->assertSame(RepeatType::valueOf('REPEAT_UNTIL_STEPS_CMPLT'),RepeatType::REPEAT_UNTIL_STEPS_CMPLT);
        $this->assertSame(RepeatType::nameOf(RepeatType::REPEAT_UNTIL_STEPS_CMPLT), 'REPEAT_UNTIL_STEPS_CMPLT');

        $this->assertSame(RepeatType::valueOf('REPEAT_UNTIL_TIME'),RepeatType::REPEAT_UNTIL_TIME);
        $this->assertSame(RepeatType::nameOf(RepeatType::REPEAT_UNTIL_TIME), 'REPEAT_UNTIL_TIME');

        $this->assertSame(RepeatType::valueOf('REPEAT_UNTIL_DISTANCE'),RepeatType::REPEAT_UNTIL_DISTANCE);
        $this->assertSame(RepeatType::nameOf(RepeatType::REPEAT_UNTIL_DISTANCE), 'REPEAT_UNTIL_DISTANCE');

        $this->assertSame(RepeatType::valueOf('REPEAT_UNTIL_CALORIES'),RepeatType::REPEAT_UNTIL_CALORIES);
        $this->assertSame(RepeatType::nameOf(RepeatType::REPEAT_UNTIL_CALORIES), 'REPEAT_UNTIL_CALORIES');

        $this->assertSame(RepeatType::valueOf('REPEAT_UNTIL_HR_LESS_THAN'),RepeatType::REPEAT_UNTIL_HR_LESS_THAN);
        $this->assertSame(RepeatType::nameOf(RepeatType::REPEAT_UNTIL_HR_LESS_THAN), 'REPEAT_UNTIL_HR_LESS_THAN');

        $this->assertSame(RepeatType::valueOf('REPEAT_UNTIL_HR_GREATER_THAN'),RepeatType::REPEAT_UNTIL_HR_GREATER_THAN);
        $this->assertSame(RepeatType::nameOf(RepeatType::REPEAT_UNTIL_HR_GREATER_THAN), 'REPEAT_UNTIL_HR_GREATER_THAN');

        $this->assertSame(RepeatType::valueOf('REPEAT_UNTIL_POWER_LESS_THAN'),RepeatType::REPEAT_UNTIL_POWER_LESS_THAN);
        $this->assertSame(RepeatType::nameOf(RepeatType::REPEAT_UNTIL_POWER_LESS_THAN), 'REPEAT_UNTIL_POWER_LESS_THAN');

        $this->assertSame(RepeatType::valueOf('REPEAT_UNTIL_POWER_GREATER_THAN'),RepeatType::REPEAT_UNTIL_POWER_GREATER_THAN);
        $this->assertSame(RepeatType::nameOf(RepeatType::REPEAT_UNTIL_POWER_GREATER_THAN), 'REPEAT_UNTIL_POWER_GREATER_THAN');

        $this->assertSame(RepeatType::valueOf('REPEAT_UNTIL_POWER_LAST_LAP_LESS_THAN'),RepeatType::REPEAT_UNTIL_POWER_LAST_LAP_LESS_THAN);
        $this->assertSame(RepeatType::nameOf(RepeatType::REPEAT_UNTIL_POWER_LAST_LAP_LESS_THAN), 'REPEAT_UNTIL_POWER_LAST_LAP_LESS_THAN');

        $this->assertSame(RepeatType::valueOf('REPEAT_UNTIL_MAX_POWER_LAST_LAP_LESS_THAN'),RepeatType::REPEAT_UNTIL_MAX_POWER_LAST_LAP_LESS_THAN);
        $this->assertSame(RepeatType::nameOf(RepeatType::REPEAT_UNTIL_MAX_POWER_LAST_LAP_LESS_THAN), 'REPEAT_UNTIL_MAX_POWER_LAST_LAP_LESS_THAN');
    }
    public function testRepeatTypeInvalidValue(): void
    {
        $this->assertSame(RepeatType::valueOf('INVALID_VALUE'),false);
        $this->assertSame(RepeatType::nameOf(self::INVALID_VALUE), false);
    }

    public function testSportType(): void
    {
        // const RUNNING = 0;
        // const CYCLING = 1;
        // const LAP_SWIMMING = 2;
        // const STRENGTH_TRAINING = 3;
        // const CARDIO_TRAINING = 4;
        // const GENERIC = 5;
        // const YOGA = 6;
        // const PILATES = 7;

        $this->assertSame(SportType::valueOf('RUNNING'),SportType::RUNNING);
        $this->assertSame(SportType::nameOf(SportType::RUNNING), 'RUNNING');

        $this->assertSame(SportType::valueOf('CYCLING'),SportType::CYCLING);
        $this->assertSame(SportType::nameOf(SportType::CYCLING), 'CYCLING');

        $this->assertSame(SportType::valueOf('LAP_SWIMMING'),SportType::LAP_SWIMMING);
        $this->assertSame(SportType::nameOf(SportType::LAP_SWIMMING), 'LAP_SWIMMING');

        $this->assertSame(SportType::valueOf('STRENGTH_TRAINING'),SportType::STRENGTH_TRAINING);
        $this->assertSame(SportType::nameOf(SportType::STRENGTH_TRAINING), 'STRENGTH_TRAINING');

        $this->assertSame(SportType::valueOf('CARDIO_TRAINING'),SportType::CARDIO_TRAINING);
        $this->assertSame(SportType::nameOf(SportType::CARDIO_TRAINING), 'CARDIO_TRAINING');

        $this->assertSame(SportType::valueOf('GENERIC'),SportType::GENERIC);
        $this->assertSame(SportType::nameOf(SportType::GENERIC), 'GENERIC');

        $this->assertSame(SportType::valueOf('YOGA'),SportType::YOGA);
        $this->assertSame(SportType::nameOf(SportType::YOGA), 'YOGA');

        $this->assertSame(SportType::valueOf('PILATES'),SportType::PILATES);
        $this->assertSame(SportType::nameOf(SportType::PILATES), 'PILATES');

    }
    public function testSportTypeInvalidValue(): void
    {
        $this->assertSame(SportType::valueOf('INVALID_VALUE'),false);
        $this->assertSame(SportType::nameOf(self::INVALID_VALUE), false);
    }

    public function testStrokeType(): void
    {
        // const BACKSTROKE = 0;
        // const BREASTSTROKE = 1;
        // const DRILL = 2;
        // const BUTTERFLY = 3;
        // const FREESTYLE = 4;
        // const MIXED = 5;
        // const IM = 6;

        $this->assertSame(StrokeType::valueOf('BACKSTROKE'),StrokeType::BACKSTROKE);
        $this->assertSame(StrokeType::nameOf(StrokeType::BACKSTROKE), 'BACKSTROKE');

        $this->assertSame(StrokeType::valueOf('BREASTSTROKE'),StrokeType::BREASTSTROKE);
        $this->assertSame(StrokeType::nameOf(StrokeType::BREASTSTROKE), 'BREASTSTROKE');

        $this->assertSame(StrokeType::valueOf('DRILL'),StrokeType::DRILL);
        $this->assertSame(StrokeType::nameOf(StrokeType::DRILL), 'DRILL');

        $this->assertSame(StrokeType::valueOf('BUTTERFLY'),StrokeType::BUTTERFLY);
        $this->assertSame(StrokeType::nameOf(StrokeType::BUTTERFLY), 'BUTTERFLY');

        $this->assertSame(StrokeType::valueOf('FREESTYLE'),StrokeType::FREESTYLE);
        $this->assertSame(StrokeType::nameOf(StrokeType::FREESTYLE), 'FREESTYLE');

        $this->assertSame(StrokeType::valueOf('MIXED'),StrokeType::MIXED);
        $this->assertSame(StrokeType::nameOf(StrokeType::MIXED), 'MIXED');

        $this->assertSame(StrokeType::valueOf('IM'),StrokeType::IM);
        $this->assertSame(StrokeType::nameOf(StrokeType::IM), 'IM');
    }
    public function testStrokeTypeInvalidValue(): void
    {
        $this->assertSame(StrokeType::valueOf('INVALID_VALUE'),false);
        $this->assertSame(StrokeType::nameOf(self::INVALID_VALUE), false);
    }

    public function testTargetType(): void
    {
    
    }
    public function testTargetTypeInvalidValue(): void
    {
        $this->assertSame(RepeatType::valueOf('INVALID_VALUE'),false);
        $this->assertSame(RepeatType::nameOf(self::INVALID_VALUE), false);
    }

    public function testUnitType(): void
    {
        // const YARD = 0;
        // const METER = 1;

        $this->assertSame(UnitType::valueOf('YARD'),UnitType::YARD);
        $this->assertSame(UnitType::nameOf(UnitType::YARD), 'YARD');

        $this->assertSame(UnitType::valueOf('METER'),UnitType::METER);
        $this->assertSame(UnitType::nameOf(UnitType::METER), 'METER');
    }
    public function testUnitInvalidValue(): void
    {
        $this->assertSame(UnitType::valueOf('INVALID_VALUE'),false);
        $this->assertSame(UnitType::nameOf(self::INVALID_VALUE), false);
    }

    public function testWeightUnit(): void
    {
        // const OTHER = 0;
        // const KILOGRAM = 1;
        // const POUND = 2;

        $this->assertSame(WeightUnit::valueOf('OTHER'),WeightUnit::OTHER);
        $this->assertSame(WeightUnit::nameOf(WeightUnit::OTHER), 'OTHER');

        $this->assertSame(WeightUnit::valueOf('KILOGRAM'),WeightUnit::KILOGRAM);
        $this->assertSame(WeightUnit::nameOf(WeightUnit::KILOGRAM), 'KILOGRAM');

        $this->assertSame(WeightUnit::valueOf('POUND'),WeightUnit::POUND);
        $this->assertSame(WeightUnit::nameOf(WeightUnit::POUND), 'POUND');
    }
    public function testWeightUnitInvalidValue(): void
    {
        $this->assertSame(WeightUnit::valueOf('INVALID_VALUE'),false);
        $this->assertSame(WeightUnit::nameOf(self::INVALID_VALUE), false);
    }

    public function testWorkoutType(): void
    {
        // const WorkoutStep = 0;
        // const WorkoutRepeatStep = 1;    

        $this->assertSame(WorkoutStepType::valueOf('WorkoutStep'),WorkoutStepType::WorkoutStep);
        $this->assertSame(WorkoutStepType::nameOf(WorkoutStepType::WorkoutStep), 'WorkoutStep');

        $this->assertSame(WorkoutStepType::valueOf('WorkoutRepeatStep'),WorkoutStepType::WorkoutRepeatStep);
        $this->assertSame(WorkoutStepType::nameOf(WorkoutStepType::WorkoutRepeatStep), 'WorkoutRepeatStep');
    }
    public function testWorkoutTypeInvalidValue(): void
    {
        $this->assertSame(WorkoutStepType::valueOf('INVALID_VALUE'),false);
        $this->assertSame(WorkoutStepType::nameOf(self::INVALID_VALUE), false);
    }
   
}