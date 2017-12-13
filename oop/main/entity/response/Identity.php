<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 09.06.13
 * Time: 10:38
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\response;

use org\provectus\CamundaSDK\helper\CastHelper;

class Identity extends CastHelper
{
    /** @var array */
    protected $groups;

    /** @var array */
    protected $groupUsers;

    /**
     * @return array
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @param array $groups
     * @return Identity
     */
    public function setGroups(array $groups): Identity
    {
        $this->groups = $groups;
        return $this;
    }

    /**
     * @return array
     */
    public function getGroupUsers(): array
    {
        return $this->groupUsers;
    }

    /**
     * @param array $groupUsers
     * @return Identity
     */
    public function setGroupUsers(array $groupUsers): Identity
    {
        $this->groupUsers = $groupUsers;
        return $this;
    }
}