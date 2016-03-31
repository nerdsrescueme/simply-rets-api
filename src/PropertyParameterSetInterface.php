<?php

namespace NRM\SimplyRetsClient;

/**
 * Property parameter set interface
 *
 * @author Frank Bardon Jr. <frankbardon@gmail.com>
 */
interface PropertyParameterSetInterface extends ParameterSetInterface
{
    /**
     * Listing extra fields
     */
    const EXTRA_NONE = null;
    const EXTRA_ASSOCIATION = 'association';
    const EXTRA_AGREEMENT = 'agreement';
    const EXTRA_GARAGE_SPACES = 'garageSpaces';
    const EXTRA_MAINTENANCE_EXPENSE = 'maintenanceExpense';
    const EXTRA_PARKING = 'parking';
    const EXTRA_POOL = 'pool';
    const EXTRA_ROOMS = 'rooms';
    const EXTRA_TAX_YEAR = 'taxYear';
    const EXTRA_TAX_ANNUAL_AMOUNT = 'taxAnnualAmount';

    /**
     * Add extra field
     *
     * @param string $extraField
     * @return self
     */
    public function addExtraField($extraField);

    /**
     * Get extra fields
     *
     * @return array
     */
    public function getExtraFields();
}
