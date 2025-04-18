<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/version.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Versions.LoadVersion][google.cloud.dialogflow.cx.v3.Versions.LoadVersion].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.LoadVersionRequest</code>
 */
class LoadVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [Version][google.cloud.dialogflow.cx.v3.Version] to be loaded
     * to draft flow. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * This field is used to prevent accidental overwrite of other agent
     * resources, which can potentially impact other flow's behavior. If
     * `allow_override_agent_resources` is false, conflicted agent-level resources
     * will not be overridden (i.e. intents, entities, webhooks).
     *
     * Generated from protobuf field <code>bool allow_override_agent_resources = 2;</code>
     */
    protected $allow_override_agent_resources = false;

    /**
     * @param string $name Required. The [Version][google.cloud.dialogflow.cx.v3.Version] to be loaded
     *                     to draft flow. Format:
     *                     `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`. Please see
     *                     {@see VersionsClient::versionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\LoadVersionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The [Version][google.cloud.dialogflow.cx.v3.Version] to be loaded
     *           to draft flow. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *     @type bool $allow_override_agent_resources
     *           This field is used to prevent accidental overwrite of other agent
     *           resources, which can potentially impact other flow's behavior. If
     *           `allow_override_agent_resources` is false, conflicted agent-level resources
     *           will not be overridden (i.e. intents, entities, webhooks).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [Version][google.cloud.dialogflow.cx.v3.Version] to be loaded
     * to draft flow. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The [Version][google.cloud.dialogflow.cx.v3.Version] to be loaded
     * to draft flow. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * This field is used to prevent accidental overwrite of other agent
     * resources, which can potentially impact other flow's behavior. If
     * `allow_override_agent_resources` is false, conflicted agent-level resources
     * will not be overridden (i.e. intents, entities, webhooks).
     *
     * Generated from protobuf field <code>bool allow_override_agent_resources = 2;</code>
     * @return bool
     */
    public function getAllowOverrideAgentResources()
    {
        return $this->allow_override_agent_resources;
    }

    /**
     * This field is used to prevent accidental overwrite of other agent
     * resources, which can potentially impact other flow's behavior. If
     * `allow_override_agent_resources` is false, conflicted agent-level resources
     * will not be overridden (i.e. intents, entities, webhooks).
     *
     * Generated from protobuf field <code>bool allow_override_agent_resources = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowOverrideAgentResources($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_override_agent_resources = $var;

        return $this;
    }

}

