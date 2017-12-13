<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 07.06.13
 * Time: 21:07
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;

class ProcessInstanceRequest extends Request
{
    /** @var string */
    protected $businessKey;

    /** @var string */
    protected $processDefinitionId;

    /** @var string */
    protected $processDefinitionKey;

    /** @var string */
    protected $superProcessInstance;

    /** @var string */
    protected $subProcessInstance;

    /** @var bool */
    protected $active;

    /** @var bool */
    protected $suspended;

    /** @var array */
    protected $variables;

    /** @var string */
    protected $sortBy;

    /** @var string */
    protected $sortOrder;

    /** @var string */
    protected $deleteReason;

    /** @var int */
    protected $firstResult;

    /** @var int */
    protected $maxResults;

    /**
     * @return string
     */
    public function getBusinessKey(): string
    {
        return $this->businessKey;
    }

    /**
     * @param string $businessKey
     * @return ProcessInstanceRequest
     */
    public function setBusinessKey(string $businessKey): ProcessInstanceRequest
    {
        $this->businessKey = $businessKey;
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
     * @return ProcessInstanceRequest
     */
    public function setProcessDefinitionId(string $processDefinitionId): ProcessInstanceRequest
    {
        $this->processDefinitionId = $processDefinitionId;
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
     * @return ProcessInstanceRequest
     */
    public function setProcessDefinitionKey(string $processDefinitionKey): ProcessInstanceRequest
    {
        $this->processDefinitionKey = $processDefinitionKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuperProcessInstance(): string
    {
        return $this->superProcessInstance;
    }

    /**
     * @param string $superProcessInstance
     * @return ProcessInstanceRequest
     */
    public function setSuperProcessInstance(string $superProcessInstance): ProcessInstanceRequest
    {
        $this->superProcessInstance = $superProcessInstance;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubProcessInstance(): string
    {
        return $this->subProcessInstance;
    }

    /**
     * @param string $subProcessInstance
     * @return ProcessInstanceRequest
     */
    public function setSubProcessInstance(string $subProcessInstance): ProcessInstanceRequest
    {
        $this->subProcessInstance = $subProcessInstance;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return ProcessInstanceRequest
     */
    public function setActive(bool $active): ProcessInstanceRequest
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuspended(): bool
    {
        return $this->suspended;
    }

    /**
     * @param bool $suspended
     * @return ProcessInstanceRequest
     */
    public function setSuspended(bool $suspended): ProcessInstanceRequest
    {
        $this->suspended = $suspended;
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
     * @return ProcessInstanceRequest
     */
    public function setVariables(array $variables): ProcessInstanceRequest
    {
        $this->variables = $variables;
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
     * @return ProcessInstanceRequest
     */
    public function setSortBy(string $sortBy): ProcessInstanceRequest
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
     * @return ProcessInstanceRequest
     */
    public function setSortOrder(string $sortOrder): ProcessInstanceRequest
    {
        $this->sortOrder = $sortOrder;
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
     * @return ProcessInstanceRequest
     */
    public function setDeleteReason(string $deleteReason): ProcessInstanceRequest
    {
        $this->deleteReason = $deleteReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirstResult(): int
    {
        return $this->firstResult;
    }

    /**
     * @param int $firstResult
     * @return ProcessInstanceRequest
     */
    public function setFirstResult(int $firstResult): ProcessInstanceRequest
    {
        $this->firstResult = $firstResult;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxResults(): int
    {
        return $this->maxResults;
    }

    /**
     * @param int $maxResults
     * @return ProcessInstanceRequest
     */
    public function setMaxResults(int $maxResults): ProcessInstanceRequest
    {
        $this->maxResults = $maxResults;
        return $this;
    }
}