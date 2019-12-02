<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 13:38
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\request;


class HistoricDetailRequest extends Request
{
    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $executionId;

    /** @var string */
    protected $activityInstanceId;

    /** @var string */
    protected $caseInstanceId;

    /** @var string */
    protected $caseExecutionId;

    /** @var string */
    protected $variableInstanceId;

    /** @var bool */
    protected $formFields;

    /** @var bool */
    protected $variableUpdates;

    /** @var bool */
    protected $excludeTaskDetails;

    /** @var string */
    protected $sortBy;

    /** @var string */
    protected $sortOrder;

    /** @var int */
    protected $firstResult;

    /** @var int */
    protected $maxResults;

    /** @var bool */
    protected $deserializedValues;

    /**
     * @return string
     */
    public function getActivityInstanceId(): string
    {
        return $this->activityInstanceId;
    }

    /**
     * @param string $activityInstanceId
     * @return HistoricDetailRequest
     */
    public function setActivityInstanceId(string $activityInstanceId): HistoricDetailRequest
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
     * @return HistoricDetailRequest
     */
    public function setProcessInstanceId(string $processInstanceId): HistoricDetailRequest
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
     * @return HistoricDetailRequest
     */
    public function setExecutionId(string $executionId): HistoricDetailRequest
    {
        $this->executionId = $executionId;
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
     * @return HistoricDetailRequest
     */
    public function setSortBy(string $sortBy): HistoricDetailRequest
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
     * @return HistoricDetailRequest
     */
    public function setSortOrder(string $sortOrder): HistoricDetailRequest
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
     * @return HistoricDetailRequest
     */
    public function setFirstResult(int $firstResult): HistoricDetailRequest
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
     * @return HistoricDetailRequest
     */
    public function setMaxResults(int $maxResults): HistoricDetailRequest
    {
        $this->maxResults = $maxResults;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaseInstanceId(): string
    {
        return $this->caseInstanceId;
    }

    /**
     * @param string $caseInstanceId
     * @return HistoricDetailRequest
     */
    public function setCaseInstanceId(string $caseInstanceId): HistoricDetailRequest
    {
        $this->caseInstanceId = $caseInstanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaseExecutionId(): string
    {
        return $this->caseExecutionId;
    }

    /**
     * @param string $caseExecutionId
     * @return HistoricDetailRequest
     */
    public function setCaseExecutionId(string $caseExecutionId): HistoricDetailRequest
    {
        $this->caseExecutionId = $caseExecutionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariableInstanceId(): string
    {
        return $this->variableInstanceId;
    }

    /**
     * @param string $variableInstanceId
     * @return HistoricDetailRequest
     */
    public function setVariableInstanceId(string $variableInstanceId): HistoricDetailRequest
    {
        $this->variableInstanceId = $variableInstanceId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFormFields(): bool
    {
        return $this->formFields;
    }

    /**
     * @param bool $formFields
     *
     * @return HistoricDetailRequest
     */
    public function setFormFields(bool $formFields): HistoricDetailRequest
    {
        $this->formFields = $formFields;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVariableUpdates(): bool
    {
        return $this->variableUpdates;
    }

    /**
     * @param bool $variableUpdates
     *
     * @return HistoricDetailRequest
     */
    public function setVariableUpdates(bool $variableUpdates): HistoricDetailRequest
    {
        $this->variableUpdates = $variableUpdates;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExcludeTaskDetails(): bool
    {
        return $this->excludeTaskDetails;
    }

    /**
     * @param bool $excludeTaskDetails
     *
     * @return HistoricDetailRequest
     */
    public function setExcludeTaskDetails(bool $excludeTaskDetails): HistoricDetailRequest
    {
        $this->excludeTaskDetails = $excludeTaskDetails;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDeserializedValues(): bool
    {
        return $this->deserializedValues;
    }

    /**
     * @param bool $deserializedValues
     *
     * @return HistoricDetailRequest
     */
    public function setDeserializedValues(bool $deserializedValues): HistoricDetailRequest
    {
        $this->deserializedValues = $deserializedValues;
        return $this;
    }
}