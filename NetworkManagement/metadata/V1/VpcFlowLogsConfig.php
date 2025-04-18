<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/vpc_flow_logs_config.proto

namespace GPBMetadata\Google\Cloud\Networkmanagement\V1;

class VpcFlowLogsConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/cloud/networkmanagement/v1/vpc_flow_logs_config.proto!google.cloud.networkmanagement.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
VpcFlowLogsConfig
name (	B�A
description (	B�AH�S
state (2:.google.cloud.networkmanagement.v1.VpcFlowLogsConfig.StateB�AH�p
aggregation_interval (2H.google.cloud.networkmanagement.v1.VpcFlowLogsConfig.AggregationIntervalB�AH�
flow_sampling (B�AH�Y
metadata (2=.google.cloud.networkmanagement.v1.VpcFlowLogsConfig.MetadataB�AH�
metadata_fields (	B�A
filter_expr (	B�AH�q
target_resource_state (2H.google.cloud.networkmanagement.v1.VpcFlowLogsConfig.TargetResourceStateB�AH�!
interconnect_attachmentf (	H 

vpn_tunnelg (	H U
labels (2@.google.cloud.networkmanagement.v1.VpcFlowLogsConfig.LabelsEntryB�A4
create_time	 (2.google.protobuf.TimestampB�A4
update_time
 (2.google.protobuf.TimestampB�A-
LabelsEntry
key (	
value (	:8"9
State
STATE_UNSPECIFIED 
ENABLED
DISABLED"�
AggregationInterval$
 AGGREGATION_INTERVAL_UNSPECIFIED 
INTERVAL_5_SEC
INTERVAL_30_SEC
INTERVAL_1_MIN
INTERVAL_5_MIN
INTERVAL_10_MIN
INTERVAL_15_MIN"m
Metadata
METADATA_UNSPECIFIED 
INCLUDE_ALL_METADATA
EXCLUDE_ALL_METADATA
CUSTOM_METADATA"|
TargetResourceState%
!TARGET_RESOURCE_STATE_UNSPECIFIED 
TARGET_RESOURCE_EXISTS"
TARGET_RESOURCE_DOES_NOT_EXIST:��A�
2networkmanagement.googleapis.com/VpcFlowLogsConfigQprojects/{project}/locations/{location}/vpcFlowLogsConfigs/{vpc_flow_logs_config}*vpcFlowLogsConfigs2vpcFlowLogsConfigB
target_resourceB
_descriptionB
_stateB
_aggregation_intervalB
_flow_samplingB
	_metadataB
_filter_exprB
_target_resource_stateB�
%com.google.cloud.networkmanagement.v1BVpcFlowLogsConfigProtoPZScloud.google.com/go/networkmanagement/apiv1/networkmanagementpb;networkmanagementpb�!Google.Cloud.NetworkManagement.V1�!Google\\Cloud\\NetworkManagement\\V1�$Google::Cloud::NetworkManagement::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

