<?php
/**
 * Created by IntelliJ IDEA.
 * User: hentschel
 * Date: 07.06.13
 * Time: 20:42
 * To change this template use File | Settings | File Templates.
 */

namespace org\provectus\php\sdk\entity\request;

class Request
{
    /**
     * @return array
     */
    public function iterate(): array
    {
        $tmp = [];
        foreach ($this as $index => $value) {
            $tmp[$index] = $value;
        }

        return $tmp;
    }
}