<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace Magento\Mtf\Test\Constraint; 

use Mtf\Constraint\AbstractConstraint;
use Magento\Mtf\Test\Page\Area\TestPage;
use Magento\Mtf\Test\Fixture\Test;

/**
 * Class PageOpenSuccess
 *
 * @package Magento\Mtf\Test\Constraint
 */
class PageOpenSuccess extends AbstractConstraint
{
    /**
     * Constraint severeness
     *
     * @var string
     */
    protected $severeness = 'low';

    /**
     * Assert that page has been opened
     *
     * @param TestPage $page
     * @param Test $fixture
     */
    public function processAssert(TestPage $page, Test $fixture)
    {
        //
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function toString()
    {
        //
    }
}
