<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 09.06.13
 * Time: 10:38
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\response;

use org\provectus\CamundaSDK\helper\CastHelper;

class MessageSubscription extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $eventType;

    /** @var string */
    protected $eventName;

    /** @var string */
    protected $executionId;

    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $activityId;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return MessageSubscription
     */
    public function setId(string $id): MessageSubscription
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * @param string $eventType
     * @return MessageSubscription
     */
    public function setEventType(string $eventType): MessageSubscription
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * @return string
     */
    public function getEventName(): string
    {
        return $this->eventName;
    }

    /**
     * @param string $eventName
     * @return MessageSubscription
     */
    public function setEventName(string $eventName): MessageSubscription
    {
        $this->eventName = $eventName;
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
     * @return MessageSubscription
     */
    public function setExecutionId(string $executionId): MessageSubscription
    {
        $this->executionId = $executionId;
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
     * @return MessageSubscription
     */
    public function setProcessInstanceId(string $processInstanceId): MessageSubscription
    {
        $this->processInstanceId = $processInstanceId;
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
     * @return MessageSubscription
     */
    public function setActivityId(string $activityId): MessageSubscription
    {
        $this->activityId = $activityId;
        return $this;
    }
}