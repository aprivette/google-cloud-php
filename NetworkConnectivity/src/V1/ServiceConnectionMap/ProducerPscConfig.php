<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/cross_network_automation.proto

namespace Google\Cloud\NetworkConnectivity\V1\ServiceConnectionMap;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The PSC configurations on producer side.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.ServiceConnectionMap.ProducerPscConfig</code>
 */
class ProducerPscConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource path of a service attachment.
     * Example:
     * projects/{projectNumOrId}/regions/{region}/serviceAttachments/{resourceId}.
     *
     * Generated from protobuf field <code>string service_attachment_uri = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $service_attachment_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_attachment_uri
     *           The resource path of a service attachment.
     *           Example:
     *           projects/{projectNumOrId}/regions/{region}/serviceAttachments/{resourceId}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\CrossNetworkAutomation::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource path of a service attachment.
     * Example:
     * projects/{projectNumOrId}/regions/{region}/serviceAttachments/{resourceId}.
     *
     * Generated from protobuf field <code>string service_attachment_uri = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServiceAttachmentUri()
    {
        return $this->service_attachment_uri;
    }

    /**
     * The resource path of a service attachment.
     * Example:
     * projects/{projectNumOrId}/regions/{region}/serviceAttachments/{resourceId}.
     *
     * Generated from protobuf field <code>string service_attachment_uri = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAttachmentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_attachment_uri = $var;

        return $this;
    }

}


