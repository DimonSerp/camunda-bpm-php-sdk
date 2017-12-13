<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 30.10.13
 * Time: 09:59
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\CamundaSDK\entity\response;


use org\provectus\CamundaSDK\helper\CastHelper;

class ResourceOption extends CastHelper
{
    /** @var array */
    protected $links;

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @param array $links
     * @return ResourceOption
     */
    public function setLinks(array $links): ResourceOption
    {
        $this->links = $links;
        return $this;
    }
}