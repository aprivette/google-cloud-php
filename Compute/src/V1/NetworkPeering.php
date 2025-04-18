<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A network peering attached to a network resource. The message includes the peering name, peer network, peering state, and a flag indicating whether Google Compute Engine should automatically create routes for the peering.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkPeering</code>
 */
class NetworkPeering extends \Google\Protobuf\Internal\Message
{
    /**
     * This field will be deprecated soon. Use the exchange_subnet_routes field instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>optional bool auto_create_routes = 57454941;</code>
     */
    private $auto_create_routes = null;
    /**
     * Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>optional bool exchange_subnet_routes = 26322256;</code>
     */
    private $exchange_subnet_routes = null;
    /**
     * Whether to export the custom routes to peer network. The default value is false.
     *
     * Generated from protobuf field <code>optional bool export_custom_routes = 60281485;</code>
     */
    private $export_custom_routes = null;
    /**
     * Whether subnet routes with public IP range are exported. The default value is true, all subnet routes are exported. IPv4 special-use ranges are always exported to peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>optional bool export_subnet_routes_with_public_ip = 97940834;</code>
     */
    private $export_subnet_routes_with_public_ip = null;
    /**
     * Whether to import the custom routes from peer network. The default value is false.
     *
     * Generated from protobuf field <code>optional bool import_custom_routes = 197982398;</code>
     */
    private $import_custom_routes = null;
    /**
     * Whether subnet routes with public IP range are imported. The default value is false. IPv4 special-use ranges are always imported from peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>optional bool import_subnet_routes_with_public_ip = 14419729;</code>
     */
    private $import_subnet_routes_with_public_ip = null;
    /**
     * Name of this peering. Provided by the client when the peering is created. The name must comply with RFC1035. Specifically, the name must be 1-63 characters long and match regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all the following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * The URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     */
    private $network = null;
    /**
     * [Output Only] Maximum Transmission Unit in bytes of the peer network.
     *
     * Generated from protobuf field <code>optional int32 peer_mtu = 69584721;</code>
     */
    private $peer_mtu = null;
    /**
     * Which IP version(s) of traffic and routes are allowed to be imported or exported between peer networks. The default value is IPV4_ONLY.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     */
    private $stack_type = null;
    /**
     * [Output Only] State for the peering, either `ACTIVE` or `INACTIVE`. The peering is `ACTIVE` when there's a matching configuration in the peer network.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     */
    private $state = null;
    /**
     * [Output Only] Details about the current state of the peering.
     *
     * Generated from protobuf field <code>optional string state_details = 95566996;</code>
     */
    private $state_details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $auto_create_routes
     *           This field will be deprecated soon. Use the exchange_subnet_routes field instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *     @type bool $exchange_subnet_routes
     *           Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *     @type bool $export_custom_routes
     *           Whether to export the custom routes to peer network. The default value is false.
     *     @type bool $export_subnet_routes_with_public_ip
     *           Whether subnet routes with public IP range are exported. The default value is true, all subnet routes are exported. IPv4 special-use ranges are always exported to peers and are not controlled by this field.
     *     @type bool $import_custom_routes
     *           Whether to import the custom routes from peer network. The default value is false.
     *     @type bool $import_subnet_routes_with_public_ip
     *           Whether subnet routes with public IP range are imported. The default value is false. IPv4 special-use ranges are always imported from peers and are not controlled by this field.
     *     @type string $name
     *           Name of this peering. Provided by the client when the peering is created. The name must comply with RFC1035. Specifically, the name must be 1-63 characters long and match regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all the following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $network
     *           The URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *     @type int $peer_mtu
     *           [Output Only] Maximum Transmission Unit in bytes of the peer network.
     *     @type string $stack_type
     *           Which IP version(s) of traffic and routes are allowed to be imported or exported between peer networks. The default value is IPV4_ONLY.
     *           Check the StackType enum for the list of possible values.
     *     @type string $state
     *           [Output Only] State for the peering, either `ACTIVE` or `INACTIVE`. The peering is `ACTIVE` when there's a matching configuration in the peer network.
     *           Check the State enum for the list of possible values.
     *     @type string $state_details
     *           [Output Only] Details about the current state of the peering.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * This field will be deprecated soon. Use the exchange_subnet_routes field instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>optional bool auto_create_routes = 57454941;</code>
     * @return bool
     */
    public function getAutoCreateRoutes()
    {
        return isset($this->auto_create_routes) ? $this->auto_create_routes : false;
    }

