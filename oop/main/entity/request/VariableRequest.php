<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 26.06.13
 * Time: 14:54
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\request;


class VariableRequest extends Request
{
    /** @var string */
    protected $value;

    /** @var string */
    protected $type;

    /** @var string */
    protected $modifications;

    /** @var string */
    protected $deletions;

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return VariableRequest
     */
    public function setValue(string $value): VariableRequest
    {
        $this->value = $value;
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
     * @return VariableRequest
     */
    public function setType(string $type): VariableRequest
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifications(): string
    {
        return $this->modifications;
    }

    /**
     * @param string $modifications
     * @return VariableRequest
     */
    public function setModifications(string $modifications): VariableRequest
    {
        $this->modifications = $modifications;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeletions(): string
    {
        return $this->deletions;
    }

    /**
     * @param string $deletions
     * @return VariableRequest
     */
    public function setDeletions(string $deletions): VariableRequest
    {
        $this->deletions = $deletions;
        return $this;
    }
}