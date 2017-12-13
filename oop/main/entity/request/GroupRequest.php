<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 22.07.13
 * Time: 11:37
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\request;

class GroupRequest extends Request
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $nameLike;

    /** @var string */
    protected $type;

    /** @var string */
    protected $member;

    /** @var string */
    protected $sortBy;

    /** @var string */
    protected $sortOrder;

    /** @var int */
    protected $firstResult;

    /** @var int */
    protected $maxResults;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return GroupRequest
     */
    public function setId(string $id): GroupRequest
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return GroupRequest
     */
    public function setName(string $name): GroupRequest
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameLike(): string
    {
        return $this->nameLike;
    }

    /**
     * @param string $nameLike
     * @return GroupRequest
     */
    public function setNameLike(string $nameLike): GroupRequest
    {
        $this->nameLike = $nameLike;
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
     * @return GroupRequest
     */
    public function setType(string $type): GroupRequest
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getMember(): string
    {
        return $this->member;
    }

    /**
     * @param string $member
     * @return GroupRequest
     */
    public function setMember(string $member): GroupRequest
    {
        $this->member = $member;
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
     * @return GroupRequest
     */
    public function setSortBy(string $sortBy): GroupRequest
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
     * @return GroupRequest
     */
    public function setSortOrder(string $sortOrder): GroupRequest
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
     * @return GroupRequest
     */
    public function setFirstResult(int $firstResult): GroupRequest
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
     * @return GroupRequest
     */
    public function setMaxResults(int $maxResults): GroupRequest
    {
        $this->maxResults = $maxResults;
        return $this;
    }
}