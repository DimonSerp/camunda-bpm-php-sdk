<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 09.06.13
 * Time: 10:38
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;

class MessageSubscriptionRequest extends Request
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

    /** @var string */
    protected $createdDate;

    /** @var string */
    protected $messageName;

    /** @var array */
    protected $variables;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return MessageSubscriptionRequest
     */
    public function setId(string $id): MessageSubscriptionRequest
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
     * @return MessageSubscriptionRequest
     */
    public function setEventType(string $eventType): MessageSubscriptionRequest
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
     * @return MessageSubscriptionRequest
     */
    public function setEventName(string $eventName): MessageSubscriptionRequest
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
     * @return MessageSubscriptionRequest
     */
    public function setExecutionId(string $executionId): MessageSubscriptionRequest
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
     * @return MessageSubscriptionRequest
     */
    public function setProcessInstanceId(string $processInstanceId): MessageSubscriptionRequest
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
     * @return MessageSubscriptionRequest
     */
    public function setActivityId(string $activityId): MessageSubscriptionRequest
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $createdDate
     * @return MessageSubscriptionRequest
     */
    public function setCreatedDate(string $createdDate): MessageSubscriptionRequest
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessageName(): string
    {
        return $this->messageName;
    }

    /**
     * @param string $messageName
     * @return MessageSubscriptionRequest
     */
    public function setMessageName(string $messageName): MessageSubscriptionRequest
    {
        $this->messageName = $messageName;
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
     * @return MessageSubscriptionRequest
     */
    public function setVariables(array $variables): MessageSubscriptionRequest
    {
        $this->variables = $variables;
        return $this;
    }
}