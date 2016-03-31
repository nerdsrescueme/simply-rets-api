<?php

namespace NRM\SimplyRetsClient;

/**
 * Property parameter set
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
class PropertyParameterSet extends AbstractParameterSet implements PropertyParameterSetInterface
{
    protected $extraFields = array();

    /**
     * {@inheritdoc}
     */
    public function addExtraField($extraField)
    {
        if (self::EXTRA_NONE === $extraField) {
            return $this->clearExtraFields();
        }

        $this->extraFields[] = $extraField;
        $this->extraFields = array_unique($this->extraFields);

        return $this;
    }

    /**
     * Clear extra fields array
     *
     * @return self
     */
    protected function clearExtraFields()
    {
        $this->extraFields = array();

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtraFields()
    {
        return $this->extraFields;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $array = array();

        if (!empty($this->extraFields)) {
            $array['include'] = $this->extraFields;
        }

        return $array;
    }
}
