<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memorystore/v1beta/memorystore.proto

namespace Google\Cloud\Memorystore\V1beta;

use UnexpectedValueException;

/**
 * Type of a PSC connection
 *
 * Protobuf type <code>google.cloud.memorystore.v1beta.ConnectionType</code>
 */
class ConnectionType
{
    /**
     * Connection Type is not set
     *
     * Generated from protobuf enum <code>CONNECTION_TYPE_UNSPECIFIED = 0;</code>
     */
    const CONNECTION_TYPE_UNSPECIFIED = 0;
    /**
     * Connection that will be used for topology discovery.
     *
     * Generated from protobuf enum <code>CONNECTION_TYPE_DISCOVERY = 1;</code>
     */
    const CONNECTION_TYPE_DISCOVERY = 1;
    /**
     * Connection that will be used as primary endpoint to access primary.
     *
     * Generated from protobuf enum <code>CONNECTION_TYPE_PRIMARY = 2;</code>
     */
    const CONNECTION_TYPE_PRIMARY = 2;
    /**
     * Connection that will be used as reader endpoint to access replicas.
     *
     * Generated from protobuf enum <code>CONNECTION_TYPE_READER = 3;</code>
     */
    const CONNECTION_TYPE_READER = 3;

    private static $valueToName = [
        self::CONNECTION_TYPE_UNSPECIFIED => 'CONNECTION_TYPE_UNSPECIFIED',
        self::CONNECTION_TYPE_DISCOVERY => 'CONNECTION_TYPE_DISCOVERY',
        self::CONNECTION_TYPE_PRIMARY => 'CONNECTION_TYPE_PRIMARY',
        self::CONNECTION_TYPE_READER => 'CONNECTION_TYPE_READER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

