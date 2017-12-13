<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 22.07.13
 * Time: 11:35
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;


class VariableInstanceRequest extends Request
{
    /** @var string */
    protected $variableName;

    /** @var string */
    protected $variableNameLike;

    /** @var string */
    protected $processInstanceIdIn;

    /** @var string */
    protected $executionIdIn;

    /** @var string */
    protected $taskIdIn;

    /** @var string */
    protected $activityInstanceIdIn;

    /** @var string */
    protected $variableValues;

    /** @var string */
    protected $sortBy;

    /** @var string */
    protected $sortOrder;

    /** @var int */
    protected $firstResult;

    /** @var int */
    protected $maxResults;

    /** @var string */
    protected $tenantIdIn;

    /**
     * @return string
     */
    public function getVariableName(): string
    {
        return $this->variableName;
    }

    /**
     * @param string $variableName
     * @return VariableInstanceRequest
     */
    public function setVariableName(string $variableName): VariableInstanceRequest
    {
        $this->variableName = $variableName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariableNameLike(): string
    {
        return $this->variableNameLike;
    }

    /**
     * @param string $variableNameLike
     * @return VariableInstanceRequest
     */
    public function setVariableNameLike(string $variableNameLike): VariableInstanceRequest
    {
        $this->variableNameLike = $variableNameLike;
        return $this;
    }

    /**
     * @return array
     */
    public function getProcessInstanceIdIn(): array
    {
        return explode(',', $this->processInstanceIdIn);
    }

    /**
     * @param array $processInstanceIds
     * @return VariableInstanceRequest
     */
    public function setProcessInstanceIdIn(array $processInstanceIds): VariableInstanceRequest
    {
        $this->processInstanceIdIn = implode(',', $processInstanceIds);
        return $this;
    }

    /**
     * @return array
     */
    public function getExecutionIdIn(): array
    {
        return explode(',', $this->executionIdIn);
    }

    /**
     * @param array $executionIds
     * @return VariableInstanceRequest
     */
    public function setExecutionIdIn(array $executionIds): VariableInstanceRequest
    {
        $this->executionIdIn = implode(',', $executionIds);
        return $this;
    }

    /**
     * @return array
     */
    public function getTaskIdIn(): array
    {
        return explode(',', $this->taskIdIn);
    }

    /**
     * @param array $taskIds
     * @return VariableInstanceRequest
     */
    public function setTaskIdIn(array $taskIds): VariableInstanceRequest
    {
        $this->taskIdIn = implode(',', $taskIds);
        return $this;
    }

    /**
     * @return array
     */
    public function getActivityInstanceIdIn(): array
    {
        return explode(',', $this->activityInstanceIdIn);
    }

    /**
     * @param array $activityInstanceIds
     * @return VariableInstanceRequest
     */
    public function setActivityInstanceIdIn(array $activityInstanceIds): VariableInstanceRequest
    {
        $this->activityInstanceIdIn = implode(',', $activityInstanceIds);
        return $this;
    }

    /**
     * @return array
     */
    public function getVariableValues(): array
    {
        return explode(',', $this->variableValues);
    }

    /**
     * @param array $variableValues
     * @return VariableInstanceRequest
     */
    public function setVariableValues(array $variableValues): VariableInstanceRequest
    {
        $this->variableValues = implode(',', $variableValues);
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
     * @return VariableInstanceRequest
     */
    public function setSortBy(string $sortBy): VariableInstanceRequest
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
     * @return VariableInstanceRequest
     */
    public function setSortOrder(string $sortOrder): VariableInstanceRequest
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
     * @return VariableInstanceRequest
     */
    public function setFirstResult(int $firstResult): VariableInstanceRequest
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
     * @return VariableInstanceRequest
     */
    public function setMaxResults(int $maxResults): VariableInstanceRequest
    {
        $this->maxResults = $maxResults;
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
     * @return VariableInstanceRequest
     */
    public function setTenantIdIn(array $tenantIds): VariableInstanceRequest
    {
        $this->tenantIdIn = implode(',', $tenantIds);
        return $this;
    }
}