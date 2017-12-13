<?php

namespace org\provectus\CamundaSDK\entity\response;

use org\provectus\CamundaSDK\helper\CastHelper;

class DeploymentWithDefinitions extends CastHelper
{
    /** @var array */
    protected $links;

    /** @var string */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $source;

    /** @var string */
    protected $tenantId;

    /** @var string */
    protected $deploymentTime;

    /**
     * containing a property for each of the process definitions, which are successfully deployed with that deployment.
     * The key is the process definition id, the value corresponding to the process definition,
     * which is defined in the Process Definition resource.
     *
     * @var  ProcessDefinition[] $deployedProcessDefinitions
     */
    protected $_deployedProcessDefinitions = [];

    protected $deployedCaseDefinitions;

    protected $deployedDecisionDefinitions;

    protected $deployedDecisionRequirementsDefinitions;

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @param array $links
     * @return DeploymentWithDefinitions
     */
    public function setLinks(array $links): DeploymentWithDefinitions
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return DeploymentWithDefinitions
     */
    public function setId(string $id): DeploymentWithDefinitions
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
     * @return DeploymentWithDefinitions
     */
    public function setName(string $name): DeploymentWithDefinitions
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return DeploymentWithDefinitions
     */
    public function setSource(string $source): DeploymentWithDefinitions
    {
        $this->source = $source;
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
     * @return DeploymentWithDefinitions
     */
    public function setTenantId(string $tenantId): DeploymentWithDefinitions
    {
        $this->tenantId = $tenantId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeploymentTime(): string
    {
        return $this->deploymentTime;
    }

    /**
     * @param string $deploymentTime
     * @return DeploymentWithDefinitions
     */
    public function setDeploymentTime(string $deploymentTime): DeploymentWithDefinitions
    {
        $this->deploymentTime = $deploymentTime;
        return $this;
    }

    /**
     * @return ProcessDefinition[]
     */
    public function getDeployedProcessDefinitions(): array
    {
        return $this->_deployedProcessDefinitions;
    }

    /**
     * @param ProcessDefinition[] $deployedProcessDefinitions
     * @return DeploymentWithDefinitions
     */
    public function setDeployedProcessDefinitions(array $deployedProcessDefinitions): DeploymentWithDefinitions
    {
        foreach ($deployedProcessDefinitions as $id => $deployedDefinition) {
            if (!$deployedDefinition instanceof ProcessDefinition) {
                $deployedDefinition = (new ProcessDefinition())->cast($deployedDefinition);
            }
            $this->_deployedProcessDefinitions[$deployedDefinition->getId()] = $deployedDefinition;
        }

        return $this;
    }

    /**
     * @param string $name
     * @param        $value
     */
    public function __set(string $name, $value)
    {
        switch ($name) {
            case 'deployedProcessDefinitions':
                $this->setDeployedProcessDefinitions($value);
                break;
        }
    }
}