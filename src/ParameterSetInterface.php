<?php

namespace NRM\SimplyRetsClient;

/**
 * Parameter set interface
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
interface ParameterSetInterface
{
    /**
     * Convert parameter set to client usable query string
     *
     * @return string
     */
    public function toQueryString();

    /**
     * Convert parameter set to client usable array
     *
     * @return array
     */
    public function toArray();
}
