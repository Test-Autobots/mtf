<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace Mtf\ObjectManager\Config\Reader;

/**
 * Class Dom
 *
 * @internal
 */
class Dom extends \Magento\Framework\Config\Reader\Filesystem
{
    /**
     * Name of an attribute that stands for data type of node values
     */
    const TYPE_ATTRIBUTE = 'xsi:type';

    /**
     * @var array
     */
    protected $_idAttributes = array(
        '/config/preference' => 'for',
        '/config/(type|virtualType)' => 'name',
        '/config/(type|virtualType)/plugin' => 'name',
        '/config/(type|virtualType)/arguments/argument' => 'name',
        '/config/(type|virtualType)/arguments/argument(/item)+' => 'name'
    );

    /**
     * @param \Magento\Framework\Config\FileResolverInterface $fileResolver
     * @param \Magento\Framework\ObjectManager\Config\Mapper\Dom $converter
     * @param \Magento\Framework\ObjectManager\Config\SchemaLocator $schemaLocator
     * @param \Magento\Framework\Config\ValidationStateInterface $validationState
     * @param string $fileName
     * @param array $idAttributes
     * @param string $domDocumentClass
     * @param string $defaultScope
     */
    public function __construct(
        \Magento\Framework\Config\FileResolverInterface $fileResolver,
        \Magento\Framework\ObjectManager\Config\Mapper\Dom $converter,
        \Magento\Framework\ObjectManager\Config\SchemaLocator $schemaLocator,
        \Magento\Framework\Config\ValidationStateInterface $validationState,
        $fileName = 'di.xml',
        $idAttributes = array(),
        $domDocumentClass = 'Magento\Framework\Config\Dom',
        $defaultScope = 'global'
    ) {
        parent::__construct(
            $fileResolver,
            $converter,
            $schemaLocator,
            $validationState,
            $fileName,
            $idAttributes,
            $domDocumentClass,
            $defaultScope
        );
    }

    /**
     * Create and return a config merger instance that takes into account types of arguments
     *
     * @param string $mergerClass
     * @param string $initialContents
     * @return \Magento\Framework\Config\Dom
     */
    protected function _createConfigMerger($mergerClass, $initialContents)
    {
        return new $mergerClass($initialContents, $this->_idAttributes, self::TYPE_ATTRIBUTE, $this->_perFileSchema);
    }
}
