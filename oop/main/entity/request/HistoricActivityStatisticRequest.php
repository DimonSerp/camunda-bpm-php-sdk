<?php

namespace org\provectus\php\sdk\entity\request;

class HistoricActivityStatisticRequest extends Request
{
    /** @var bool */
    protected $canceled;

    /** @var bool */
    protected $finished;

    /** @var bool */
    protected $completeScope;

    /** @var string */
    protected $sortBy;

    /** @var string */
    protected $sortOrder;

    /**
     * @return bool
     */
    public function isCanceled(): bool
    {
        return $this->canceled;
    }

    /**
     * @param bool $canceled
     * @return HistoricActivityStatisticRequest
     */
    public function setCanceled(bool $canceled): HistoricActivityStatisticRequest
    {
        $this->canceled = $canceled;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFinished(): bool
    {
        return $this->finished;
    }

    /**
     * @param bool $finished
     * @return HistoricActivityStatisticRequest
     */
    public function setFinished(bool $finished): HistoricActivityStatisticRequest
    {
        $this->finished = $finished;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCompleteScope(): bool
    {
        return $this->completeScope;
    }

    /**
     * @param bool $completeScope
     * @return HistoricActivityStatisticRequest
     */
    public function setCompleteScope(bool $completeScope): HistoricActivityStatisticRequest
    {
        $this->completeScope = $completeScope;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortBy(): string
    {
        return $this->sortBy;
    }

    /**
     * @param string $sortBy
     * @return HistoricActivityStatisticRequest
     */
    public function setSortBy(string $sortBy): HistoricActivityStatisticRequest
    {
        $this->sortBy = $sortBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder(): string
    {
        return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     * @return HistoricActivityStatisticRequest
     */
    public function setSortOrder(string $sortOrder): HistoricActivityStatisticRequest
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
}