    public function hasAutoCreateRoutes()
    {
        return isset($this->auto_create_routes);
    }

    public function clearAutoCreateRoutes()
    {
        unset($this->auto_create_routes);
    }

    /**
     * This field will be deprecated soon. Use the exchange_subnet_routes field instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>optional bool auto_create_routes = 57454941;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoCreateRoutes($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_create_routes = $var;

        return $this;
    }

    /**
     * Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>optional bool exchange_subnet_routes = 26322256;</code>
     * @return bool
     */
    public function getExchangeSubnetRoutes()
    {
        return isset($this->exchange_subnet_routes) ? $this->exchange_subnet_routes : false;
    }

    public function hasExchangeSubnetRoutes()
    {
        return isset($this->exchange_subnet_routes);
    }

    public function clearExchangeSubnetRoutes()
    {
        unset($this->exchange_subnet_routes);
    }

    /**
     * Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>optional bool exchange_subnet_routes = 26322256;</code>
     * @param bool $var
     * @return $this
     */
    public function setExchangeSubnetRoutes($var)
    {
        GPBUtil::checkBool($var);
        $this->exchange_subnet_routes = $var;

        return $this;
    }

    /**
     * Whether to export the custom routes to peer network. The default value is false.
     *
     * Generated from protobuf field <code>optional bool export_custom_routes = 60281485;</code>
     * @return bool
     */
    public function getExportCustomRoutes()
    {
        return isset($this->export_custom_routes) ? $this->export_custom_routes : false;
    }

    public function hasExportCustomRoutes()
    {
        return isset($this->export_custom_routes);
    }

    public function clearExportCustomRoutes()
    {
        unset($this->export_custom_routes);
    }

    /**
     * Whether to export the custom routes to peer network. The default value is false.
     *
     * Generated from protobuf field <code>optional bool export_custom_routes = 60281485;</code>
     * @param bool $var
     * @return $this
     */
    public function setExportCustomRoutes($var)
    {
        GPBUtil::checkBool($var);
        $this->export_custom_routes = $var;

        return $this;
    }

    /**
     * Whether subnet routes with public IP range are exported. The default value is true, all subnet routes are exported. IPv4 special-use ranges are always exported to peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>optional bool export_subnet_routes_with_public_ip = 97940834;</code>
     * @return bool
     */
    public function getExportSubnetRoutesWithPublicIp()
    {
        return isset($this->export_subnet_routes_with_public_ip) ? $this->export_subnet_routes_with_public_ip : false;
    }

    public function hasExportSubnetRoutesWithPublicIp()
    {
        return isset($this->export_subnet_routes_with_public_ip);
    }

    public function clearExportSubnetRoutesWithPublicIp()
    {
        unset($this->export_subnet_routes_with_public_ip);
    }

    /**
     * Whether subnet routes with public IP range are exported. The default value is true, all subnet routes are exported. IPv4 special-use ranges are always exported to peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>optional bool export_subnet_routes_with_public_ip = 97940834;</code>
     * @param bool $var
     * @return $this
     */
    public function setExportSubnetRoutesWithPublicIp($var)
    {
        GPBUtil::checkBool($var);
        $this->export_subnet_routes_with_public_ip = $var;

        return $this;
    }

    /**
     * Whether to import the custom routes from peer network. The default value is false.
     *
     * Generated from protobuf field <code>optional bool import_custom_routes = 197982398;</code>
     * @return bool
     */
    public function getImportCustomRoutes()
    {
        return isset($this->import_custom_routes) ? $this->import_custom_routes : false;
    }

    public function hasImportCustomRoutes()
    {
        return isset($this->import_custom_routes);
    }

    public function clearImportCustomRoutes()
    {
        unset($this->import_custom_routes);
    }

    /**
     * Whether to import the custom routes from peer network. The default value is false.
     *
     * Generated from protobuf field <code>optional bool import_custom_routes = 197982398;</code>
     * @param bool $var
     * @return $this
     */
    public function setImportCustomRoutes($var)
    {
        GPBUtil::checkBool($var);
        $this->import_custom_routes = $var;

        return $this;
    }

