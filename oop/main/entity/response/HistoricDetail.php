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
    protected $activityInstanceId;

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

    // this is for variable updates
    // TODO: move this into a separate class

    /** @var string */
    protected $variableName;

    /** @var string */
    protected $variableInstanceId;

    /** @var string */
    protected $variableType;

    /** @var mixed */
    protected $value;

    /** @var array */
    protected $valueInfo;

    /** @var integer */
    protected $revision;

    /** @var string */
    protected $errorMessage;

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

    /**
     * @return string
     */
    public function getVariableName(): string
    {
        return $this->variableName;
    }

    /**
     * @param string $variableName
     * @return HistoricDetail
     */
    public function setVariableName(string $variableName): HistoricDetail
    {
        $this->variableName = $variableName;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityInstanceId(): string
    {
        return $this->activityInstanceId;
    }

    /**
     * @param string $activityInstanceId
     * @return HistoricDetail
     */
    public function setActivityInstanceId(string $activityInstanceId): HistoricDetail
    {
        $this->activityInstanceId = $activityInstanceId;
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
     * @return HistoricDetail
     */
    public function setVariableInstanceId(string $variableInstanceId): HistoricDetail
    {
        $this->variableInstanceId = $variableInstanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariableType(): string
    {
        return $this->variableType;
    }

    /**
     * @param string $variableType
     * @return HistoricDetail
     */
    public function setVariableType(string $variableType): HistoricDetail
    {
        $this->variableType = $variableType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return HistoricDetail
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function getValueInfo(): array
    {
        return $this->valueInfo;
    }

    /**
     * @param array $valueInfo
     * @return HistoricDetail
     */
    public function setValueInfo(array $valueInfo): HistoricDetail
    {
        $this->valueInfo = $valueInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getRevision(): int
    {
        return $this->revision;
    }

    /**
     * @param int $revision
     * @return HistoricDetail
     */
    public function setRevision(int $revision): HistoricDetail
    {
        $this->revision = $revision;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return HistoricDetail
     */
    public function setErrorMessage(string $errorMessage): HistoricDetail
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }
}