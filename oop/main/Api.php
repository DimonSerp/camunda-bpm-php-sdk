<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 25.06.13
 * Time: 11:44
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk;

use org\provectus\php\sdk\service\AuthorizationService;
use org\provectus\php\sdk\service\GroupService;
use org\provectus\php\sdk\service\HistoryService;
use org\provectus\php\sdk\service\IdentityService;
use org\provectus\php\sdk\service\JobService;
use org\provectus\php\sdk\service\ProcessEngineService;
use org\provectus\php\sdk\service\TaskService;
use org\provectus\php\sdk\service\ExecutionService;
use org\provectus\php\sdk\service\MessageService;
use org\provectus\php\sdk\service\ProcessDefinitionService;
use org\provectus\php\sdk\service\ProcessInstanceService;
use org\provectus\php\sdk\service\UserService;
use org\provectus\php\sdk\service\VariableInstanceService;
use org\provectus\php\sdk\service\DeploymentService;


class Api
{
    // SERVICES
    public $execution;
    public $group;
    public $job;
    public $message;
    public $processDefinition;
    public $processEngine;
    public $processInstance;
    public $task;
    public $user;
    public $variableInstance;
    public $authorization;
    public $history;
    public $identity;
    public $deployments;

    // CONFIG
    private $restApiUrl = 'http://localhost:8080/engine-rest/';

    public function __construct($restApiUrl = null, $tenantId = null)
    {
        if ($restApiUrl != null) {
            $this->restApiUrl = $restApiUrl;
        }

        $this->authorization = new AuthorizationService($this->restApiUrl, $tenantId);
        $this->execution = new ExecutionService($this->restApiUrl, $tenantId);
        $this->group = new GroupService($this->restApiUrl, $tenantId);
        $this->history = new HistoryService($this->restApiUrl, $tenantId);
        $this->identity = new IdentityService($this->restApiUrl, $tenantId);
        $this->job = new JobService($this->restApiUrl, $tenantId);
        $this->message = new MessageService($this->restApiUrl, $tenantId);
        $this->processDefinition = new ProcessDefinitionService($this->restApiUrl, $tenantId);
        $this->processEngine = new ProcessEngineService($this->restApiUrl, $tenantId);
        $this->processInstance = new ProcessInstanceService($this->restApiUrl, $tenantId);
        $this->task = new TaskService($this->restApiUrl, $tenantId);
        $this->user = new UserService($this->restApiUrl, $tenantId);
        $this->variableInstance = new VariableInstanceService($this->restApiUrl, $tenantId);
        $this->deployments = new DeploymentService($this->restApiUrl, $tenantId);
    }
}