    /**
     * Whether subnet routes with public IP range are imported. The default value is false. IPv4 special-use ranges are always imported from peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>optional bool import_subnet_routes_with_public_ip = 14419729;</code>
     * @return bool
     */
    public function getImportSubnetRoutesWithPublicIp()
    {
        return isset($this->import_subnet_routes_with_public_ip) ? $this->import_subnet_routes_with_public_ip : false;
    }

    public function hasImportSubnetRoutesWithPublicIp()
    {
        return isset($this->import_subnet_routes_with_public_ip);
    }

    public function clearImportSubnetRoutesWithPublicIp()
    {
        unset($this->import_subnet_routes_with_public_ip);
    }

    /**
     * Whether subnet routes with public IP range are imported. The default value is false. IPv4 special-use ranges are always imported from peers and are not controlled by this field.
     *
     * Generated from protobuf field <code>optional bool import_subnet_routes_with_public_ip = 14419729;</code>
     * @param bool $var
     * @return $this
     */
    public function setImportSubnetRoutesWithPublicIp($var)
    {
        GPBUtil::checkBool($var);
        $this->import_subnet_routes_with_public_ip = $var;

        return $this;
    }

    /**
     * Name of this peering. Provided by the client when the peering is created. The name must comply with RFC1035. Specifically, the name must be 1-63 characters long and match regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all the following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of this peering. Provided by the client when the peering is created. The name must comply with RFC1035. Specifically, the name must be 1-63 characters long and match regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all the following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     * The URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return isset($this->network) ? $this->network : '';
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * The URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * [Output Only] Maximum Transmission Unit in bytes of the peer network.
     *
     * Generated from protobuf field <code>optional int32 peer_mtu = 69584721;</code>
     * @return int
     */
    public function getPeerMtu()
    {
        return isset($this->peer_mtu) ? $this->peer_mtu : 0;
    }

    public function hasPeerMtu()
    {
        return isset($this->peer_mtu);
    }

    public function clearPeerMtu()
    {
        unset($this->peer_mtu);
    }

    /**
     * [Output Only] Maximum Transmission Unit in bytes of the peer network.
     *
     * Generated from protobuf field <code>optional int32 peer_mtu = 69584721;</code>
     * @param int $var
     * @return $this
     */
    public function setPeerMtu($var)
    {
        GPBUtil::checkInt32($var);
        $this->peer_mtu = $var;

        return $this;
    }

    /**
     * Which IP version(s) of traffic and routes are allowed to be imported or exported between peer networks. The default value is IPV4_ONLY.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     * @return string
     */
    public function getStackType()
    {
        return isset($this->stack_type) ? $this->stack_type : '';
    }

    public function hasStackType()
    {
        return isset($this->stack_type);
    }

    public function clearStackType()
    {
        unset($this->stack_type);
    }

    /**
     * Which IP version(s) of traffic and routes are allowed to be imported or exported between peer networks. The default value is IPV4_ONLY.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     * @param string $var
     * @return $this
     */
    public function setStackType($var)
    {
        GPBUtil::checkString($var, True);
        $this->stack_type = $var;

        return $this;
    }

    /**
     * [Output Only] State for the peering, either `ACTIVE` or `INACTIVE`. The peering is `ACTIVE` when there's a matching configuration in the peer network.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @return string
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : '';
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * [Output Only] State for the peering, either `ACTIVE` or `INACTIVE`. The peering is `ACTIVE` when there's a matching configuration in the peer network.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * [Output Only] Details about the current state of the peering.
     *
     * Generated from protobuf field <code>optional string state_details = 95566996;</code>
     * @return string
     */
    public function getStateDetails()
    {
        return isset($this->state_details) ? $this->state_details : '';
    }

    public function hasStateDetails()
    {
        return isset($this->state_details);
    }

    public function clearStateDetails()
    {
        unset($this->state_details);
    }

    /**
     * [Output Only] Details about the current state of the peering.
     *
     * Generated from protobuf field <code>optional string state_details = 95566996;</code>
     * @param string $var
     * @return $this
     */
    public function setStateDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_details = $var;

        return $this;
    }

}

