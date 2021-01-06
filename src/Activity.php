<?php

declare(strict_types=1);

namespace Garmin;

use GuzzleHttp\Exception\BadResponseException;
use League\OAuth1\Client\Credentials\TokenCredentials;

class Activity extends Client
{
    /**
     * @param string $uri
     */
    private function get(TokenCredentials $tokenCredentials, string $uri)
    {
        $client = $this->createHttpClient();
        $headers = $this->getHeaders($tokenCredentials, 'GET', $uri);

        try {
            $response = $client->get($uri, [
                'headers' => $headers,
            ]);
        } catch (BadResponseException $e) {
            $response = $e->getResponse();
            $body = $response->getBody();
            $statusCode = $response->getStatusCode();

            throw new \Exception(
                "Received error [$body] with status code [$statusCode] when retrieving activity summary."
            );
        }
        return $response->getBody()->getContents();
    }

    /**
     * @param int $uploadStartTimeInSeconds  
     * @param int $uploadEndTimeInSeconds
     */
    public function getActivitySummary(TokenCredentials $tokenCredentials, int $uploadStartTimeInSeconds , int $uploadEndTimeInSeconds)
    {
        $query = http_build_query(['uploadStartTimeInSeconds' => $uploadStartTimeInSeconds, 'uploadEndTimeInSeconds' => $uploadEndTimeInSeconds]);
        $uri = self::USER_API_URL.'activities?'.$query;
        return $this->get($tokenCredentials, $uri);
    }

    /**
     * @param int $uploadStartTimeInSeconds  
     * @param int $uploadEndTimeInSeconds
     */
    public function getManuallyActivitySummary(TokenCredentials $tokenCredentials, int $uploadStartTimeInSeconds , int $uploadEndTimeInSeconds)
    {
        $query = http_build_query(['uploadStartTimeInSeconds' => $uploadStartTimeInSeconds, 'uploadEndTimeInSeconds' => $uploadEndTimeInSeconds]);
        $uri = self::USER_API_URL.'manuallyUpdatedActivities?'.$query;
        return $this->get($tokenCredentials, $uri);
    }

    /**
     * @param int $uploadStartTimeInSeconds  
     * @param int $uploadEndTimeInSeconds
     */
    public function getActivityDetailsSummary(TokenCredentials $tokenCredentials, int $uploadStartTimeInSeconds , int $uploadEndTimeInSeconds)
    {
        // TODO implement Here
        $query = http_build_query(['uploadStartTimeInSeconds' => $uploadStartTimeInSeconds, 'uploadEndTimeInSeconds' => $uploadEndTimeInSeconds]);
        $uri = self::USER_API_URL.'activityDetails?'.$query;
        return $this->get($tokenCredentials, $uri);
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
     * @param int $uploadStartTimeInSeconds 
     * @param int $uploadEndTimeInSeconds
     */
    public function backfillActivitySummary(TokenCredentials $tokenCredentials, int $uploadStartTimeInSeconds, int $uploadEndTimeInSeconds)
    {
        // TODO implement here
        $query = http_build_query(['uploadStartTimeInSeconds' => $uploadStartTimeInSeconds, 'uploadEndTimeInSeconds' => $uploadEndTimeInSeconds]);
        $uri = self::USER_API_URL.'backfill/activities?'.$query;
        return $this->get($tokenCredentials, $uri);
    }

    /**
     * @param int $uploadStartTimeInSeconds 
     * @param int $uploadEndTimeInSeconds
     */
    public function backfillActivityDetailsSummary(TokenCredentials $tokenCredentials,  int $uploadStartTimeInSeconds, int $uploadEndTimeInSeconds)
    {
        // TODO implement here
        $query = http_build_query(['uploadStartTimeInSeconds' => $uploadStartTimeInSeconds, 'uploadEndTimeInSeconds' => $uploadEndTimeInSeconds]);
        $uri = self::USER_API_URL.'backfill/activityDetails?'.$query;
        return $this->get($tokenCredentials, $uri);
    }
}
