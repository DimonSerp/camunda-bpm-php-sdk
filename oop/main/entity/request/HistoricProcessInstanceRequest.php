<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 13:39
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;

class HistoricProcessInstanceRequest extends Request
{
    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $processInstanceBusinessKey;

    /** @var string */
    protected $superProcessInstanceId;

    /** @var string */
    protected $processDefinitionId;

    /** @var string */
    protected $processDefinitionKey;

    /** @var string */
    protected $processDefinitionKeyNotIn;

    /** @var bool */
    protected $finished;

    /** @var bool */
    protected $unfinished;

    /** @var string */
    protected $startedBy;

    /** @var string */
    protected $startedBefore;

    /** @var string */
    protected $startedAfter;

    /** @var string */
    protected $finishedBefore;

    /** @var string */
    protected $finishedAfter;

    /** @var array */
    protected $variables;

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
    public function getProcessInstanceId(): string
    {
        return $this->processInstanceId;
    }

    /**
     * @param string $processInstanceId
     * @return HistoricProcessInstanceRequest
     */
    public function setProcessInstanceId(string $processInstanceId): HistoricProcessInstanceRequest
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
     * @return HistoricProcessInstanceRequest
     */
    public function setProcessInstanceBusinessKey(string $processInstanceBusinessKey): HistoricProcessInstanceRequest
    {
        $this->processInstanceBusinessKey = $processInstanceBusinessKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuperProcessInstanceId(): string
    {
        return $this->superProcessInstanceId;
    }

    /**
     * @param string $superProcessInstanceId
     * @return HistoricProcessInstanceRequest
     */
    public function setSuperProcessInstanceId(string $superProcessInstanceId): HistoricProcessInstanceRequest
    {
        $this->superProcessInstanceId = $superProcessInstanceId;
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
     * @return HistoricProcessInstanceRequest
     */
    public function setProcessDefinitionId(string $processDefinitionId): HistoricProcessInstanceRequest
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
     * @return HistoricProcessInstanceRequest
     */
    public function setProcessDefinitionKey(string $processDefinitionKey): HistoricProcessInstanceRequest
    {
        $this->processDefinitionKey = $processDefinitionKey;
        return $this;
    }

    /**
     * @return array
     */
    public function getProcessDefinitionKeyNotIn(): array
    {
        return explode(',', $this->processDefinitionKeyNotIn);
    }

    /**
     * @param array $processDefinitionIds
     * @return HistoricProcessInstanceRequest
     */
    public function setProcessDefinitionKeyNotIn(array $processDefinitionIds): HistoricProcessInstanceRequest
    {
        $this->processDefinitionKeyNotIn = implode(',', $processDefinitionIds);
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
     * @return HistoricProcessInstanceRequest
     */
    public function setFinished(bool $finished): HistoricProcessInstanceRequest
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
     * @return HistoricProcessInstanceRequest
     */
    public function setUnfinished(bool $unfinished): HistoricProcessInstanceRequest
    {
        $this->unfinished = $unfinished;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartedBy(): string
    {
        return $this->startedBy;
    }

    /**
     * @param string $startedBy
     * @return HistoricProcessInstanceRequest
     */
    public function setStartedBy(string $startedBy): HistoricProcessInstanceRequest
    {
        $this->startedBy = $startedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartedBefore(): string
    {
        return $this->startedBefore;
    }

    /**
     * @param string $startedBefore
     * @return HistoricProcessInstanceRequest
     */
    public function setStartedBefore(string $startedBefore): HistoricProcessInstanceRequest
    {
        $this->startedBefore = $startedBefore;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartedAfter(): string
    {
        return $this->startedAfter;
    }

    /**
     * @param string $startedAfter
     * @return HistoricProcessInstanceRequest
     */
    public function setStartedAfter(string $startedAfter): HistoricProcessInstanceRequest
    {
        $this->startedAfter = $startedAfter;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinishedBefore(): string
    {
        return $this->finishedBefore;
    }

    /**
     * @param string $finishedBefore
     * @return HistoricProcessInstanceRequest
     */
    public function setFinishedBefore(string $finishedBefore): HistoricProcessInstanceRequest
    {
        $this->finishedBefore = $finishedBefore;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinishedAfter(): string
    {
        return $this->finishedAfter;
    }

    /**
     * @param string $finishedAfter
     * @return HistoricProcessInstanceRequest
     */
    public function setFinishedAfter(string $finishedAfter): HistoricProcessInstanceRequest
    {
        $this->finishedAfter = $finishedAfter;
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
     * @return HistoricProcessInstanceRequest
     */
    public function setVariables(array $variables): HistoricProcessInstanceRequest
    {
        $this->variables = $variables;
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
     * @return HistoricProcessInstanceRequest
     */
    public function setSortBy(string $sortBy): HistoricProcessInstanceRequest
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
     * @return HistoricProcessInstanceRequest
     */
    public function setSortOrder(string $sortOrder): HistoricProcessInstanceRequest
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
     * @return HistoricProcessInstanceRequest
     */
    public function setFirstResult(int $firstResult): HistoricProcessInstanceRequest
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
     * @return HistoricProcessInstanceRequest
     */
    public function setMaxResults(int $maxResults): HistoricProcessInstanceRequest
    {
        $this->maxResults = $maxResults;
        return $this;
    }
}