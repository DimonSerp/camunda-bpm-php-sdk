<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 13:30
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\response;

use org\provectus\CamundaSDK\helper\CastHelper;

class HistoricDetail extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $type;

    /** @var string */
    protected $processDefinitionKey;

    /** @var string */
    protected $processDefinitionId;

    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $executionId;

    /** @var string */
    protected $caseDefinitionKey;

    /** @var string */
    protected $caseDefinitionId;

    /** @var string */
    protected $caseInstanceId;

    /** @var string */
    protected $caseExecutionId;

    /** @var string */
    protected $taskId;

    /** @var string */
    protected $time;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return HistoricDetail
     */
    public function setId(string $id): HistoricDetail
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return HistoricDetail
     */
    public function setType(string $type): HistoricDetail
    {
        $this->type = $type;
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
     * @return HistoricDetail
     */
    public function setProcessDefinitionKey(string $processDefinitionKey): HistoricDetail
    {
        $this->processDefinitionKey = $processDefinitionKey;
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
     * @return HistoricDetail
     */
    public function setProcessDefinitionId(string $processDefinitionId): HistoricDetail
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
     * @return HistoricDetail
     */
    public function setProcessInstanceId(string $processInstanceId): HistoricDetail
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
     * @return HistoricDetail
     */
    public function setExecutionId(string $executionId): HistoricDetail
    {
        $this->executionId = $executionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaseDefinitionKey(): string
    {
        return $this->caseDefinitionKey;
    }

    /**
     * @param string $caseDefinitionKey
     * @return HistoricDetail
     */
    public function setCaseDefinitionKey(string $caseDefinitionKey): HistoricDetail
    {
        $this->caseDefinitionKey = $caseDefinitionKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaseDefinitionId(): string
    {
        return $this->caseDefinitionId;
    }

    /**
     * @param string $caseDefinitionId
     * @return HistoricDetail
     */
    public function setCaseDefinitionId(string $caseDefinitionId): HistoricDetail
    {
        $this->caseDefinitionId = $caseDefinitionId;
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
     * @return HistoricDetail
     */
    public function setCaseInstanceId(string $caseInstanceId): HistoricDetail
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
     * @return HistoricDetail
     */
    public function setCaseExecutionId(string $caseExecutionId): HistoricDetail
    {
        $this->caseExecutionId = $caseExecutionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskId(): string
    {
        return $this->taskId;
    }

    /**
     * @param string $taskId
     * @return HistoricDetail
     */
    public function setTaskId(string $taskId): HistoricDetail
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @param string $time
     * @return HistoricDetail
     */
    public function setTime(string $time): HistoricDetail
    {
        $this->time = $time;
        return $this;
    }
}