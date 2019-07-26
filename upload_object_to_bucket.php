<?php

require 'aws/aws-autoloader.php';
use Aws\S3\S3Client;

$credentials = new Aws\Credentials\Credentials('Your-AWS-AccessKey-Id', 'Your-AWS-Secret-Key');

$s3 = new Aws\S3\S3Client([
    'version'     => 'latest',
    'region'      => 'us-west-2',
    'credentials' => $credentials
]);





$file_Path="File/to/Upload";
$BUCKET_NAME="Your-Bucket-name";
$key=basename($file_Path);
$ContentLength=filesize($file_Path);


try {
$result = $s3->putObject([
        'Bucket' => $BUCKET_NAME,
        'Key' => $key,
        'SourceFile' => $file_Path,
    'ContentLength' => $ContentLength,
    ]);
} catch (S3Exception $e) {
    echo $e->getMessage() . "\n";
}

print_r($result);



?>