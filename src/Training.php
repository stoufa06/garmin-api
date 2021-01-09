<?php

declare(strict_types=1);

namespace Garmin;

use Garmin\Training\Workouts\Workout;
use Garmin\Training\Workouts\WorkoutSchedule;
use GuzzleHttp\Exception\BadResponseException;
use League\OAuth1\Client\Credentials\TokenCredentials;

class Training extends Client
{
    const TRAINING_API_URL = "https://apis.garmin.com/training-api/";
    /**
     * @param string $uri 
     * @param string $data
     */
    public function create(TokenCredentials $tokenCredentials, string $uri, array $data = [])
    {
        // TODO implement here
        $client = $this->createHttpClient();
        $headers = $this->getHeaders($tokenCredentials, 'POST', $uri, ['json' => $data]);

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
     * @param string $uri
     */
    public function retrieve(TokenCredentials $tokenCredentials, string $uri)
    {
        // TODO implement here
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
     * @param string $uri 
     * @param string $data
     */
    public function update(TokenCredentials $tokenCredentials, string $uri, array $data=[])
    {
        // TODO implement here
        // TODO implement here
        $client = $this->createHttpClient();
        $headers = $this->getHeaders($tokenCredentials, 'POST', $uri, ['json' => $data]);

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
     * @param string $uri
     */
    public function delete(TokenCredentials $tokenCredentials, string $uri)
    {
        // TODO implement here
        $client = $this->createHttpClient();
        $headers = $this->getHeaders($tokenCredentials, 'DELELTE', $uri);

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
     * @param [object Object] $workout
     */
    public function createWorkout(TokenCredentials $tokenCredentials, Workout $workout)
    {
        // TODO implement here
        $response = $this->create($tokenCredentials, self::TRAINING_API_URL.'workout', $workout->toArray());
        $response = json_decode($response, true);
        if ($response && is_array($response)) {
            $response = Workout::create($response);
        }
        return $response;
    }

    /**
     * @param int $workoutId
     */
    public function retrieveWorkout(TokenCredentials $tokenCredentials, int $workoutId)
    {
        // TODO implement here
        $response = $this->retrieve($tokenCredentials, self::TRAINING_API_URL.'workout/'.$workoutId);
        $response = json_decode($response, true);
        if ($response && is_array($response)) {
            $response = Workout::create($response);
        }
        return $response;
    }

    /**
     * @param [object Object] $workout
     */
    public function updateWorkout(TokenCredentials $tokenCredentials, Workout $workout)
    {
        // TODO implement here
        $response = $this->update($tokenCredentials, self::TRAINING_API_URL.'workout/'.$workout->getWorkoutId(), $workout->toArray());
        $response = json_decode($response, true);
        if ($response && is_array($response)) {
            $response = Workout::create($response);
        }
        return $response;
    }

    /**
     * @param int $workoutId
     */
    public function deleteWorkout(TokenCredentials $tokenCredentials, int $workoutId)
    {
        // TODO implement here
        $this->delete($tokenCredentials, self::TRAINING_API_URL.'workout/'.$workoutId);
        
    }

    /**
     * @param [object Object] $workout
     */
    public function createWorkoutSchedule(TokenCredentials $tokenCredentials, WorkoutSchedule $workout)
    {
        // TODO implement here
        $response = $this->create($tokenCredentials, self::TRAINING_API_URL.'schedule', $workout->toArray());
        $response = json_decode($response, true);
        if ($response && is_array($response)) {
            $response = new WorkoutSchedule($response);
        }
        return $response;
    }

    /**
     * @param int $workoutId
     */
    public function retrieveWorkoutSchedule(TokenCredentials $tokenCredentials, int $workoutId)
    {
        // TODO implement here
        $response = $this->retrieve($tokenCredentials, self::TRAINING_API_URL.'schedule/'.$workoutId);
        $response = json_decode($response, true);
        if ($response && is_array($response)) {
            $response = new WorkoutSchedule($response);
        }
        return $response;
    }

    /**
     * @param [object Object] $workout
     */
    public function updateWorkoutSchedule(TokenCredentials $tokenCredentials, WorkoutSchedule $workout)
    {
        // TODO implement here
        // TODO implement here
        $response = $this->update($tokenCredentials, self::TRAINING_API_URL.'schedule/'.$workout->getWorkoutId(), $workout->toArray());
        $response = json_decode($response, true);
        if ($response && is_array($response)) {
            $response = new WorkoutSchedule($response);
        }
        return $response;
    }

    /**
     * @param int $workoutId
     */
    public function deleteWorkoutSchedule(TokenCredentials $tokenCredentials, int $workoutId)
    {
        // TODO implement here
        $this->delete($tokenCredentials, self::TRAINING_API_URL.'schedule/'.$workoutId);
    }

}
