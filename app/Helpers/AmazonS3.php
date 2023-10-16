<?php

namespace App\Helpers;

use Aws\S3\S3Client;
use Aws\CommandInterface;
use Illuminate\Support\Facades\Storage;

class AmazonS3
{
    /**
     * @var int
     */
    protected const EXPIRATION_TIME = 60;

    /**
     * @var S3Client
     */
    protected $client;

    public function __construct()
    {
        $this->client = new S3Client([
            'credentials' => [
                'key'    => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
            'region'      => env('AWS_DEFAULT_REGION'),
            'version'     => "latest",
            'bucket_endpoint' => false,
            'use_path_style_endpoint' => true,
            'endpoint' => env('AWS_ENDPOINT'),
        ]);
    }

    /**
     * Create a pre-signed URL for the given S3 command object.
     *
     * @param CommandInterface $command Command to create a pre-signed
     *                                               URL for.
     * @param int $expiration The time at which the URL should expire(minutes).
     *
     * @return string
     */
    protected function createPresignedUrl(CommandInterface $command, int $expiration): string
    {
        $request = $this->client->createPresignedRequest($command, now()->addMinutes($expiration));
        return (string) $request->getUri();
    }

    /**
     * Gennerate presigned url has expried time.
     *
     * @param string $objectKey The key of the object
     * @param string $contentType
     * @param int $expiration The time at which the URL should expire(minutes).
     *
     * @return string
     */
    public function getPreSignedUploadUrl(string $objectKey, string $contentType = 'image/jpeg', int $expiration = self::EXPIRATION_TIME): string
    {
        $command = $this->client->getCommand('PutObject', [
            'Bucket' => env('AWS_BUCKET'),
            'Key'    => $objectKey,
            'ContentType' => $contentType,
        ]);

        return $this->createPresignedUrl($command, $expiration);
    }

    /**
     * Gennerate presigned upload url has expried time.
     *
     * @param string $objectKey The key of the object
     * @param int $expiration The time at which the URL should expire(minutes).
     *
     * @return string
     */
    public function getObjectUrl(string $objectKey, int $expiration = self::EXPIRATION_TIME): string
    {
        $command = $this->client->getCommand('GetObject', [
            'Bucket' => env('AWS_BUCKET'),
            'Key'    => $objectKey,
        ]);

        return $this->createPresignedUrl($command, $expiration);
    }
}
