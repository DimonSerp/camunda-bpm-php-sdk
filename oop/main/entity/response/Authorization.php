<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 09:55
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\response;


use org\provectus\php\sdk\helper\CastHelper;

class Authorization extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $type;

    /** @var array */
    protected $permissions;

    /** @var string */
    protected $userId;

    /** @var string */
    protected $groupId;

    /** @var string */
    protected $resourceType;

    /** @var string */
    protected $resourceId;

    /** @var array */
    protected $links;

    /** @var int */
    protected $count;

    /** @var string */
    protected $permissionName;

    /** @var string */
    protected $resourceName;

    /** @var bool */
    protected $isAuthorized;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Authorization
     */
    public function setId(string $id): Authorization
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
     * @return Authorization
     */
    public function setType(string $type): Authorization
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }

    /**
     * @param array $permissions
     * @return Authorization
     */
    public function setPermissions(array $permissions): Authorization
    {
        $this->permissions = $permissions;
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
     * @return Authorization
     */
    public function setUserId(string $userId): Authorization
    {
        $this->userId = $userId;
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
     * @return Authorization
     */
    public function setGroupId(string $groupId): Authorization
    {
        $this->groupId = $groupId;
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
     * @return Authorization
     */
    public function setResourceType(string $resourceType): Authorization
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
     * @return Authorization
     */
    public function setResourceId(string $resourceId): Authorization
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @param array $links
     * @return Authorization
     */
    public function setLinks(array $links): Authorization
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return Authorization
     */
    public function setCount(int $count): Authorization
    {
        $this->count = $count;
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
     * @return Authorization
     */
    public function setPermissionName(string $permissionName): Authorization
    {
        $this->permissionName = $permissionName;
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
     * @return Authorization
     */
    public function setResourceName(string $resourceName): Authorization
    {
        $this->resourceName = $resourceName;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAuthorized(): bool
    {
        return $this->isAuthorized;
    }

    /**
     * @param bool $isAuthorized
     * @return Authorization
     */
    public function setIsAuthorized(bool $isAuthorized): Authorization
    {
        $this->isAuthorized = $isAuthorized;
        return $this;
    }
}