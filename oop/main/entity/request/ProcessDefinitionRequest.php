<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 09.06.13
 * Time: 10:37
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\request;

class ProcessDefinitionRequest extends Request
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $nameLike;

    /** @var string */
    protected $deploymentId;

    /** @var string */
    protected $key;

    /** @var string */
    protected $keyLike;

    /** @var string */
    protected $category;

    /** @var string */
    protected $categoryLike;

    /** @var int */
    protected $ver;

    /** @var bool */
    protected $latestVersion;

    /** @var string */
    protected $resourceName;

    /** @var string */
    protected $resourceNameLike;

    /** @var string */
    protected $startableBy;

    /** @var bool */
    protected $active;

    /** @var bool */
    protected $suspended;

    /** @var string */
    protected $incidentId;

    /** @var string */
    protected $incidentType;

    /** @var string */
    protected $incidentMessage;

    /** @var string */
    protected $incidentMessageLike;

    /** @var string */
    protected $sortBy;

    /** @var string */
    protected $sortOrder;

    /** @var int */
    protected $firstResult;

    /** @var int */
    protected $maxResults;

    /** @var array */
    protected $variables;

    /** @var string */
    protected $businessKey;

    /** @var string */
    protected $caseInstanceId;

    /** @var string */
    protected $tenantIdIn;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ProcessDefinitionRequest
     */
    public function setName(string $name): ProcessDefinitionRequest
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameLike(): string
    {
        return $this->nameLike;
    }

    /**
     * @param string $nameLike
     * @return ProcessDefinitionRequest
     */
    public function setNameLike(string $nameLike): ProcessDefinitionRequest
    {
        $this->nameLike = $nameLike;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeploymentId(): string
    {
        return $this->deploymentId;
    }

    /**
     * @param string $deploymentId
     * @return ProcessDefinitionRequest
     */
    public function setDeploymentId(string $deploymentId): ProcessDefinitionRequest
    {
        $this->deploymentId = $deploymentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return ProcessDefinitionRequest
     */
    public function setKey(string $key): ProcessDefinitionRequest
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeyLike(): string
    {
        return $this->keyLike;
    }

    /**
     * @param string $keyLike
     * @return ProcessDefinitionRequest
     */
    public function setKeyLike(string $keyLike): ProcessDefinitionRequest
    {
        $this->keyLike = $keyLike;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return ProcessDefinitionRequest
     */
    public function setCategory(string $category): ProcessDefinitionRequest
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryLike(): string
    {
        return $this->categoryLike;
    }

    /**
     * @param string $categoryLike
     * @return ProcessDefinitionRequest
     */
    public function setCategoryLike(string $categoryLike): ProcessDefinitionRequest
    {
        $this->categoryLike = $categoryLike;
        return $this;
    }

    /**
     * @return int
     */
    public function getVer(): int
    {
        return $this->ver;
    }

    /**
     * @param int $ver
     * @return ProcessDefinitionRequest
     */
    public function setVer(int $ver): ProcessDefinitionRequest
    {
        $this->ver = $ver;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLatestVersion(): bool
    {
        return $this->latestVersion;
    }

    /**
     * @param bool $latestVersion
     * @return ProcessDefinitionRequest
     */
    public function setLatestVersion(bool $latestVersion): ProcessDefinitionRequest
    {
        $this->latestVersion = $latestVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getResourceName(): string
    {
        return $this->resourceName;
    }

    /**
     * @param string $resourceName
     * @return ProcessDefinitionRequest
     */
    public function setResourceName(string $resourceName): ProcessDefinitionRequest
    {
        $this->resourceName = $resourceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getResourceNameLike(): string
    {
        return $this->resourceNameLike;
    }

    /**
     * @param string $resourceNameLike
     * @return ProcessDefinitionRequest
     */
    public function setResourceNameLike(string $resourceNameLike): ProcessDefinitionRequest
    {
        $this->resourceNameLike = $resourceNameLike;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartableBy(): string
    {
        return $this->startableBy;
    }

    /**
     * @param string $startableBy
     * @return ProcessDefinitionRequest
     */
    public function setStartableBy(string $startableBy): ProcessDefinitionRequest
    {
        $this->startableBy = $startableBy;
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
     * @return ProcessDefinitionRequest
     */
    public function setActive(bool $active): ProcessDefinitionRequest
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
     * @return ProcessDefinitionRequest
     */
    public function setSuspended(bool $suspended): ProcessDefinitionRequest
    {
        $this->suspended = $suspended;
        return $this;
    }

    /**
     * @return string
     */
    public function getIncidentId(): string
    {
        return $this->incidentId;
    }

    /**
     * @param string $incidentId
     * @return ProcessDefinitionRequest
     */
    public function setIncidentId(string $incidentId): ProcessDefinitionRequest
    {
        $this->incidentId = $incidentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIncidentType(): string
    {
        return $this->incidentType;
    }

    /**
     * @param string $incidentType
     * @return ProcessDefinitionRequest
     */
    public function setIncidentType(string $incidentType): ProcessDefinitionRequest
    {
        $this->incidentType = $incidentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getIncidentMessage(): string
    {
        return $this->incidentMessage;
    }

    /**
     * @param string $incidentMessage
     * @return ProcessDefinitionRequest
     */
    public function setIncidentMessage(string $incidentMessage): ProcessDefinitionRequest
    {
        $this->incidentMessage = $incidentMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getIncidentMessageLike(): string
    {
        return $this->incidentMessageLike;
    }

    /**
     * @param string $incidentMessageLike
     * @return ProcessDefinitionRequest
     */
    public function setIncidentMessageLike(string $incidentMessageLike): ProcessDefinitionRequest
    {
        $this->incidentMessageLike = $incidentMessageLike;
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
     * @return ProcessDefinitionRequest
     */
    public function setSortBy(string $sortBy): ProcessDefinitionRequest
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
     * @return ProcessDefinitionRequest
     */
    public function setSortOrder(string $sortOrder): ProcessDefinitionRequest
    {
        $this->sortOrder = $sortOrder;
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
     * @return ProcessDefinitionRequest
     */
    public function setFirstResult(int $firstResult): ProcessDefinitionRequest
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
     * @return ProcessDefinitionRequest
     */
    public function setMaxResults(int $maxResults): ProcessDefinitionRequest
    {
        $this->maxResults = $maxResults;
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
     * @return ProcessDefinitionRequest
     */
    public function setVariables(array $variables): ProcessDefinitionRequest
    {
        $this->variables = $variables;
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
     * @return ProcessDefinitionRequest
     */
    public function setBusinessKey(string $businessKey): ProcessDefinitionRequest
    {
        $this->businessKey = $businessKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaseInstanceId(): string
    {
        return $this->caseInstanceId;
    }

    /**
     * @param string $caseInstanceId
     * @return ProcessDefinitionRequest
     */
    public function setCaseInstanceId(string $caseInstanceId): ProcessDefinitionRequest
    {
        $this->caseInstanceId = $caseInstanceId;
        return $this;
    }

    /**
     * @return array
     */
    public function getTenantIdIn(): array
    {
        return explode(',', $this->tenantIdIn);
    }

    /**
     * @param array $tenants
     * @return ProcessDefinitionRequest
     */
    public function setTenantIdIn(array $tenants): ProcessDefinitionRequest
    {
        $this->tenantIdIn = join(',', $tenants);
        return $this;
    }
}