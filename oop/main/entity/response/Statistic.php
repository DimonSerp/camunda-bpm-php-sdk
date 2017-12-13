<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 07.06.13
 * Time: 21:07
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\response;

use org\provectus\php\sdk\helper\CastHelper;

class Statistic extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var int */
    protected $instances;

    /** @var int */
    protected $failedJobs;

    /** @var ProcessDefinition */
    protected $definition;

    /** @var array */
    protected $incidents;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Statistic
     */
    public function setId(string $id): Statistic
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstances(): int
    {
        return $this->instances;
    }

    /**
     * @param int $instances
     * @return Statistic
     */
    public function setInstances(int $instances): Statistic
    {
        $this->instances = $instances;
        return $this;
    }

    /**
     * @return int
     */
    public function getFailedJobs(): int
    {
        return $this->failedJobs;
    }

    /**
     * @param int $failedJobs
     * @return Statistic
     */
    public function setFailedJobs(int $failedJobs): Statistic
    {
        $this->failedJobs = $failedJobs;
        return $this;
    }

    /**
     * @return ProcessDefinition
     */
    public function getDefinition(): ProcessDefinition
    {
        return $this->definition;
    }

    /**
     * @param ProcessDefinition $definition
     * @return Statistic
     */
    public function setDefinition(ProcessDefinition $definition): Statistic
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * @return array
     */
    public function getIncidents(): array
    {
        return $this->incidents;
    }

    /**
     * @param array $incidents
     * @return Statistic
     */
    public function setIncidents(array $incidents): Statistic
    {
        $this->incidents = $incidents;
        return $this;
    }
}