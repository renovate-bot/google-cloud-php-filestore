<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1\Instance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Used for setting the performance configuration.
 * If the user doesn't specify PerformanceConfig, automatically provision
 * the default performance settings as described in
 * https://cloud.google.com/filestore/docs/performance. Larger instances will
 * be linearly set to more IOPS. If the instance's capacity is increased or
 * decreased, its performance will be automatically adjusted upwards or
 * downwards accordingly (respectively).
 *
 * Generated from protobuf message <code>google.cloud.filestore.v1.Instance.PerformanceConfig</code>
 */
class PerformanceConfig extends \Google\Protobuf\Internal\Message
{
    protected $mode;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Filestore\V1\Instance\IOPSPerTB $iops_per_tb
     *           Provision IOPS dynamically based on the capacity of the instance.
     *           Provisioned IOPS will be calculated by multiplying the capacity of the
     *           instance in TiB by the `iops_per_tb` value. For example, for a 2 TiB
     *           instance with an `iops_per_tb` value of 17000 the provisioned IOPS will
     *           be 34000.
     *           If the calculated value is outside the supported range for the
     *           instance's capacity during instance creation, instance creation will
     *           fail with an `InvalidArgument` error. Similarly, if an instance
     *           capacity update would result in a value outside the supported range,
     *           the update will fail with an `InvalidArgument` error.
     *     @type \Google\Cloud\Filestore\V1\Instance\FixedIOPS $fixed_iops
     *           Choose a fixed provisioned IOPS value for the instance, which will
     *           remain constant regardless of instance capacity. Value must be a
     *           multiple of 1000.
     *           If the chosen value is outside the supported range for the instance's
     *           capacity during instance creation, instance creation will fail with an
     *           `InvalidArgument` error. Similarly, if an instance capacity update
     *           would result in a value outside the supported range, the update will
     *           fail with an `InvalidArgument` error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Filestore\V1\CloudFilestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Provision IOPS dynamically based on the capacity of the instance.
     * Provisioned IOPS will be calculated by multiplying the capacity of the
     * instance in TiB by the `iops_per_tb` value. For example, for a 2 TiB
     * instance with an `iops_per_tb` value of 17000 the provisioned IOPS will
     * be 34000.
     * If the calculated value is outside the supported range for the
     * instance's capacity during instance creation, instance creation will
     * fail with an `InvalidArgument` error. Similarly, if an instance
     * capacity update would result in a value outside the supported range,
     * the update will fail with an `InvalidArgument` error.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.IOPSPerTB iops_per_tb = 4;</code>
     * @return \Google\Cloud\Filestore\V1\Instance\IOPSPerTB|null
     */
    public function getIopsPerTb()
    {
        return $this->readOneof(4);
    }

    public function hasIopsPerTb()
    {
        return $this->hasOneof(4);
    }

    /**
     * Provision IOPS dynamically based on the capacity of the instance.
     * Provisioned IOPS will be calculated by multiplying the capacity of the
     * instance in TiB by the `iops_per_tb` value. For example, for a 2 TiB
     * instance with an `iops_per_tb` value of 17000 the provisioned IOPS will
     * be 34000.
     * If the calculated value is outside the supported range for the
     * instance's capacity during instance creation, instance creation will
     * fail with an `InvalidArgument` error. Similarly, if an instance
     * capacity update would result in a value outside the supported range,
     * the update will fail with an `InvalidArgument` error.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.IOPSPerTB iops_per_tb = 4;</code>
     * @param \Google\Cloud\Filestore\V1\Instance\IOPSPerTB $var
     * @return $this
     */
    public function setIopsPerTb($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Filestore\V1\Instance\IOPSPerTB::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Choose a fixed provisioned IOPS value for the instance, which will
     * remain constant regardless of instance capacity. Value must be a
     * multiple of 1000.
     * If the chosen value is outside the supported range for the instance's
     * capacity during instance creation, instance creation will fail with an
     * `InvalidArgument` error. Similarly, if an instance capacity update
     * would result in a value outside the supported range, the update will
     * fail with an `InvalidArgument` error.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.FixedIOPS fixed_iops = 2;</code>
     * @return \Google\Cloud\Filestore\V1\Instance\FixedIOPS|null
     */
    public function getFixedIops()
    {
        return $this->readOneof(2);
    }

    public function hasFixedIops()
    {
        return $this->hasOneof(2);
    }

    /**
     * Choose a fixed provisioned IOPS value for the instance, which will
     * remain constant regardless of instance capacity. Value must be a
     * multiple of 1000.
     * If the chosen value is outside the supported range for the instance's
     * capacity during instance creation, instance creation will fail with an
     * `InvalidArgument` error. Similarly, if an instance capacity update
     * would result in a value outside the supported range, the update will
     * fail with an `InvalidArgument` error.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.FixedIOPS fixed_iops = 2;</code>
     * @param \Google\Cloud\Filestore\V1\Instance\FixedIOPS $var
     * @return $this
     */
    public function setFixedIops($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Filestore\V1\Instance\FixedIOPS::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->whichOneof("mode");
    }

}


