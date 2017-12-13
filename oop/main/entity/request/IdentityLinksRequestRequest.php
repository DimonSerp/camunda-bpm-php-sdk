<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 13:02
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\request;


class IdentityLinksRequest extends Request
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
     * @return IdentityLinksRequest
     */
    public function setUserId(string $userId): IdentityLinksRequest
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
     * @return IdentityLinksRequest
     */
    public function setGroupId(string $groupId): IdentityLinksRequest
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
     * @return IdentityLinksRequest
     */
    public function setType(string $type): IdentityLinksRequest
    {
        $this->type = $type;
        return $this;
    }
}