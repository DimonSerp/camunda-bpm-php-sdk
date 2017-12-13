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

class HistoricActivityInstance extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $parentActivityInstanceId;

    /** @var string */
    protected $activityId;

    /** @var string */
    protected $activityName;

    /** @var string */
    protected $activityType;

    /** @var string */
    protected $processDefinitionId;

    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $executionId;

    /** @var string */
    protected $taskId;

    /** @var string */
    protected $assignee;

    /** @var string */
    protected $calledProcessInstanceId;

    /** @var string */
    protected $startTime;

    /** @var string */
    protected $endTime;

    /** @var int */
    protected $durationInMillis;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return HistoricActivityInstance
     */
    public function setId(string $id): HistoricActivityInstance
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentActivityInstanceId(): string
    {
        return $this->parentActivityInstanceId;
    }

    /**
     * @param string $parentActivityInstanceId
     * @return HistoricActivityInstance
     */
    public function setParentActivityInstanceId(string $parentActivityInstanceId): HistoricActivityInstance
    {
        $this->parentActivityInstanceId = $parentActivityInstanceId;
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
     * @return HistoricActivityInstance
     */
    public function setActivityId(string $activityId): HistoricActivityInstance
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
     * @return HistoricActivityInstance
     */
    public function setActivityName(string $activityName): HistoricActivityInstance
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
     * @return HistoricActivityInstance
     */
    public function setActivityType(string $activityType): HistoricActivityInstance
    {
        $this->activityType = $activityType;
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
     * @return HistoricActivityInstance
     */
    public function setProcessDefinitionId(string $processDefinitionId): HistoricActivityInstance
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
     * @return HistoricActivityInstance
     */
    public function setProcessInstanceId(string $processInstanceId): HistoricActivityInstance
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
     * @return HistoricActivityInstance
     */
    public function setExecutionId(string $executionId): HistoricActivityInstance
    {
        $this->executionId = $executionId;
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
     * @return HistoricActivityInstance
     */
    public function setTaskId(string $taskId): HistoricActivityInstance
    {
        $this->taskId = $taskId;
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
     * @return HistoricActivityInstance
     */
    public function setAssignee(string $assignee): HistoricActivityInstance
    {
        $this->assignee = $assignee;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalledProcessInstanceId(): string
    {
        return $this->calledProcessInstanceId;
    }

    /**
     * @param string $calledProcessInstanceId
     * @return HistoricActivityInstance
     */
    public function setCalledProcessInstanceId(string $calledProcessInstanceId): HistoricActivityInstance
    {
        $this->calledProcessInstanceId = $calledProcessInstanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return HistoricActivityInstance
     */
    public function setStartTime(string $startTime): HistoricActivityInstance
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return HistoricActivityInstance
     */
    public function setEndTime(string $endTime): HistoricActivityInstance
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getDurationInMillis(): int
    {
        return $this->durationInMillis;
    }

    /**
     * @param int $durationInMillis
     * @return HistoricActivityInstance
     */
    public function setDurationInMillis(int $durationInMillis): HistoricActivityInstance
    {
        $this->durationInMillis = $durationInMillis;
        return $this;
    }
}