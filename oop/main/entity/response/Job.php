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

class Job extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $dueDate;

    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $executionId;

    /** @var int */
    protected $retries;

    /** @var string */
    protected $exceptionMessage;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Job
     */
    public function setId(string $id): Job
    {
        $this->id = $id;
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
     * @return Job
     */
    public function setDueDate(string $dueDate): Job
    {
        $this->dueDate = $dueDate;
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
     * @return Job
     */
    public function setProcessInstanceId(string $processInstanceId): Job
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
     * @return Job
     */
    public function setExecutionId(string $executionId): Job
    {
        $this->executionId = $executionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRetries(): int
    {
        return $this->retries;
    }

    /**
     * @param int $retries
     * @return Job
     */
    public function setRetries(int $retries): Job
    {
        $this->retries = $retries;
        return $this;
    }

    /**
     * @return string
     */
    public function getExceptionMessage(): string
    {
        return $this->exceptionMessage;
    }

    /**
     * @param string $exceptionMessage
     * @return Job
     */
    public function setExceptionMessage(string $exceptionMessage): Job
    {
        $this->exceptionMessage = $exceptionMessage;
        return $this;
    }
}