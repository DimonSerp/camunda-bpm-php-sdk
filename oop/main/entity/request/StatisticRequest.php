<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 07.06.13
 * Time: 21:07
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;

class StatisticRequest extends Request
{
    /** @var string */
    protected $failedJobs;

    /** @var string */
    protected $incidents;

    /** @var string */
    protected $incidentsForType;

    /**
     * @return string
     */
    public function getFailedJobs(): string
    {
        return $this->failedJobs;
    }

    /**
     * @param string $failedJobs
     * @return StatisticRequest
     */
    public function setFailedJobs(string $failedJobs): StatisticRequest
    {
        $this->failedJobs = $failedJobs;
        return $this;
    }

    /**
     * @return string
     */
    public function getIncidents(): string
    {
        return $this->incidents;
    }

    /**
     * @param string $incidents
     * @return StatisticRequest
     */
    public function setIncidents(string $incidents): StatisticRequest
    {
        $this->incidents = $incidents;
        return $this;
    }

    /**
     * @return string
     */
    public function getIncidentsForType(): string
    {
        return $this->incidentsForType;
    }

    /**
     * @param string $incidentsForType
     * @return StatisticRequest
     */
    public function setIncidentsForType(string $incidentsForType): StatisticRequest
    {
        $this->incidentsForType = $incidentsForType;
        return $this;
    }
}