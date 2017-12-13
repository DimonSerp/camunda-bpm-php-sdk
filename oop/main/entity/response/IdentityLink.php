<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 13:00
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\response;


use org\provectus\php\sdk\helper\CastHelper;

class IdentityLink extends CastHelper
{
    /** @var string */
    protected $userId;

    /** @var string */
    protected $groupId;

    /** @var string */
    protected $type;

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return IdentityLink
     */
    public function setUserId(string $userId): IdentityLink
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
     * @return IdentityLink
     */
    public function setGroupId(string $groupId): IdentityLink
    {
        $this->groupId = $groupId;
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
     * @return IdentityLink
     */
    public function setType(string $type): IdentityLink
    {
        $this->type = $type;
        return $this;
    }
}