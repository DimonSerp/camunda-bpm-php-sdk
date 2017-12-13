<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 07.06.13
 * Time: 21:07
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\response;

use org\provectus\CamundaSDK\helper\CastHelper;

class ProcessInstance extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $definitionId;

    /** @var string */
    protected $businessKey;

    /** @var bool */
    protected $ended;

    /** @var bool */
    protected $suspended;

    /** @var string */
    protected $tenantId;

    /** @var array */
    protected $links = [];

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ProcessInstance
     */
    public function setId(string $id): ProcessInstance
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefinitionId(): string
    {
        return $this->definitionId;
    }

    /**
     * @param string $definitionId
     * @return ProcessInstance
     */
    public function setDefinitionId(string $definitionId): ProcessInstance
    {
        $this->definitionId = $definitionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessKey(): string
    {
        return $this->businessKey;
    }

    /**
     * @param string $businessKey
     * @return ProcessInstance
     */
    public function setBusinessKey(string $businessKey): ProcessInstance
    {
        $this->businessKey = $businessKey;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnded(): bool
    {
        return $this->ended;
    }

    /**
     * @param bool $ended
     * @return ProcessInstance
     */
    public function setEnded(bool $ended): ProcessInstance
    {
        $this->ended = $ended;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuspended(): bool
    {
        return $this->suspended;
    }

    /**
     * @param bool $suspended
     * @return ProcessInstance
     */
    public function setSuspended(bool $suspended): ProcessInstance
    {
        $this->suspended = $suspended;
        return $this;
    }

    /**
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }

    /**
     * @param string $tenantId
     * @return ProcessInstance
     */
    public function setTenantId(string $tenantId): ProcessInstance
    {
        $this->tenantId = $tenantId;
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
     * @return ProcessInstance
     */
    public function setLinks(array $links): ProcessInstance
    {
        $this->links = $links;
        return $this;
    }
}