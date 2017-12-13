<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 09.06.13
 * Time: 10:37
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\response;

use org\provectus\php\sdk\helper\CastHelper;

class ProcessDefinition extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $key;

    /** @var string */
    protected $category;

    /** @var string */
    protected $description;

    /** @var string */
    protected $name;

    /** @var int */
    protected $version;

    /** @var string */
    protected $resource;

    /** @var string */
    protected $deploymentId;

    /** @var string */
    protected $diagram;

    /** @var bool */
    protected $suspended;

    /** @var string */
    protected $tenantId;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ProcessDefinition
     */
    public function setId(string $id): ProcessDefinition
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return ProcessDefinition
     */
    public function setKey(string $key): ProcessDefinition
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return ProcessDefinition
     */
    public function setCategory(string $category): ProcessDefinition
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ProcessDefinition
     */
    public function setDescription(string $description): ProcessDefinition
    {
        $this->description = $description;
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
     * @return ProcessDefinition
     */
    public function setName(string $name): ProcessDefinition
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param int $version
     * @return ProcessDefinition
     */
    public function setVersion(int $version): ProcessDefinition
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * @param string $resource
     * @return ProcessDefinition
     */
    public function setResource(string $resource): ProcessDefinition
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeploymentId(): string
    {
        return $this->deploymentId;
    }

    /**
     * @param string $deploymentId
     * @return ProcessDefinition
     */
    public function setDeploymentId(string $deploymentId): ProcessDefinition
    {
        $this->deploymentId = $deploymentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiagram(): string
    {
        return $this->diagram;
    }

    /**
     * @param string $diagram
     * @return ProcessDefinition
     */
    public function setDiagram(string $diagram): ProcessDefinition
    {
        $this->diagram = $diagram;
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
     * @return ProcessDefinition
     */
    public function setSuspended(bool $suspended): ProcessDefinition
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
     * @return ProcessDefinition
     */
    public function setTenantId(string $tenantId): ProcessDefinition
    {
        $this->tenantId = $tenantId;
        return $this;
    }
}