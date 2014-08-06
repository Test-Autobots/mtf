<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace Mtf\App\State;

/**
 * Class State1
 * Example Application State class
 */
class State1 extends AbstractState
{
    /**
     * Apply set up configuration profile
     *
     * @return void
     */
    public function apply()
    {
        parent::apply();
    }

    /**
     * Get name of the Application State Profile
     *
     * @return string
     */
    public function getName()
    {
        return 'Configuration Profile #1';
    }
}
