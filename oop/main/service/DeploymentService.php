<?php

namespace org\provectus\CamundaSDK\service;

use org\provectus\CamundaSDK\entity\response\DeploymentWithDefinitions;
use org\provectus\CamundaSDK\exception\CamundaApiException;

class DeploymentService extends RequestService
{
    protected $json = false;

    /**
     * Deploy new BPMN definition
     *
     * @param string $name
     * @param string $bpmnFilePath
     * @throws CamundaApiException
     * @return mixed server response
     */
    public function deploy(string $name, string $bpmnFilePath): DeploymentWithDefinitions
    {
        if (!is_file($bpmnFilePath)) {
            throw new CamundaApiException('BPMN file path not correct!');
        }

        $this->setRequestUrl('/deployment/create');
        $this->setRequestData([
            'deployment-name' => $name,
            'enable-duplicate-filtering' => true,
            'deployment-source' => 'API',
            'file' => curl_file_create($bpmnFilePath),
            'tenant-id' => $this->tenantId,
        ]);
        $this->setRequestMethod('POST');
        $deployment = new DeploymentWithDefinitions();

        return $deployment->cast($this->execute());
    }
}
