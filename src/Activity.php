<?php

declare(strict_types=1);

namespace Garmin;

class Activity extends Client
{

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @param string $uri
     */
    private function getSummary(string $uri)
    {
        // TODO implement here
    }

    /**
     * @param int $uploadStartTimeInSeconds  
     * @param int $uploadEndTimeInSeconds
     */
    public function getActivitySummary(int $uploadStartTimeInSeconds , int $uploadEndTimeInSeconds)
    {
        // TODO implement here
    }

    /**
     * @param int $uploadStartTimeInSeconds  
     * @param int $uploadEndTimeInSeconds
     */
    public function getManuallyActivitySummary(int $uploadStartTimeInSeconds , int $uploadEndTimeInSeconds)
    {
        // TODO implement here
    }

    /**
     * @param int $uploadStartTimeInSeconds  
     * @param int $uploadEndTimeInSeconds
     */
    public function getActivityDetailsSummary(int $uploadStartTimeInSeconds , int $uploadEndTimeInSeconds)
    {
        // TODO implement here
    }

    /**
     * @param int $uploadStartTimeInSeconds  
     * @param int $uploadEndTimeInSeconds
     */
    public function getActivityFiles(int $uploadStartTimeInSeconds , int $uploadEndTimeInSeconds)
    {
        // TODO implement here
    }

    /**
     * @param int $uploadStartTimeInSeconds  
     * @param int $uploadEndTimeInSeconds
     */
    public function getMoveIQSummary(int $uploadStartTimeInSeconds , int $uploadEndTimeInSeconds)
    {
        // TODO implement here
    }

    /**
     * @param string $uri
     */
    private function backfill(string $uri)
    {
        // TODO implement here
    }

    /**
     * @param int $uploadStartTimeInSeconds 
     * @param int $uploadEndTimeInSeconds
     */
    public function backfillActivitySummary(int $uploadStartTimeInSeconds, int $uploadEndTimeInSeconds)
    {
        // TODO implement here
    }

    /**
     * @param int $uploadStartTimeInSeconds 
     * @param int $uploadEndTimeInSeconds
     */
    public function backfillActivityDetailsSummary(int $uploadStartTimeInSeconds, int $uploadEndTimeInSeconds)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function Operation1()
    {
        // TODO implement here
    }

}
