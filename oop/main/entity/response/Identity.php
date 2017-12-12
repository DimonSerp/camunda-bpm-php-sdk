<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 09.06.13
 * Time: 10:38
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\response;

use org\provectus\php\sdk\helper\CastHelper;

class Identity extends CastHelper
{
    protected $groups;
    protected $groupUsers;

    /**
     * @param mixed $groupUsers
     */
    public function setGroupUsers($groupUsers)
    {
        $this->groupUsers = $groupUsers;
    }

    /**
     * @return mixed
     */
    public function getGroupUsers()
    {
        return $this->groupUsers;
    }

    /**
     * @param mixed $groups
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }


}