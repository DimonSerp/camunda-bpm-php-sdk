<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 07.06.13
 * Time: 21:07
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\request;

class TaskRequest extends Request
{
    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $processInstanceBusinessKey;

    /** @var string */
    protected $processDefinitionId;

    /** @var string */
    protected $processDefinitionKey;

    /** @var string */
    protected $processDefinitionKeyIn;

    /** @var string */
    protected $processDefinitionName;

    /** @var string */
    protected $executionId;

    /** @var string */
    protected $assignee;

    /** @var string */
    protected $owner;

    /** @var string */
    protected $candidateGroup;

    /** @var string */
    protected $candidateUser;

    /** @var string */
    protected $involvedUser;

    /** @var bool */
    protected $assigned;

    /** @var bool */
    protected $unassigned;

    /** @var string */
    protected $taskDefinitionKey;

    /** @var string */
    protected $taskDefinitionKeyLike;

    /** @var string */
    protected $name;

    /** @var string */
    protected $nameLike;

    /** @var string */
    protected $description;

    /** @var string */
    protected $descriptionLike;

    /** @var int */
    protected $priority;

    /** @var int */
    protected $maxPriority;

    /** @var int */
    protected $minPriority;

    /** @var string */
    protected $dueDate;

    /** @var string */
    protected $dueAfter;

    /** @var string */
    protected $dueBefore;

    /** @var string */
    protected $createdOn;

    /** @var string */
    protected $createdAfter;

    /** @var string */
    protected $createdBefore;

    /** @var string */
    protected $delegationState;

    /** @var string */
    protected $candidateGroups;

    /** @var array */
    protected $taskVariables;

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

    /** @var bool */
    protected $active;

    /** @var string */
    protected $tenantIdIn;

    /**
     * @return string
     */
    public function getProcessInstanceId(): string
    {
        return $this->processInstanceId;
    }

