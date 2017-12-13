<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 22.07.13
 * Time: 10:48
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\response;

use org\provectus\php\sdk\helper\CastHelper;

class Activity extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $activityId;

    /** @var string */
    protected $activityName;

    /** @var string */
    protected $activityType;

    /** @var string */
    protected $processInstanceId;

    /** @var string */
    protected $processDefinitionId;

    /** @var array */
    protected $childActivityInstances;

    /** @var array */
    protected $childTransitionInstances;

    /** @var array */
    protected $executionIds;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Activity
     */
    public function setId(string $id): Activity
    {
        $this->id = $id;
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
     * @return Activity
     */
    public function setActivityId(string $activityId): Activity
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
     * @return Activity
     */
    public function setActivityName(string $activityName): Activity
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
     * @return Activity
     */
    public function setActivityType(string $activityType): Activity
    {
        $this->activityType = $activityType;
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
     * @return Activity
     */
    public function setProcessInstanceId(string $processInstanceId): Activity
    {
        $this->processInstanceId = $processInstanceId;
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
     * @return Activity
     */
    public function setProcessDefinitionId(string $processDefinitionId): Activity
    {
        $this->processDefinitionId = $processDefinitionId;
        return $this;
    }

    /**
     * @return array
     */
    public function getChildActivityInstances(): array
    {
        return $this->childActivityInstances;
    }

    /**
     * @param array $childActivityInstances
     * @return Activity
     */
    public function setChildActivityInstances(array $childActivityInstances): Activity
    {
        $this->childActivityInstances = $childActivityInstances;
        return $this;
    }

    /**
     * @return array
     */
    public function getChildTransitionInstances(): array
    {
        return $this->childTransitionInstances;
    }

    /**
     * @param array $childTransitionInstances
     * @return Activity
     */
    public function setChildTransitionInstances(array $childTransitionInstances): Activity
    {
        $this->childTransitionInstances = $childTransitionInstances;
        return $this;
    }

    /**
     * @return array
     */
    public function getExecutionIds(): array
    {
        return $this->executionIds;
    }

    /**
     * @param array $executionIds
     * @return Activity
     */
    public function setExecutionIds(array $executionIds): Activity
    {
        $this->executionIds = $executionIds;
        return $this;
    }
}