<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 09.06.13
 * Time: 10:37
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;

class ExecutionRequest extends Request
{
    /** @var string */
    protected $businessKey;

    /** @var string */
    protected $processDefinitionId;

    /** @var string */
    protected $processDefinitionKey;

    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $activityId;

    /** @var string */
    protected $signalEventSubscriptionName;

    /** @var string */
    protected $messageEventSubscriptionName;

    /** @var bool */
    protected $active;

    /** @var bool */
    protected $suspended;

    /** @var array */
    protected $variables;

    /** @var array */
    protected $processVariables;

    /** @var string */
    protected $sortBy;

    /** @var string */
    protected $sortOrder;

    /** @var int */
    protected $firstResult;

    /** @var int */
    protected $maxResults;

    /**
     * @return string
     */
    public function getBusinessKey(): string
    {
        return $this->businessKey;
    }

    /**
     * @param string $businessKey
     * @return ExecutionRequest
     */
    public function setBusinessKey(string $businessKey): ExecutionRequest
    {
        $this->businessKey = $businessKey;
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
     * @return ExecutionRequest
     */
    public function setProcessDefinitionId(string $processDefinitionId): ExecutionRequest
    {
        $this->processDefinitionId = $processDefinitionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessDefinitionKey(): string
    {
        return $this->processDefinitionKey;
    }

    /**
     * @param string $processDefinitionKey
     * @return ExecutionRequest
     */
    public function setProcessDefinitionKey(string $processDefinitionKey): ExecutionRequest
    {
        $this->processDefinitionKey = $processDefinitionKey;
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
     * @return ExecutionRequest
     */
    public function setProcessInstanceId(string $processInstanceId): ExecutionRequest
    {
        $this->processInstanceId = $processInstanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityId(): string
    {
        return $this->activityId;
    }

    /**
     * @param string $activityId
     * @return ExecutionRequest
     */
    public function setActivityId(string $activityId): ExecutionRequest
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignalEventSubscriptionName(): string
    {
        return $this->signalEventSubscriptionName;
    }

    /**
     * @param string $signalEventSubscriptionName
     * @return ExecutionRequest
     */
    public function setSignalEventSubscriptionName(string $signalEventSubscriptionName): ExecutionRequest
    {
        $this->signalEventSubscriptionName = $signalEventSubscriptionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessageEventSubscriptionName(): string
    {
        return $this->messageEventSubscriptionName;
    }

    /**
     * @param string $messageEventSubscriptionName
     * @return ExecutionRequest
     */
    public function setMessageEventSubscriptionName(string $messageEventSubscriptionName): ExecutionRequest
    {
        $this->messageEventSubscriptionName = $messageEventSubscriptionName;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return ExecutionRequest
     */
    public function setActive(bool $active): ExecutionRequest
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuspended(): bool
    {
        return $this->suspended;
    }

    /**
     * @param bool $suspended
     * @return ExecutionRequest
     */
    public function setSuspended(bool $suspended): ExecutionRequest
    {
        $this->suspended = $suspended;
        return $this;
    }

    /**
     * @return array
     */
    public function getVariables(): array
    {
        return $this->variables;
    }

    /**
     * @param array $variables
     * @return ExecutionRequest
     */
    public function setVariables(array $variables): ExecutionRequest
    {
        $this->variables = $variables;
        return $this;
    }

    /**
     * @return array
     */
    public function getProcessVariables(): array
    {
        return $this->processVariables;
    }

    /**
     * @param array $processVariables
     * @return ExecutionRequest
     */
    public function setProcessVariables(array $processVariables): ExecutionRequest
    {
        $this->processVariables = $processVariables;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortBy(): string
    {
        return $this->sortBy;
    }

    /**
     * @param string $sortBy
     * @return ExecutionRequest
     */
    public function setSortBy(string $sortBy): ExecutionRequest
    {
        $this->sortBy = $sortBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder(): string
    {
        return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     * @return ExecutionRequest
     */
    public function setSortOrder(string $sortOrder): ExecutionRequest
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirstResult(): int
    {
        return $this->firstResult;
    }

    /**
     * @param int $firstResult
     * @return ExecutionRequest
     */
    public function setFirstResult(int $firstResult): ExecutionRequest
    {
        $this->firstResult = $firstResult;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxResults(): int
    {
        return $this->maxResults;
    }

    /**
     * @param int $maxResults
     * @return ExecutionRequest
     */
    public function setMaxResults(int $maxResults): ExecutionRequest
    {
        $this->maxResults = $maxResults;
        return $this;
    }
}