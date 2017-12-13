<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 09:50
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\request;

class AuthorizationRequest extends Request
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $type;

    /** @var string */
    protected $userId;

    /** @var string */
    protected $userIdIn;

    /** @var string */
    protected $groupId;

    /** @var string */
    protected $groupIdIn;

    /** @var string */
    protected $resourceType;

    /** @var string */
    protected $resourceId;

    /** @var string */
    protected $sortBy;

    /** @var string */
    protected $sortOrder;

    /** @var int */
    protected $firstResult;

    /** @var int */
    protected $maxResults;

    /** @var string */
    protected $permissionName;

    /** @var string */
    protected $permissionValue;

    /** @var string */
    protected $resourceName;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return AuthorizationRequest
     */
    public function setId(string $id): AuthorizationRequest
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return AuthorizationRequest
     */
    public function setType(string $type): AuthorizationRequest
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return AuthorizationRequest
     */
    public function setUserId(string $userId): AuthorizationRequest
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return array
     */
    public function getUserIdIn(): array
    {
        return explode(',', $this->userIdIn);
    }

    /**
     * @param array $userIds
     * @return AuthorizationRequest
     */
    public function setUserIdIn(array $userIds): AuthorizationRequest
    {
        $this->userIdIn = join(',', $userIds);
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupId(): string
    {
        return $this->groupId;
    }

    /**
     * @param string $groupId
     * @return AuthorizationRequest
     */
    public function setGroupId(string $groupId): AuthorizationRequest
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return array
     */
    public function getGroupIdIn(): array
    {
        return explode(',', $this->groupIdIn);
    }

    /**
     * @param array $groupIds
     * @return AuthorizationRequest
     */
    public function setGroupIdIn(array $groupIds): AuthorizationRequest
    {
        $this->groupIdIn = implode(',', $groupIds);
        return $this;
    }

    /**
     * @return string
     */
    public function getResourceType(): string
    {
        return $this->resourceType;
    }

    /**
     * @param string $resourceType
     * @return AuthorizationRequest
     */
    public function setResourceType(string $resourceType): AuthorizationRequest
    {
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    /**
     * @param string $resourceId
     * @return AuthorizationRequest
     */
    public function setResourceId(string $resourceId): AuthorizationRequest
    {
        $this->resourceId = $resourceId;
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
     * @return AuthorizationRequest
     */
    public function setSortBy(string $sortBy): AuthorizationRequest
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
     * @return AuthorizationRequest
     */
    public function setSortOrder(string $sortOrder): AuthorizationRequest
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
     * @return AuthorizationRequest
     */
    public function setFirstResult(int $firstResult): AuthorizationRequest
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
     * @return AuthorizationRequest
     */
    public function setMaxResults(int $maxResults): AuthorizationRequest
    {
        $this->maxResults = $maxResults;
        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionName(): string
    {
        return $this->permissionName;
    }

    /**
     * @param string $permissionName
     * @return AuthorizationRequest
     */
    public function setPermissionName(string $permissionName): AuthorizationRequest
    {
        $this->permissionName = $permissionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPermissionValue(): string
    {
        return $this->permissionValue;
    }

    /**
     * @param string $permissionValue
     * @return AuthorizationRequest
     */
    public function setPermissionValue(string $permissionValue): AuthorizationRequest
    {
        $this->permissionValue = $permissionValue;
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
     * @return AuthorizationRequest
     */
    public function setResourceName(string $resourceName): AuthorizationRequest
    {
        $this->resourceName = $resourceName;
        return $this;
    }
}