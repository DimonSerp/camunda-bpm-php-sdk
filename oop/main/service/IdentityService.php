<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 14:04
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\service;

use org\provectus\CamundaSDK\exception\CamundaApiException;
use org\provectus\CamundaSDK\entity\request\IdentityRequest;
use org\provectus\CamundaSDK\entity\response\Identity;

class IdentityService extends RequestService
{

    /**
     * Gets the groups of a user and all users that share a group with the given user.
     *
     * @link http://docs.camunda.org/latest/api-references/rest/#identity-get-a-users-groups
     *
     * @param IdentityRequest $request
     * @return Identity $this
     * @throws CamundaApiException
     */
    public function getGroups(IdentityRequest $request): Identity
    {
        $identity = new Identity();
        $this->setRequestUrl('/identity/groups');
        $this->setRequestObject($request);
        $this->setRequestMethod('GET');

        try {
            return $identity->cast($this->execute());
        } catch (CamundaApiException $e) {
            throw $e;
        }
    }
}