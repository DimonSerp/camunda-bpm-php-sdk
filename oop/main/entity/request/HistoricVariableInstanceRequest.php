<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 13:39
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;


class HistoricVariableInstanceRequest extends Request
{
    /** @var string */
    protected $variableName;

    /** @var string */
    protected $variableNameLike;

    /** @var string */
    protected $variableValue;

    /** @var string */
    protected $processInstanceId;

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
    public function getVariableName(): string
    {
        return $this->variableName;
    }

    /**
     * @param string $variableName
     * @return HistoricVariableInstanceRequest
     */
    public function setVariableName(string $variableName): HistoricVariableInstanceRequest
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
     * @return HistoricVariableInstanceRequest
     */
    public function setVariableNameLike(string $variableNameLike): HistoricVariableInstanceRequest
    {
        $this->variableNameLike = $variableNameLike;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariableValue(): string
    {
        return $this->variableValue;
    }

    /**
     * @param string $variableValue
     * @return HistoricVariableInstanceRequest
     */
    public function setVariableValue(string $variableValue): HistoricVariableInstanceRequest
    {
        $this->variableValue = $variableValue;
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
     * @return HistoricVariableInstanceRequest
     */
    public function setProcessInstanceId(string $processInstanceId): HistoricVariableInstanceRequest
    {
        $this->processInstanceId = $processInstanceId;
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
     * @return HistoricVariableInstanceRequest
     */
    public function setSortBy(string $sortBy): HistoricVariableInstanceRequest
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
     * @return HistoricVariableInstanceRequest
     */
    public function setSortOrder(string $sortOrder): HistoricVariableInstanceRequest
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
     * @return HistoricVariableInstanceRequest
     */
    public function setFirstResult(int $firstResult): HistoricVariableInstanceRequest
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
     * @return HistoricVariableInstanceRequest
     */
    public function setMaxResults(int $maxResults): HistoricVariableInstanceRequest
    {
        $this->maxResults = $maxResults;
        return $this;
    }
}