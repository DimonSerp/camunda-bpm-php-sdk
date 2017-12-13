<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 24.07.13
 * Time: 10:20
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\request;

class ProfileRequest extends Request
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $firstName;

    /** @var string */
    protected $lastName;

    /** @var string */
    protected $email;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ProfileRequest
     */
    public function setId(string $id): ProfileRequest
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return ProfileRequest
     */
    public function setFirstName(string $firstName): ProfileRequest
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return ProfileRequest
     */
    public function setLastName(string $lastName): ProfileRequest
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return ProfileRequest
     */
    public function setEmail(string $email): ProfileRequest
    {
        $this->email = $email;
        return $this;
    }
}