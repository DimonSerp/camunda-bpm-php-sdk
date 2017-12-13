<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 07.06.13
 * Time: 20:46
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;

class CredentialsRequest extends Request
{
    /** @var string */
    protected $password;

    /**
     * @param mixed $password
     * @return $this
     */
    public function setPassword($password): CredentialsRequest
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }


}