<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 26.06.13
 * Time: 14:18
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\response;

use org\provectus\php\sdk\helper\CastHelper;

class Variable extends CastHelper
{
    /** @var string */
    protected $value;

    /** @var string */
    protected $type;

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Variable
     */
    public function setValue(string $value): Variable
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
     * @return Variable
     */
    public function setType(string $type): Variable
    {
        $this->type = $type;
        return $this;
    }
}