<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Filestore backup.
 *
 * Generated from protobuf message <code>google.cloud.filestore.v1.Backup</code>
 */
class Backup extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the backup, in the format
     * `projects/{project_number}/locations/{location_id}/backups/{backup_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * A description of the backup with 2048 characters or less.
     * Requests with longer descriptions will be rejected.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Output only. The backup state.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Backup.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The time when the backup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     */
    private $labels;
    /**
     * Output only. Capacity of the source file share when the backup was created.
     *
     * Generated from protobuf field <code>int64 capacity_gb = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $capacity_gb = 0;
    /**
     * Output only. The size of the storage used by the backup. As backups share
     * storage, this number is expected to change with backup creation/deletion.
     *
     * Generated from protobuf field <code>int64 storage_bytes = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $storage_bytes = 0;
    /**
     * The resource name of the source Filestore instance, in the format
     * `projects/{project_number}/locations/{location_id}/instances/{instance_id}`,
     * used to create this backup.
     *
     * Generated from protobuf field <code>string source_instance = 8 [(.google.api.resource_reference) = {</code>
     */
    protected $source_instance = '';
    /**
     * Name of the file share in the source Filestore instance that the
     * backup is created from.
     *
     * Generated from protobuf field <code>string source_file_share = 9;</code>
     */
    protected $source_file_share = '';
    /**
     * Output only. The service tier of the source Filestore instance that this
     * backup is created from.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.Tier source_instance_tier = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $source_instance_tier = 0;
    /**
     * Output only. Amount of bytes that will be downloaded if the backup is
     * restored. This may be different than storage bytes, since sequential
     * backups of the same disk will share storage.
     *
     * Generated from protobuf field <code>int64 download_bytes = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $download_bytes = 0;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzs = null;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzi = false;
    /**
     * Immutable. KMS key name used for data encryption.
     *
     * Generated from protobuf field <code>string kms_key = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $kms_key = '';
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
     * Generated from protobuf field <code>map<string, string> tags = 15 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tags;
    /**
     * Output only. The file system protocol of the source Filestore instance that
     * this backup is created from.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.FileProtocol file_system_protocol = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $file_system_protocol = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the backup, in the format
     *           `projects/{project_number}/locations/{location_id}/backups/{backup_id}`.
     *     @type string $description
     *           A description of the backup with 2048 characters or less.
     *           Requests with longer descriptions will be rejected.
     *     @type int $state
     *           Output only. The backup state.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the backup was created.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Resource labels to represent user provided metadata.
     *     @type int|string $capacity_gb
     *           Output only. Capacity of the source file share when the backup was created.
     *     @type int|string $storage_bytes
     *           Output only. The size of the storage used by the backup. As backups share
     *           storage, this number is expected to change with backup creation/deletion.
     *     @type string $source_instance
     *           The resource name of the source Filestore instance, in the format
     *           `projects/{project_number}/locations/{location_id}/instances/{instance_id}`,
     *           used to create this backup.
     *     @type string $source_file_share
     *           Name of the file share in the source Filestore instance that the
     *           backup is created from.
     *     @type int $source_instance_tier
     *           Output only. The service tier of the source Filestore instance that this
     *           backup is created from.
     *     @type int|string $download_bytes
     *           Output only. Amount of bytes that will be downloaded if the backup is
     *           restored. This may be different than storage bytes, since sequential
     *           backups of the same disk will share storage.
     *     @type \Google\Protobuf\BoolValue $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Output only. Reserved for future use.
     *     @type string $kms_key
     *           Immutable. KMS key name used for data encryption.
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
     *     @type int $file_system_protocol
     *           Output only. The file system protocol of the source Filestore instance that
     *           this backup is created from.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Filestore\V1\CloudFilestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the backup, in the format
     * `projects/{project_number}/locations/{location_id}/backups/{backup_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the backup, in the format
     * `projects/{project_number}/locations/{location_id}/backups/{backup_id}`.
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
     * A description of the backup with 2048 characters or less.
     * Requests with longer descriptions will be rejected.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the backup with 2048 characters or less.
     * Requests with longer descriptions will be rejected.
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
     * Output only. The backup state.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Backup.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The backup state.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Backup.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Filestore\V1\Backup\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time when the backup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the backup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
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
     * Output only. Capacity of the source file share when the backup was created.
     *
     * Generated from protobuf field <code>int64 capacity_gb = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCapacityGb()
    {
        return $this->capacity_gb;
    }

    /**
     * Output only. Capacity of the source file share when the backup was created.
     *
     * Generated from protobuf field <code>int64 capacity_gb = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapacityGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->capacity_gb = $var;

        return $this;
    }

    /**
     * Output only. The size of the storage used by the backup. As backups share
     * storage, this number is expected to change with backup creation/deletion.
     *
     * Generated from protobuf field <code>int64 storage_bytes = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getStorageBytes()
    {
        return $this->storage_bytes;
    }

    /**
     * Output only. The size of the storage used by the backup. As backups share
     * storage, this number is expected to change with backup creation/deletion.
     *
     * Generated from protobuf field <code>int64 storage_bytes = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setStorageBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->storage_bytes = $var;

        return $this;
    }

    /**
     * The resource name of the source Filestore instance, in the format
     * `projects/{project_number}/locations/{location_id}/instances/{instance_id}`,
     * used to create this backup.
     *
     * Generated from protobuf field <code>string source_instance = 8 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSourceInstance()
    {
        return $this->source_instance;
    }

    /**
     * The resource name of the source Filestore instance, in the format
     * `projects/{project_number}/locations/{location_id}/instances/{instance_id}`,
     * used to create this backup.
     *
     * Generated from protobuf field <code>string source_instance = 8 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSourceInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_instance = $var;

        return $this;
    }

    /**
     * Name of the file share in the source Filestore instance that the
     * backup is created from.
     *
     * Generated from protobuf field <code>string source_file_share = 9;</code>
     * @return string
     */
    public function getSourceFileShare()
    {
        return $this->source_file_share;
    }

    /**
     * Name of the file share in the source Filestore instance that the
     * backup is created from.
     *
     * Generated from protobuf field <code>string source_file_share = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceFileShare($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_file_share = $var;

        return $this;
    }

    /**
     * Output only. The service tier of the source Filestore instance that this
     * backup is created from.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.Tier source_instance_tier = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSourceInstanceTier()
    {
        return $this->source_instance_tier;
    }

    /**
     * Output only. The service tier of the source Filestore instance that this
     * backup is created from.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.Tier source_instance_tier = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSourceInstanceTier($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Filestore\V1\Instance\Tier::class);
        $this->source_instance_tier = $var;

        return $this;
    }

    /**
     * Output only. Amount of bytes that will be downloaded if the backup is
     * restored. This may be different than storage bytes, since sequential
     * backups of the same disk will share storage.
     *
     * Generated from protobuf field <code>int64 download_bytes = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getDownloadBytes()
    {
        return $this->download_bytes;
    }

    /**
     * Output only. Amount of bytes that will be downloaded if the backup is
     * restored. This may be different than storage bytes, since sequential
     * backups of the same disk will share storage.
     *
     * Generated from protobuf field <code>int64 download_bytes = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDownloadBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->download_bytes = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getSatisfiesPzsUnwrapped()
    {
        return $this->readWrapperValue("satisfies_pzs");
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Generated from protobuf field <code>.google.protobuf.BoolValue satisfies_pzs = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Generated from protobuf field <code>bool satisfies_pzi = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzi()
    {
        return $this->satisfies_pzi;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Immutable. KMS key name used for data encryption.
     *
     * Generated from protobuf field <code>string kms_key = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getKmsKey()
    {
        return $this->kms_key;
    }

    /**
     * Immutable. KMS key name used for data encryption.
     *
     * Generated from protobuf field <code>string kms_key = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key = $var;

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
     * Generated from protobuf field <code>map<string, string> tags = 15 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
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
     * Generated from protobuf field <code>map<string, string> tags = 15 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. The file system protocol of the source Filestore instance that
     * this backup is created from.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.FileProtocol file_system_protocol = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFileSystemProtocol()
    {
        return $this->file_system_protocol;
    }

    /**
     * Output only. The file system protocol of the source Filestore instance that
     * this backup is created from.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Instance.FileProtocol file_system_protocol = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFileSystemProtocol($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Filestore\V1\Instance\FileProtocol::class);
        $this->file_system_protocol = $var;

        return $this;
    }

}

