<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 22.07.13
 * Time: 11:34
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\request;


class JobRequest extends Request
{
    /** @var string */
    protected $jobId;

    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $executionId;

    /** @var string */
    protected $processDefinitionId;

    /** @var string */
    protected $processDefinitionKey;

    /** @var bool */
    protected $withRetriesLeft;

    /** @var bool */
    protected $executable;

    /** @var bool */
    protected $timers;

    /** @var bool */
    protected $messages;

    /** @var string */
    protected $dueDates;

    /** @var bool */
    protected $withException;

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
    public function getJobId(): string
    {
        return $this->jobId;
    }

    /**
     * @param string $jobId
     * @return JobRequest
     */
    public function setJobId(string $jobId): JobRequest
    {
        $this->jobId = $jobId;
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
     * @return JobRequest
     */
    public function setProcessInstanceId(string $processInstanceId): JobRequest
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
     * @return JobRequest
     */
    public function setExecutionId(string $executionId): JobRequest
    {
        $this->executionId = $executionId;
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
     * @return JobRequest
     */
    public function setProcessDefinitionId(string $processDefinitionId): JobRequest
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
     * @return JobRequest
     */
    public function setProcessDefinitionKey(string $processDefinitionKey): JobRequest
    {
        $this->processDefinitionKey = $processDefinitionKey;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWithRetriesLeft(): bool
    {
        return $this->withRetriesLeft;
    }

    /**
     * @param bool $withRetriesLeft
     * @return JobRequest
     */
    public function setWithRetriesLeft(bool $withRetriesLeft): JobRequest
    {
        $this->withRetriesLeft = $withRetriesLeft;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExecutable(): bool
    {
        return $this->executable;
    }

    /**
     * @param bool $executable
     * @return JobRequest
     */
    public function setExecutable(bool $executable): JobRequest
    {
        $this->executable = $executable;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTimers(): bool
    {
        return $this->timers;
    }

    /**
     * @param bool $timers
     * @return JobRequest
     */
    public function setTimers(bool $timers): JobRequest
    {
        $this->timers = $timers;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMessages(): bool
    {
        return $this->messages;
    }

    /**
     * @param bool $messages
     * @return JobRequest
     */
    public function setMessages(bool $messages): JobRequest
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * @return string
     */
    public function getDueDates(): string
    {
        return $this->dueDates;
    }

    /**
     * @param string $dueDates
     * @return JobRequest
     */
    public function setDueDates(string $dueDates): JobRequest
    {
        $this->dueDates = $dueDates;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWithException(): bool
    {
        return $this->withException;
    }

    /**
     * @param bool $withException
     * @return JobRequest
     */
    public function setWithException(bool $withException): JobRequest
    {
        $this->withException = $withException;
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
     * @return JobRequest
     */
    public function setSortBy(string $sortBy): JobRequest
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
     * @return JobRequest
     */
    public function setSortOrder(string $sortOrder): JobRequest
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
     * @return JobRequest
     */
    public function setFirstResult(int $firstResult): JobRequest
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
     * @return JobRequest
     */
    public function setMaxResults(int $maxResults): JobRequest
    {
        $this->maxResults = $maxResults;
        return $this;
    }
}