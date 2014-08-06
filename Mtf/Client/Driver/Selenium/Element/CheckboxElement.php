<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace Mtf\Client\Driver\Selenium\Element;

use Mtf\Client\Driver\Selenium\Element;

/**
 * Class CheckboxElement
 * Class provides ability to work with page element checkbox
 * (Such as setting/getting value)
 *
 * @api
 */
class CheckboxElement extends Element
{
    /**
     * Get value of the selected option of the element
     *
     * @return string
     */
    public function getValue()
    {
        $this->_eventManager->dispatchEvent(['get_value'], [(string) $this->_locator]);
        return $this->isSelected() ? 'Yes' : 'No';
    }

    /**
     * Mark checkbox if value 'Yes', otherwise unmark
     *
     * @param string $value
     * @return void
     */
    public function setValue($value)
    {
        $this->_eventManager->dispatchEvent(['set_value'], [__METHOD__, $this->getAbsoluteSelector()]);
        if (($this->isSelected() && $value == 'No') || (!$this->isSelected() && $value == 'Yes')) {
            $this->click();
        }
    }
}
