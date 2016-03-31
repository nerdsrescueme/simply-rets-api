<?php

namespace NRM\SimplyRetsClient;

/**
 * Abstract parameter set
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
abstract class AbstractParameterSet implements ParameterSetInterface
{
    /**
     * Static constructor
     *
     * @return ParameterSetInterface
     */
    public static function create()
    {
        $className = get_called_class();

        return new $className();
    }

    /**
     * {@inheritdoc}
     */
    public function toQueryString()
    {
        $params = $this->toArray();
        $string = '';

        foreach ($params as $key => $value) {
            if (is_array($value) && !empty($value)) {
                foreach ($value as $item) {
                    if (is_scalar($item)) {
                        $string .= "&{$key}={$item}";
                    }
                }
            } else {
                if (is_scalar($value)) {
                    $string .= "&{$key}={$value}";
                }
            }
        }

        $string = '?' . ltrim($string, '&');

        if ('?' === $string) {
            $string = '';
        }

        return $string;
    }
}
