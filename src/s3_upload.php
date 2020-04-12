#!/usr/bin/php
<?php

if (count($argv) != 3) {
  $sc = basename(__FILE__, '.php');
  fwrite(STDERR, <<<EOT
Upload file to S3 bucket
Usage:
  $sc <bucket> <file>

EOT);
  exit(1);
}

require __DIR__ . '/../vendor/autoload.php';

use Aws\S3\S3Client;

$access_key = getenv('ACCESS_KEY');
$secret_key = getenv('SECRET_KEY');

$s3 = new S3Client([
    'version' => '2006-03-01',
    'region'  => '',
    'endpoint' => 'https://s3.heu.cz',
    'credentials' => [
      'key' => $access_key,
      'secret' => $secret_key,
    ],
    'use_path_style_endpoint' => true,
]);

$s3->putObject([
    'Bucket' => $argv[1],
    'Key' => basename($argv[2]),
    'Body' =>  fopen($argv[2], 'r'),
]);
