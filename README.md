Sample PHP S3 client for Ceph RGW
---------------------------------

Sample scripts can be found in `src`, you will need `aws/aws-sdk-php` installed
as specified in `composer.json`. In order to connect, you will need connection
credentials `SECRET_KEY` and `ACCESS_KEY` and existing bucket (can be created by
[create bucket][mb] api call).

For testing purposes you can use [minio][minio], see `docker-composer.yaml` for
sample.

## documentation

* [S3 client](https://docs.aws.amazon.com/aws-sdk-php/v2/api/class-Aws.S3.S3Client.html)
* [Ceph Related Samples](https://docs.ceph.com/docs/master/radosgw/s3/php/)

[mb]: https://docs.ceph.com/docs/master/radosgw/s3/php/#creating-a-bucket
[minio]: https://min.io/
