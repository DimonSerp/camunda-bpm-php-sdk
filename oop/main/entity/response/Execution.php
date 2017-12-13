<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 09.06.13
 * Time: 10:37
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\response;

use org\provectus\CamundaSDK\helper\CastHelper;

class Execution extends CastHelper
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $processInstanceId;

    /** @var bool */
    protected $ended;

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
     * @return Execution
     */
    public function setId(string $id): Execution
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessInstanceId(): string
    {
        return $this->processInstanceId;
    }

    /**
     * @param string $processInstanceId
     * @return Execution
     */
    public function setProcessInstanceId(string $processInstanceId): Execution
    {
        $this->processInstanceId = $processInstanceId;
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
     * @return Execution
     */
    public function setEnded(bool $ended): Execution
    {
        $this->ended = $ended;
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
     * @return Execution
     */
    public function setTenantId(string $tenantId): Execution
    {
        $this->tenantId = $tenantId;
        return $this;
    }
}