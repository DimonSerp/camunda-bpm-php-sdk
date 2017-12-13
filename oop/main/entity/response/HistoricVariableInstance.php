<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 13:34
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\response;


use org\provectus\CamundaSDK\helper\CastHelper;

class HistoricVariableInstance extends CastHelper
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $type;

    /** @var string */
    protected $value;

    /** @var string */
    protected $processInstanceId;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return HistoricVariableInstance
     */
    public function setName(string $name): HistoricVariableInstance
    {
        $this->name = $name;
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
     * @return HistoricVariableInstance
     */
    public function setType(string $type): HistoricVariableInstance
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return HistoricVariableInstance
     */
    public function setValue(string $value): HistoricVariableInstance
    {
        $this->value = $value;
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
     * @return HistoricVariableInstance
     */
    public function setProcessInstanceId(string $processInstanceId): HistoricVariableInstance
    {
        $this->processInstanceId = $processInstanceId;
        return $this;
    }
}