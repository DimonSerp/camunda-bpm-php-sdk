<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 13:38
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;


class HistoricActivityInstanceRequest extends Request
{
    /** @var string */
    protected $activityInstanceId;

    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $processDefinitionId;

    /** @var string */
    protected $executionId;

    /** @var string */
    protected $activityId;

    /** @var string */
    protected $activityName;

    /** @var string */
    protected $activityType;

    /** @var string */
    protected $taskAssignee;

    /** @var bool */
    protected $finished;

    /** @var bool */
    protected $unfinished;

    /** @var bool */
    protected $canceled;

    /** @var string */
    protected $tenantIdIn;

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
    public function getActivityInstanceId(): string
    {
        return $this->activityInstanceId;
    }

    /**
     * @param string $activityInstanceId
     * @return HistoricActivityInstanceRequest
     */
    public function setActivityInstanceId(string $activityInstanceId): HistoricActivityInstanceRequest
    {
        $this->activityInstanceId = $activityInstanceId;
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
     * @return HistoricActivityInstanceRequest
     */
    public function setProcessInstanceId(string $processInstanceId): HistoricActivityInstanceRequest
    {
        $this->processInstanceId = $processInstanceId;
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
     * @return HistoricActivityInstanceRequest
     */
    public function setProcessDefinitionId(string $processDefinitionId): HistoricActivityInstanceRequest
    {
        $this->processDefinitionId = $processDefinitionId;
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
     * @return HistoricActivityInstanceRequest
     */
    public function setExecutionId(string $executionId): HistoricActivityInstanceRequest
    {
        $this->executionId = $executionId;
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
     * @return HistoricActivityInstanceRequest
     */
    public function setActivityId(string $activityId): HistoricActivityInstanceRequest
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityName(): string
    {
        return $this->activityName;
    }

    /**
     * @param string $activityName
     * @return HistoricActivityInstanceRequest
     */
    public function setActivityName(string $activityName): HistoricActivityInstanceRequest
    {
        $this->activityName = $activityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityType(): string
    {
        return $this->activityType;
    }

    /**
     * @param string $activityType
     * @return HistoricActivityInstanceRequest
     */
    public function setActivityType(string $activityType): HistoricActivityInstanceRequest
    {
        $this->activityType = $activityType;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskAssignee(): string
    {
        return $this->taskAssignee;
    }

    /**
     * @param string $taskAssignee
     * @return HistoricActivityInstanceRequest
     */
    public function setTaskAssignee(string $taskAssignee): HistoricActivityInstanceRequest
    {
        $this->taskAssignee = $taskAssignee;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFinished(): bool
    {
        return $this->finished;
    }

    /**
     * @param bool $finished
     * @return HistoricActivityInstanceRequest
     */
    public function setFinished(bool $finished): HistoricActivityInstanceRequest
    {
        $this->finished = $finished;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUnfinished(): bool
    {
        return $this->unfinished;
    }

    /**
     * @param bool $unfinished
     * @return HistoricActivityInstanceRequest
     */
    public function setUnfinished(bool $unfinished): HistoricActivityInstanceRequest
    {
        $this->unfinished = $unfinished;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCanceled(): bool
    {
        return $this->canceled;
    }

    /**
     * @param bool $canceled
     * @return HistoricActivityInstanceRequest
     */
    public function setCanceled(bool $canceled): HistoricActivityInstanceRequest
    {
        $this->canceled = $canceled;
        return $this;
    }

    /**
     * @return array
     */
    public function getTenantIdIn(): array
    {
        return explode(',', $this->tenantIdIn);
    }

    /**
     * @param array $tenants
     * @return HistoricActivityInstanceRequest
     */
    public function setTenantIdIn(array $tenants): HistoricActivityInstanceRequest
    {
        $this->tenantIdIn = join(',', $tenants);
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
     * @return HistoricActivityInstanceRequest
     */
    public function setSortBy(string $sortBy): HistoricActivityInstanceRequest
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
     * @return HistoricActivityInstanceRequest
     */
    public function setSortOrder(string $sortOrder): HistoricActivityInstanceRequest
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
     * @return HistoricActivityInstanceRequest
     */
    public function setFirstResult(int $firstResult): HistoricActivityInstanceRequest
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
     * @return HistoricActivityInstanceRequest
     */
    public function setMaxResults(int $maxResults): HistoricActivityInstanceRequest
    {
        $this->maxResults = $maxResults;
        return $this;
    }
}