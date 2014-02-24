<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace Mtf\Block;

use Mtf\ObjectManager;

/**
 * Factory for Blocks
 *
 * @package Mtf\Block
 * @api
 */
class BlockFactory
{
    /**
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * @constructor
     * @param ObjectManager $objectManager
     */
    public function __construct(
        ObjectManager $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @param $class
     * @param array $arguments
     * @return BlockInterface
     * @throws \UnexpectedValueException
     */
    public function create($class, array $arguments = [])
    {
        $object = $this->objectManager->create($class, $arguments);
        if (!$object instanceof BlockInterface) {
            throw new \UnexpectedValueException("Block class '$class' has to implement"
                . '\\Mtf\\Block\\BlockInterface interface.');
        }

        return $object;
    }
}
