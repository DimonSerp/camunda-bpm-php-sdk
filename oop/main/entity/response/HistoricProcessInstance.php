<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 13:33
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\response;


use org\provectus\php\sdk\helper\CastHelper;

class HistoricProcessInstance extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $superProcessInstanceId;

    /** @var string */
    protected $processDefinitionId;

    /** @var string */
    protected $businessKey;

    /** @var string */
    protected $startTime;

    /** @var string */
    protected $endTime;

    /** @var int */
    protected $durationInMillis;

    /** @var string */
    protected $startUserId;

    /** @var string */
    protected $startActivityId;

    /** @var string */
    protected $deleteReason;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return HistoricProcessInstance
     */
    public function setId(string $id): HistoricProcessInstance
    {
        $this->id = $id;
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
     * @return HistoricProcessInstance
     */
    public function setSuperProcessInstanceId(string $superProcessInstanceId): HistoricProcessInstance
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
     * @return HistoricProcessInstance
     */
    public function setProcessDefinitionId(string $processDefinitionId): HistoricProcessInstance
    {
        $this->processDefinitionId = $processDefinitionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessKey(): string
    {
        return $this->businessKey;
    }

    /**
     * @param string $businessKey
     * @return HistoricProcessInstance
     */
    public function setBusinessKey(string $businessKey): HistoricProcessInstance
    {
        $this->businessKey = $businessKey;
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
     * @return HistoricProcessInstance
     */
    public function setStartTime(string $startTime): HistoricProcessInstance
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
     * @return HistoricProcessInstance
     */
    public function setEndTime(string $endTime): HistoricProcessInstance
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
     * @return HistoricProcessInstance
     */
    public function setDurationInMillis(int $durationInMillis): HistoricProcessInstance
    {
        $this->durationInMillis = $durationInMillis;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartUserId(): string
    {
        return $this->startUserId;
    }

    /**
     * @param string $startUserId
     * @return HistoricProcessInstance
     */
    public function setStartUserId(string $startUserId): HistoricProcessInstance
    {
        $this->startUserId = $startUserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartActivityId(): string
    {
        return $this->startActivityId;
    }

    /**
     * @param string $startActivityId
     * @return HistoricProcessInstance
     */
    public function setStartActivityId(string $startActivityId): HistoricProcessInstance
    {
        $this->startActivityId = $startActivityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeleteReason(): string
    {
        return $this->deleteReason;
    }

    /**
     * @param string $deleteReason
     * @return HistoricProcessInstance
     */
    public function setDeleteReason(string $deleteReason): HistoricProcessInstance
    {
        $this->deleteReason = $deleteReason;
        return $this;
    }
}