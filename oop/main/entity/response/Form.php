<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 11:45
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\response;

use org\provectus\php\sdk\helper\CastHelper;

class Form extends CastHelper
{
    /** @var string */
    protected $key;

    /** @var string */
    protected $contextPath;

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return Form
     */
    public function setKey(string $key): Form
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getContextPath(): string
    {
        return $this->contextPath;
    }

    /**
     * @param string $contextPath
     * @return Form
     */
    public function setContextPath(string $contextPath): Form
    {
        $this->contextPath = $contextPath;
        return $this;
    }
}