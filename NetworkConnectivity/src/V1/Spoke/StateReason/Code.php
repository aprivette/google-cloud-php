<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1\Spoke\StateReason;

use UnexpectedValueException;

/**
 * The Code enum represents the various reasons a state can be `INACTIVE`.
 *
 * Protobuf type <code>google.cloud.networkconnectivity.v1.Spoke.StateReason.Code</code>
 */
class Code
{
    /**
     * No information available.
     *
     * Generated from protobuf enum <code>CODE_UNSPECIFIED = 0;</code>
     */
    const CODE_UNSPECIFIED = 0;
    /**
     * The proposed spoke is pending review.
     *
     * Generated from protobuf enum <code>PENDING_REVIEW = 1;</code>
     */
    const PENDING_REVIEW = 1;
    /**
     * The proposed spoke has been rejected by the hub administrator.
     *
     * Generated from protobuf enum <code>REJECTED = 2;</code>
     */
    const REJECTED = 2;
    /**
     * The spoke has been deactivated internally.
     *
     * Generated from protobuf enum <code>PAUSED = 3;</code>
     */
    const PAUSED = 3;
    /**
     * Network Connectivity Center encountered errors while accepting
     * the spoke.
     *
     * Generated from protobuf enum <code>FAILED = 4;</code>
     */
    const FAILED = 4;
    /**
     * The proposed spoke update is pending review.
     *
     * Generated from protobuf enum <code>UPDATE_PENDING_REVIEW = 5;</code>
     */
    const UPDATE_PENDING_REVIEW = 5;
    /**
     * The proposed spoke update has been rejected by the hub administrator.
     *
     * Generated from protobuf enum <code>UPDATE_REJECTED = 6;</code>
     */
    const UPDATE_REJECTED = 6;
    /**
     * Network Connectivity Center encountered errors while accepting
     * the spoke update.
     *
     * Generated from protobuf enum <code>UPDATE_FAILED = 7;</code>
     */
    const UPDATE_FAILED = 7;

    private static $valueToName = [
        self::CODE_UNSPECIFIED => 'CODE_UNSPECIFIED',
        self::PENDING_REVIEW => 'PENDING_REVIEW',
        self::REJECTED => 'REJECTED',
        self::PAUSED => 'PAUSED',
        self::FAILED => 'FAILED',
        self::UPDATE_PENDING_REVIEW => 'UPDATE_PENDING_REVIEW',
        self::UPDATE_REJECTED => 'UPDATE_REJECTED',
        self::UPDATE_FAILED => 'UPDATE_FAILED',
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


