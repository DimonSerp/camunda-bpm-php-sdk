<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 22.07.13
 * Time: 11:35
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\response;

use org\provectus\CamundaSDK\helper\CastHelper;

class VariableInstance extends CastHelper
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $type;

    /** @var string */
    protected $value;

    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $executionId;

    /** @var string */
    protected $taskId;

    /** @var string */
    protected $activityInstanceId;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return VariableInstance
     */
    public function setName(string $name): VariableInstance
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return VariableInstance
     */
    public function setType(string $type): VariableInstance
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return VariableInstance
     */
    public function setValue(string $value): VariableInstance
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessInstanceId(): string
    {
        return $this->processInstanceId;
    }

    /**
     * @param string $processInstanceId
     * @return VariableInstance
     */
    public function setProcessInstanceId(string $processInstanceId): VariableInstance
    {
        $this->processInstanceId = $processInstanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExecutionId(): string
    {
        return $this->executionId;
    }

    /**
     * @param string $executionId
     * @return VariableInstance
     */
    public function setExecutionId(string $executionId): VariableInstance
    {
        $this->executionId = $executionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskId(): string
    {
        return $this->taskId;
    }

    /**
     * @param string $taskId
     * @return VariableInstance
     */
    public function setTaskId(string $taskId): VariableInstance
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityInstanceId(): string
    {
        return $this->activityInstanceId;
    }

    /**
     * @param string $activityInstanceId
     * @return VariableInstance
     */
    public function setActivityInstanceId(string $activityInstanceId): VariableInstance
    {
        $this->activityInstanceId = $activityInstanceId;
        return $this;
    }
}