    /**
     * @param string $processInstanceId
     * @return TaskRequest
     */
    public function setProcessInstanceId(string $processInstanceId): TaskRequest
    {
        $this->processInstanceId = $processInstanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessInstanceBusinessKey(): string
    {
        return $this->processInstanceBusinessKey;
    }

    /**
     * @param string $processInstanceBusinessKey
     * @return TaskRequest
     */
    public function setProcessInstanceBusinessKey(string $processInstanceBusinessKey): TaskRequest
    {
        $this->processInstanceBusinessKey = $processInstanceBusinessKey;
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
     * @return TaskRequest
     */
    public function setProcessDefinitionId(string $processDefinitionId): TaskRequest
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
     * @return TaskRequest
     */
    public function setProcessDefinitionKey(string $processDefinitionKey): TaskRequest
    {
        $this->processDefinitionKey = $processDefinitionKey;
        return $this;
    }

    /**
     * @return array
     */
    public function getProcessDefinitionKeyIn(): array
    {
        return explode(',', $this->processDefinitionKeyIn);
    }

    /**
     * @param array $processDefinitionKeys
     * @return TaskRequest
     */
    public function setProcessDefinitionKeyIn(array $processDefinitionKeys): TaskRequest
    {
        $this->processDefinitionKeyIn = implode(',', $processDefinitionKeys);
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessDefinitionName(): string
    {
        return $this->processDefinitionName;
    }

    /**
     * @param string $processDefinitionName
     * @return TaskRequest
     */
    public function setProcessDefinitionName(string $processDefinitionName): TaskRequest
    {
        $this->processDefinitionName = $processDefinitionName;
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
     * @return TaskRequest
     */
    public function setExecutionId(string $executionId): TaskRequest
    {
        $this->executionId = $executionId;
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
     * @return TaskRequest
     */
    public function setAssignee(string $assignee): TaskRequest
    {
        $this->assignee = $assignee;
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
     * @return TaskRequest
     */
    public function setOwner(string $owner): TaskRequest
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return string
     */
    public function getCandidateGroup(): string
    {
        return $this->candidateGroup;
    }

    /**
     * @param string $candidateGroup
     * @return TaskRequest
     */
    public function setCandidateGroup(string $candidateGroup): TaskRequest
    {
        $this->candidateGroup = $candidateGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getCandidateUser(): string
    {
        return $this->candidateUser;
    }

    /**
     * @param string $candidateUser
     * @return TaskRequest
     */
    public function setCandidateUser(string $candidateUser): TaskRequest
    {
        $this->candidateUser = $candidateUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvolvedUser(): string
    {
        return $this->involvedUser;
    }

    /**
     * @param string $involvedUser
     * @return TaskRequest
     */
    public function setInvolvedUser(string $involvedUser): TaskRequest
    {
        $this->involvedUser = $involvedUser;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAssigned(): bool
    {
        return $this->assigned;
    }

    /**
     * @param bool $assigned
     * @return TaskRequest
     */
    public function setAssigned(bool $assigned): TaskRequest
    {
        $this->assigned = $assigned;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUnassigned(): bool
    {
        return $this->unassigned;
    }

    /**
     * @param bool $unassigned
     * @return TaskRequest
     */
    public function setUnassigned(bool $unassigned): TaskRequest
    {
        $this->unassigned = $unassigned;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskDefinitionKey(): string
    {
        return $this->taskDefinitionKey;
    }

    /**
     * @param string $taskDefinitionKey
     * @return TaskRequest
     */
    public function setTaskDefinitionKey(string $taskDefinitionKey): TaskRequest
    {
        $this->taskDefinitionKey = $taskDefinitionKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskDefinitionKeyLike(): string
    {
        return $this->taskDefinitionKeyLike;
    }

    /**
     * @param string $taskDefinitionKeyLike
     * @return TaskRequest
     */
    public function setTaskDefinitionKeyLike(string $taskDefinitionKeyLike): TaskRequest
    {
        $this->taskDefinitionKeyLike = $taskDefinitionKeyLike;
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
     * @return TaskRequest
     */
    public function setName(string $name): TaskRequest
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameLike(): string
    {
        return $this->nameLike;
    }

    /**
     * @param string $nameLike
     * @return TaskRequest
     */
    public function setNameLike(string $nameLike): TaskRequest
    {
        $this->nameLike = $nameLike;
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
     * @return TaskRequest
     */
    public function setDescription(string $description): TaskRequest
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionLike(): string
    {
        return $this->descriptionLike;
    }

    /**
     * @param string $descriptionLike
     * @return TaskRequest
     */
    public function setDescriptionLike(string $descriptionLike): TaskRequest
    {
        $this->descriptionLike = $descriptionLike;
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
     * @return TaskRequest
     */
    public function setPriority(int $priority): TaskRequest
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxPriority(): int
    {
        return $this->maxPriority;
    }

    /**
     * @param int $maxPriority
     * @return TaskRequest
     */
    public function setMaxPriority(int $maxPriority): TaskRequest
    {
        $this->maxPriority = $maxPriority;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinPriority(): int
    {
        return $this->minPriority;
    }

    /**
     * @param int $minPriority
     * @return TaskRequest
     */
    public function setMinPriority(int $minPriority): TaskRequest
    {
        $this->minPriority = $minPriority;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     * @return TaskRequest
     */
    public function setDueDate(string $dueDate): TaskRequest
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueAfter(): string
    {
        return $this->dueAfter;
    }

    /**
     * @param string $dueAfter
     * @return TaskRequest
     */
    public function setDueAfter(string $dueAfter): TaskRequest
    {
        $this->dueAfter = $dueAfter;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueBefore(): string
    {
        return $this->dueBefore;
    }

    /**
     * @param string $dueBefore
     * @return TaskRequest
     */
    public function setDueBefore(string $dueBefore): TaskRequest
    {
        $this->dueBefore = $dueBefore;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedOn(): string
    {
        return $this->createdOn;
    }

    /**
     * @param string $createdOn
     * @return TaskRequest
     */
    public function setCreatedOn(string $createdOn): TaskRequest
    {
        $this->createdOn = $createdOn;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAfter(): string
    {
        return $this->createdAfter;
    }

    /**
     * @param string $createdAfter
     * @return TaskRequest
     */
    public function setCreatedAfter(string $createdAfter): TaskRequest
    {
        $this->createdAfter = $createdAfter;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBefore(): string
    {
        return $this->createdBefore;
    }

    /**
     * @param string $createdBefore
     * @return TaskRequest
     */
    public function setCreatedBefore(string $createdBefore): TaskRequest
    {
        $this->createdBefore = $createdBefore;
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
     * @return TaskRequest
     */
    public function setDelegationState(string $delegationState): TaskRequest
    {
        $this->delegationState = $delegationState;
        return $this;
    }

    /**
     * @return array
     */
    public function getCandidateGroups(): array
    {
        return explode(',', $this->candidateGroups);
    }

    /**
     * @param array $candidateGroups
     * @return TaskRequest
     */
    public function setCandidateGroups(array $candidateGroups): TaskRequest
    {
        $this->candidateGroups = implode(',', $candidateGroups);
        return $this;
    }

    /**
     * @return array
     */
    public function getTaskVariables(): array
    {
        return $this->taskVariables;
    }

    /**
     * @param array $taskVariables
     * @return TaskRequest
     */
    public function setTaskVariables(array $taskVariables): TaskRequest
    {
        $this->taskVariables = $taskVariables;
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
     * @return TaskRequest
     */
    public function setProcessVariables(array $processVariables): TaskRequest
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
     * @return TaskRequest
     */
    public function setSortBy(string $sortBy): TaskRequest
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
     * @return TaskRequest
     */
    public function setSortOrder(string $sortOrder): TaskRequest
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
     * @return TaskRequest
     */
    public function setFirstResult(int $firstResult): TaskRequest
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
     * @return TaskRequest
     */
    public function setMaxResults(int $maxResults): TaskRequest
    {
        $this->maxResults = $maxResults;
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
     * @return TaskRequest
     */
    public function setActive(bool $active): TaskRequest
    {
        $this->active = $active;
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
     * @param array $tenantIds
     * @return TaskRequest
     */
    public function setTenantIdIn(array $tenantIds): TaskRequest
    {
        $this->tenantIdIn = implode(',', $tenantIds);
        return $this;
    }
}