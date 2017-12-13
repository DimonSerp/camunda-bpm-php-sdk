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

class HistoricActivityStatistic extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var int */
    protected $instances;

    /** @var int */
    protected $canceled;

    /** @var int */
    protected $finished;

    /** @var int */
    protected $completeScope;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return HistoricActivityStatistic
     */
    public function setId(string $id): HistoricActivityStatistic
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
     * @return HistoricActivityStatistic
     */
    public function setInstances(int $instances): HistoricActivityStatistic
    {
        $this->instances = $instances;
        return $this;
    }

    /**
     * @return int
     */
    public function getCanceled(): int
    {
        return $this->canceled;
    }

    /**
     * @param int $canceled
     * @return HistoricActivityStatistic
     */
    public function setCanceled(int $canceled): HistoricActivityStatistic
    {
        $this->canceled = $canceled;
        return $this;
    }

    /**
     * @return int
     */
    public function getFinished(): int
    {
        return $this->finished;
    }

    /**
     * @param int $finished
     * @return HistoricActivityStatistic
     */
    public function setFinished(int $finished): HistoricActivityStatistic
    {
        $this->finished = $finished;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompleteScope(): int
    {
        return $this->completeScope;
    }

    /**
     * @param int $completeScope
     * @return HistoricActivityStatistic
     */
    public function setCompleteScope(int $completeScope): HistoricActivityStatistic
    {
        $this->completeScope = $completeScope;
        return $this;
    }
}