<?php
require 'aws/aws-autoloader.php';
use Aws\S3\S3Client;

$credentials = new Aws\Credentials\Credentials('Your-AWS-AccessKey-Id', 'Your-AWS-Secret-Key');

$s3Client = new Aws\S3\S3Client([
    'version'     => 'latest',
    'region'      => 'us-west-2',
    'credentials' => $credentials
]);





$buckets = $s3Client->listBuckets();
foreach ($buckets['Buckets'] as $bucket) {
    echo $bucket['Name'] . "\n";
}


?>