<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 07.06.13
 * Time: 21:07
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\response;

use org\provectus\CamundaSDK\helper\CastHelper;

class Task extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $key;

    /** @var string */
    protected $name;

    /** @var string */
    protected $assignee;

    /** @var string */
    protected $created;

    /** @var string */
    protected $due;

    /** @var string */
    protected $delegationState;

    /** @var string */
    protected $description;

    /** @var string */
    protected $executionId;

    /** @var string */
    protected $owner;

    /** @var string */
    protected $parentTaskId;

    /** @var int */
    protected $priority;

    /** @var string */
    protected $processDefinitionId;

    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $taskDefinitionId;

    /** @var string */
    protected $formKey;

    /** @var string */
    protected $tenantId;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Task
     */
    public function setId(string $id): Task
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return Task
     */
    public function setKey(string $key): Task
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Task
     */
    public function setName(string $name): Task
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssignee(): string
    {
        return $this->assignee;
    }

    /**
     * @param string $assignee
     * @return Task
     */
    public function setAssignee(string $assignee): Task
    {
        $this->assignee = $assignee;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param string $created
     * @return Task
     */
    public function setCreated(string $created): Task
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return string
     */
    public function getDue(): string
    {
        return $this->due;
    }

    /**
     * @param string $due
     * @return Task
     */
    public function setDue(string $due): Task
    {
        $this->due = $due;
        return $this;
    }

    /**
     * @return string
     */
    public function getDelegationState(): string
    {
        return $this->delegationState;
    }

    /**
     * @param string $delegationState
     * @return Task
     */
    public function setDelegationState(string $delegationState): Task
    {
        $this->delegationState = $delegationState;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Task
     */
    public function setDescription(string $description): Task
    {
        $this->description = $description;
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
     * @return Task
     */
    public function setExecutionId(string $executionId): Task
    {
        $this->executionId = $executionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     * @return Task
     */
    public function setOwner(string $owner): Task
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentTaskId(): string
    {
        return $this->parentTaskId;
    }

    /**
     * @param string $parentTaskId
     * @return Task
     */
    public function setParentTaskId(string $parentTaskId): Task
    {
        $this->parentTaskId = $parentTaskId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return Task
     */
    public function setPriority(int $priority): Task
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessDefinitionId(): string
    {
        return $this->processDefinitionId;
    }

    /**
     * @param string $processDefinitionId
     * @return Task
     */
    public function setProcessDefinitionId(string $processDefinitionId): Task
    {
        $this->processDefinitionId = $processDefinitionId;
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
     * @return Task
     */
    public function setProcessInstanceId(string $processInstanceId): Task
    {
        $this->processInstanceId = $processInstanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskDefinitionId(): string
    {
        return $this->taskDefinitionId;
    }

    /**
     * @param string $taskDefinitionId
     * @return Task
     */
    public function setTaskDefinitionId(string $taskDefinitionId): Task
    {
        $this->taskDefinitionId = $taskDefinitionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormKey(): string
    {
        return $this->formKey;
    }

    /**
     * @param string $formKey
     * @return Task
     */
    public function setFormKey(string $formKey): Task
    {
        $this->formKey = $formKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }

    /**
     * @param string $tenantId
     * @return Task
     */
    public function setTenantId(string $tenantId): Task
    {
        $this->tenantId = $tenantId;
        return $this;
    }
}