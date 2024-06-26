<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/messages.proto

namespace Grpc\Testing\LoadBalancerStatsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grpc.testing.LoadBalancerStatsResponse.RpcMetadata</code>
 */
class RpcMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * metadata values for each rpc for the keys specified in
     * LoadBalancerStatsRequest.metadata_keys.
     * metadata keys and values are returned exactly as was recieved
     * from the server.
     *
     * Generated from protobuf field <code>repeated .grpc.testing.LoadBalancerStatsResponse.MetadataEntry metadata = 1;</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Grpc\Testing\LoadBalancerStatsResponse\MetadataEntry>|\Google\Protobuf\Internal\RepeatedField $metadata
     *           metadata values for each rpc for the keys specified in
     *           LoadBalancerStatsRequest.metadata_keys.
     *           metadata keys and values are returned exactly as was recieved
     *           from the server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Proto\Grpc\Testing\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * metadata values for each rpc for the keys specified in
     * LoadBalancerStatsRequest.metadata_keys.
     * metadata keys and values are returned exactly as was recieved
     * from the server.
     *
     * Generated from protobuf field <code>repeated .grpc.testing.LoadBalancerStatsResponse.MetadataEntry metadata = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * metadata values for each rpc for the keys specified in
     * LoadBalancerStatsRequest.metadata_keys.
     * metadata keys and values are returned exactly as was recieved
     * from the server.
     *
     * Generated from protobuf field <code>repeated .grpc.testing.LoadBalancerStatsResponse.MetadataEntry metadata = 1;</code>
     * @param array<\Grpc\Testing\LoadBalancerStatsResponse\MetadataEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grpc\Testing\LoadBalancerStatsResponse\MetadataEntry::class);
        $this->metadata = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RpcMetadata::class, \Grpc\Testing\LoadBalancerStatsResponse_RpcMetadata::class);

