<?php

namespace MagePsycho\ProductAttachment\Setup;

use Magento\Catalog\Model\Product;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Eav\Setup\EavSetupFactory;

/**
 * @category   MagePsycho
 * @package    MagePsycho_ProductAttachment
 * @author     Raj KB <magepsycho@gmail.com>
 * @website    https://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class InstallData implements InstallDataInterface
{
    /**
     * @var EavSetupFactory
     */
    protected $_eavSetupFactory;

    public function __construct(
        EavSetupFactory $eavSetupFactory
    ) {
        $this->_eavSetupFactory = $eavSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->_eavSetupFactory->create(["setup" => $setup]);
        $attributes = [
            'mp_attachment_file' => [
                'label' => 'Attachment File',
                'input' => 'file',
                'backend' => 'MagePsycho\ProductAttachment\Model\Product\Attribute\Backend\File',
                'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
            ],
            'mp_attachment_label' => [
                'label' => 'Attachment Label',
                'input' => 'text',
                'backend' => '',
                'global' => ScopedAttributeInterface::SCOPE_STORE,
            ],
        ];
        foreach ($attributes as $code => $attribute) {
            $eavSetup->addAttribute(
                Product::ENTITY,
                $code,
                [
                    'group' => 'Attachments',
                    'type' => 'varchar',
                    'label' => $attribute['label'],
                    'input' => $attribute['input'],
                    'backend' => $attribute['backend'],
                    'frontend' => '',
                    'class' => '',
                    'source' => '',
                    'global' => $attribute['global'],
                    'visible' => true,
                    'required' => false,
                    'user_defined' => true,
                    'default' => '',
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'unique' => false,
                    'visible_on_front' => false,
                    'used_in_product_listing' => false,
                ]
            );
        }
    }
}
