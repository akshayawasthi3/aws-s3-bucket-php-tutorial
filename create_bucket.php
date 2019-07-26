<?php
require 'aws/aws-autoloader.php';
use Aws\S3\S3Client;

$credentials = new Aws\Credentials\Credentials('Your-AWS-AccessKey-Id', 'Your-AWS-Secret-Key');

$s3 = new Aws\S3\S3Client([
    'version'     => 'latest',
    'region'      => 'us-west-2',
    'credentials' => $credentials
]);



$BUCKET_NAME="Your-Bucket-name";

    $result = $s3->createBucket([
        'Bucket' => $BUCKET_NAME,
    ]);
} catch (AwsException $e) {
    // output error message if fails
    echo $e->getMessage();
    echo "\n";
}



?>