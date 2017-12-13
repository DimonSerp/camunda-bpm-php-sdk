<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 09.06.13
 * Time: 10:38
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\request;

class MessageRequest extends Request
{
    /** @var string */
    protected $messageName;

    /** @var string */
    protected $businessKey;

    // TODO: change to array
    /** @var string */
    protected $correlationKeys;

    /** @var array */
    protected $processVariables;

    /**
     * @return string
     */
    public function getMessageName(): string
    {
        return $this->messageName;
    }

    /**
     * @param string $messageName
     * @return MessageRequest
     */
    public function setMessageName(string $messageName): MessageRequest
    {
        $this->messageName = $messageName;
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
     * @return MessageRequest
     */
    public function setBusinessKey(string $businessKey): MessageRequest
    {
        $this->businessKey = $businessKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorrelationKeys(): string
    {
        return $this->correlationKeys;
    }

    /**
     * @param string $correlationKeys
     * @return MessageRequest
     */
    public function setCorrelationKeys(string $correlationKeys): MessageRequest
    {
        $this->correlationKeys = $correlationKeys;
        return $this;
    }

    /**
     * @return array
     */
    public function getProcessVariables(): array
    {
        return $this->processVariables;
    }

    /**
     * @param array $processVariables
     * @return MessageRequest
     */
    public function setProcessVariables(array $processVariables): MessageRequest
    {
        $this->processVariables = $processVariables;
        return $this;
    }
}