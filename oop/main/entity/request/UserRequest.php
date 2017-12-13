<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 22.07.13
 * Time: 11:36
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;


class UserRequest extends Request
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $firstName;

    /** @var string */
    protected $firstNameLike;

    /** @var string */
    protected $lastName;

    /** @var string */
    protected $lastNameLike;

    /** @var string */
    protected $email;

    /** @var string */
    protected $emailLike;

    /** @var string */
    protected $memberOfGroup;

    /** @var string */
    protected $memberOfTenant;

    /** @var string */
    protected $sortBy;

    /** @var string */
    protected $sortOrder;

    /** @var int */
    protected $firstResult;

    /** @var int */
    protected $maxResults;

    /** @var string */
    protected $password;

    /** @var ProfileRequest */
    protected $profile;

    /** @var CredentialsRequest */
    protected $credentials;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return UserRequest
     */
    public function setId(string $id): UserRequest
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
     * @return UserRequest
     */
    public function setFirstName(string $firstName): UserRequest
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstNameLike(): string
    {
        return $this->firstNameLike;
    }

    /**
     * @param string $firstNameLike
     * @return UserRequest
     */
    public function setFirstNameLike(string $firstNameLike): UserRequest
    {
        $this->firstNameLike = $firstNameLike;
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
     * @return UserRequest
     */
    public function setLastName(string $lastName): UserRequest
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastNameLike(): string
    {
        return $this->lastNameLike;
    }

    /**
     * @param string $lastNameLike
     * @return UserRequest
     */
    public function setLastNameLike(string $lastNameLike): UserRequest
    {
        $this->lastNameLike = $lastNameLike;
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
     * @return UserRequest
     */
    public function setEmail(string $email): UserRequest
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailLike(): string
    {
        return $this->emailLike;
    }

    /**
     * @param string $emailLike
     * @return UserRequest
     */
    public function setEmailLike(string $emailLike): UserRequest
    {
        $this->emailLike = $emailLike;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberOfGroup(): string
    {
        return $this->memberOfGroup;
    }

    /**
     * @param string $memberOfGroup
     * @return UserRequest
     */
    public function setMemberOfGroup(string $memberOfGroup): UserRequest
    {
        $this->memberOfGroup = $memberOfGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberOfTenant(): string
    {
        return $this->memberOfTenant;
    }

    /**
     * @param string $memberOfTenant
     * @return UserRequest
     */
    public function setMemberOfTenant(string $memberOfTenant): UserRequest
    {
        $this->memberOfTenant = $memberOfTenant;
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
     * @return UserRequest
     */
    public function setSortBy(string $sortBy): UserRequest
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
     * @return UserRequest
     */
    public function setSortOrder(string $sortOrder): UserRequest
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
     * @return UserRequest
     */
    public function setFirstResult(int $firstResult): UserRequest
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
     * @return UserRequest
     */
    public function setMaxResults(int $maxResults): UserRequest
    {
        $this->maxResults = $maxResults;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return UserRequest
     */
    public function setPassword(string $password): UserRequest
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return ProfileRequest
     */
    public function getProfile(): ProfileRequest
    {
        return $this->profile;
    }

    /**
     * @param ProfileRequest $profile
     * @return UserRequest
     */
    public function setProfile(ProfileRequest $profile): UserRequest
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * @return CredentialsRequest
     */
    public function getCredentials(): CredentialsRequest
    {
        return $this->credentials;
    }

    /**
     * @param CredentialsRequest $credentials
     * @return UserRequest
     */
    public function setCredentials(CredentialsRequest $credentials): UserRequest
    {
        $this->credentials = $credentials;
        return $this;
    }
}