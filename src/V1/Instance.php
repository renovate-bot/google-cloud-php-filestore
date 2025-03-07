<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Filestore instance.
 *
 * Generated from protobuf message <code>google.cloud.filestore.v1.Instance</code>
 */
class Instance extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the instance, in the format
     * `projects/{project}/locations/{location}/instances/{instance}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * The description of the instance (2048 characters or less).
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Output only. The instance state.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Additional information about the instance state, if available.
     *
     * Generated from protobuf field <code>string status_message = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status_message = '';
    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * The service tier of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.Tier tier = 8;</code>
     */
    protected $tier = 0;
    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     */
    private $labels;
    /**
     * File system shares on the instance.
     * For this version, only a single file share is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.FileShareConfig file_shares = 10;</code>
     */
    private $file_shares;
    /**
     * VPC networks to which the instance is connected.
     * For this version, only a single network is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.NetworkConfig networks = 11;</code>
     */
    private $networks;
    /**
     * Server-specified ETag for the instance resource to prevent simultaneous
     * updates from overwriting each other.
     *
     * Generated from protobuf field <code>string etag = 12;</code>
     */
    protected $etag = '';
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzs = null;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzi = false;
    /**
     * KMS key name used for data encryption.
     *
     * Generated from protobuf field <code>string kms_key_name = 14;</code>
     */
    protected $kms_key_name = '';
    /**
     * Output only. Field indicates all the reasons the instance is in "SUSPENDED"
     * state.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.Instance.SuspensionReason suspension_reasons = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $suspension_reasons;
    /**
     * Optional. Replication configuration.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Replication replication = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $replication = null;
    /**
     * Optional. Input only. Immutable. Tag key-value pairs bound to this
     * resource. Each key must be a namespaced name and each value a short name.
     * Example:
     * "123456789012/environment" : "production",
     * "123456789013/costCenter" : "marketing"
     * See the documentation for more information:
     * - Namespaced name:
     * https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing#retrieving_tag_key
     * - Short name:
     * https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing#retrieving_tag_value
     *
     * Generated from protobuf field <code>map<string, string> tags = 20 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tags;
    /**
     * Immutable. The protocol indicates the access protocol for all shares in the
     * instance. This field is immutable and it cannot be changed after the
     * instance has been created. Default value: `NFS_V3`.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.FileProtocol protocol = 21 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $protocol = 0;
    /**
     * Output only. Indicates whether this instance supports configuring its
     * performance. If true, the user can configure the instance's performance by
     * using the 'performance_config' field.
     *
     * Generated from protobuf field <code>bool custom_performance_supported = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $custom_performance_supported = false;
    /**
     * Optional. Used to configure performance.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.PerformanceConfig performance_config = 24 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $performance_config = null;
    /**
     * Output only. Used for getting performance limits.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.PerformanceLimits performance_limits = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $performance_limits = null;
    /**
     * Optional. Indicates whether the instance is protected against deletion.
     *
     * Generated from protobuf field <code>bool deletion_protection_enabled = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $deletion_protection_enabled = false;
    /**
     * Optional. The reason for enabling deletion protection.
     *
     * Generated from protobuf field <code>string deletion_protection_reason = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $deletion_protection_reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the instance, in the format
     *           `projects/{project}/locations/{location}/instances/{instance}`.
     *     @type string $description
     *           The description of the instance (2048 characters or less).
     *     @type int $state
     *           Output only. The instance state.
     *     @type string $status_message
     *           Output only. Additional information about the instance state, if available.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the instance was created.
     *     @type int $tier
     *           The service tier of the instance.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Resource labels to represent user provided metadata.
     *     @type array<\Google\Cloud\Filestore\V1\FileShareConfig>|\Google\Protobuf\Internal\RepeatedField $file_shares
     *           File system shares on the instance.
     *           For this version, only a single file share is supported.
     *     @type array<\Google\Cloud\Filestore\V1\NetworkConfig>|\Google\Protobuf\Internal\RepeatedField $networks
     *           VPC networks to which the instance is connected.
     *           For this version, only a single network is supported.
     *     @type string $etag
     *           Server-specified ETag for the instance resource to prevent simultaneous
     *           updates from overwriting each other.
     *     @type \Google\Protobuf\BoolValue $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Output only. Reserved for future use.
     *     @type string $kms_key_name
     *           KMS key name used for data encryption.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $suspension_reasons
     *           Output only. Field indicates all the reasons the instance is in "SUSPENDED"
     *           state.
     *     @type \Google\Cloud\Filestore\V1\Replication $replication
     *           Optional. Replication configuration.
     *     @type array|\Google\Protobuf\Internal\MapField $tags
     *           Optional. Input only. Immutable. Tag key-value pairs bound to this
     *           resource. Each key must be a namespaced name and each value a short name.
     *           Example:
     *           "123456789012/environment" : "production",
     *           "123456789013/costCenter" : "marketing"
     *           See the documentation for more information:
     *           - Namespaced name:
     *           https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing#retrieving_tag_key
     *           - Short name:
     *           https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing#retrieving_tag_value
     *     @type int $protocol
     *           Immutable. The protocol indicates the access protocol for all shares in the
     *           instance. This field is immutable and it cannot be changed after the
     *           instance has been created. Default value: `NFS_V3`.
     *     @type bool $custom_performance_supported
     *           Output only. Indicates whether this instance supports configuring its
     *           performance. If true, the user can configure the instance's performance by
     *           using the 'performance_config' field.
     *     @type \Google\Cloud\Filestore\V1\Instance\PerformanceConfig $performance_config
     *           Optional. Used to configure performance.
     *     @type \Google\Cloud\Filestore\V1\Instance\PerformanceLimits $performance_limits
     *           Output only. Used for getting performance limits.
     *     @type bool $deletion_protection_enabled
     *           Optional. Indicates whether the instance is protected against deletion.
     *     @type string $deletion_protection_reason
     *           Optional. The reason for enabling deletion protection.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Filestore\V1\CloudFilestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the instance, in the format
     * `projects/{project}/locations/{location}/instances/{instance}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the instance, in the format
     * `projects/{project}/locations/{location}/instances/{instance}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The description of the instance (2048 characters or less).
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the instance (2048 characters or less).
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The instance state.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The instance state.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Filestore\V1\Instance\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Additional information about the instance state, if available.
     *
     * Generated from protobuf field <code>string status_message = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * Output only. Additional information about the instance state, if available.
     *
     * Generated from protobuf field <code>string status_message = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStatusMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The service tier of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.Tier tier = 8;</code>
     * @return int
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * The service tier of the instance.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.Tier tier = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setTier($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Filestore\V1\Instance\Tier::class);
        $this->tier = $var;

        return $this;
    }

    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * File system shares on the instance.
     * For this version, only a single file share is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.FileShareConfig file_shares = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileShares()
    {
        return $this->file_shares;
    }

    /**
     * File system shares on the instance.
     * For this version, only a single file share is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.FileShareConfig file_shares = 10;</code>
     * @param array<\Google\Cloud\Filestore\V1\FileShareConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileShares($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Filestore\V1\FileShareConfig::class);
        $this->file_shares = $arr;

        return $this;
    }

    /**
     * VPC networks to which the instance is connected.
     * For this version, only a single network is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.NetworkConfig networks = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * VPC networks to which the instance is connected.
     * For this version, only a single network is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.NetworkConfig networks = 11;</code>
     * @param array<\Google\Cloud\Filestore\V1\NetworkConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Filestore\V1\NetworkConfig::class);
        $this->networks = $arr;

        return $this;
    }

    /**
     * Server-specified ETag for the instance resource to prevent simultaneous
     * updates from overwriting each other.
     *
     * Generated from protobuf field <code>string etag = 12;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Server-specified ETag for the instance resource to prevent simultaneous
     * updates from overwriting each other.
     *
     * Generated from protobuf field <code>string etag = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getSatisfiesPzs()
    {
        return $this->satisfies_pzs;
    }

    public function hasSatisfiesPzs()
    {
        return isset($this->satisfies_pzs);
    }

    public function clearSatisfiesPzs()
    {
        unset($this->satisfies_pzs);
    }

    /**
     * Returns the unboxed value from <code>getSatisfiesPzs()</code>

     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getSatisfiesPzsUnwrapped()
    {
        return $this->readWrapperValue("satisfies_pzs");
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setSatisfiesPzsUnwrapped($var)
    {
        $this->writeWrapperValue("satisfies_pzs", $var);
        return $this;}

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzi()
    {
        return $this->satisfies_pzi;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzi($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzi = $var;

        return $this;
    }

    /**
     * KMS key name used for data encryption.
     *
     * Generated from protobuf field <code>string kms_key_name = 14;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * KMS key name used for data encryption.
     *
     * Generated from protobuf field <code>string kms_key_name = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * Output only. Field indicates all the reasons the instance is in "SUSPENDED"
     * state.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.Instance.SuspensionReason suspension_reasons = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSuspensionReasons()
    {
        return $this->suspension_reasons;
    }

    /**
     * Output only. Field indicates all the reasons the instance is in "SUSPENDED"
     * state.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.Instance.SuspensionReason suspension_reasons = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSuspensionReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Filestore\V1\Instance\SuspensionReason::class);
        $this->suspension_reasons = $arr;

        return $this;
    }

    /**
     * Optional. Replication configuration.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Replication replication = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Filestore\V1\Replication|null
     */
    public function getReplication()
    {
        return $this->replication;
    }

    public function hasReplication()
    {
        return isset($this->replication);
    }

    public function clearReplication()
    {
        unset($this->replication);
    }

    /**
     * Optional. Replication configuration.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Replication replication = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Filestore\V1\Replication $var
     * @return $this
     */
    public function setReplication($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Filestore\V1\Replication::class);
        $this->replication = $var;

        return $this;
    }

    /**
     * Optional. Input only. Immutable. Tag key-value pairs bound to this
     * resource. Each key must be a namespaced name and each value a short name.
     * Example:
     * "123456789012/environment" : "production",
     * "123456789013/costCenter" : "marketing"
     * See the documentation for more information:
     * - Namespaced name:
     * https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing#retrieving_tag_key
     * - Short name:
     * https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing#retrieving_tag_value
     *
     * Generated from protobuf field <code>map<string, string> tags = 20 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Optional. Input only. Immutable. Tag key-value pairs bound to this
     * resource. Each key must be a namespaced name and each value a short name.
     * Example:
     * "123456789012/environment" : "production",
     * "123456789013/costCenter" : "marketing"
     * See the documentation for more information:
     * - Namespaced name:
     * https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing#retrieving_tag_key
     * - Short name:
     * https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing#retrieving_tag_value
     *
     * Generated from protobuf field <code>map<string, string> tags = 20 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Immutable. The protocol indicates the access protocol for all shares in the
     * instance. This field is immutable and it cannot be changed after the
     * instance has been created. Default value: `NFS_V3`.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.FileProtocol protocol = 21 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Immutable. The protocol indicates the access protocol for all shares in the
     * instance. This field is immutable and it cannot be changed after the
     * instance has been created. Default value: `NFS_V3`.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.FileProtocol protocol = 21 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Filestore\V1\Instance\FileProtocol::class);
        $this->protocol = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether this instance supports configuring its
     * performance. If true, the user can configure the instance's performance by
     * using the 'performance_config' field.
     *
     * Generated from protobuf field <code>bool custom_performance_supported = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getCustomPerformanceSupported()
    {
        return $this->custom_performance_supported;
    }

    /**
     * Output only. Indicates whether this instance supports configuring its
     * performance. If true, the user can configure the instance's performance by
     * using the 'performance_config' field.
     *
     * Generated from protobuf field <code>bool custom_performance_supported = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setCustomPerformanceSupported($var)
    {
        GPBUtil::checkBool($var);
        $this->custom_performance_supported = $var;

        return $this;
    }

    /**
     * Optional. Used to configure performance.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.PerformanceConfig performance_config = 24 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Filestore\V1\Instance\PerformanceConfig|null
     */
    public function getPerformanceConfig()
    {
        return $this->performance_config;
    }

    public function hasPerformanceConfig()
    {
        return isset($this->performance_config);
    }

    public function clearPerformanceConfig()
    {
        unset($this->performance_config);
    }

    /**
     * Optional. Used to configure performance.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.PerformanceConfig performance_config = 24 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Filestore\V1\Instance\PerformanceConfig $var
     * @return $this
     */
    public function setPerformanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Filestore\V1\Instance\PerformanceConfig::class);
        $this->performance_config = $var;

        return $this;
    }

    /**
     * Output only. Used for getting performance limits.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.PerformanceLimits performance_limits = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Filestore\V1\Instance\PerformanceLimits|null
     */
    public function getPerformanceLimits()
    {
        return $this->performance_limits;
    }

    public function hasPerformanceLimits()
    {
        return isset($this->performance_limits);
    }

    public function clearPerformanceLimits()
    {
        unset($this->performance_limits);
    }

    /**
     * Output only. Used for getting performance limits.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.PerformanceLimits performance_limits = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Filestore\V1\Instance\PerformanceLimits $var
     * @return $this
     */
    public function setPerformanceLimits($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Filestore\V1\Instance\PerformanceLimits::class);
        $this->performance_limits = $var;

        return $this;
    }

    /**
     * Optional. Indicates whether the instance is protected against deletion.
     *
     * Generated from protobuf field <code>bool deletion_protection_enabled = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDeletionProtectionEnabled()
    {
        return $this->deletion_protection_enabled;
    }

    /**
     * Optional. Indicates whether the instance is protected against deletion.
     *
     * Generated from protobuf field <code>bool deletion_protection_enabled = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeletionProtectionEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->deletion_protection_enabled = $var;

        return $this;
    }

    /**
     * Optional. The reason for enabling deletion protection.
     *
     * Generated from protobuf field <code>string deletion_protection_reason = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDeletionProtectionReason()
    {
        return $this->deletion_protection_reason;
    }

    /**
     * Optional. The reason for enabling deletion protection.
     *
     * Generated from protobuf field <code>string deletion_protection_reason = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDeletionProtectionReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->deletion_protection_reason = $var;

        return $this;
    }

}

