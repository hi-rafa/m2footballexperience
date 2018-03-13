<?php

namespace Footballexperience\Team\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{


    /**
     * {@inheritdoc}
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
//        /** @var EavSetup $eavSetup */
//        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
//        $eavSetup->addAttribute(
//            \Magento\Catalog\Model\Category::ENTITY,
//            'url_key',
//            [
//                'type' => 'varchar',
//                'label' => 'URL Key',
//                'input' => 'text',
//                'required' => false,
//                'sort_order' => 3,
//                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
//                'group' => 'General Information',
//            ]
//        );
//
//        $eavSetup->addAttribute(
//            \Magento\Catalog\Model\Category::ENTITY,
//            'url_path',
//            [
//                'type' => 'varchar',
//                'required' => false,
//                'sort_order' => 17,
//                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
//                'visible' => false,
//                'group' => 'General Information',
//            ]
//        );
//
//        $eavSetup->addAttribute(
//            \Magento\Catalog\Model\Product::ENTITY,
//            'url_key',
//            [
//                'type' => 'varchar',
//                'label' => 'URL Key',
//                'input' => 'text',
//                'required' => false,
//                'sort_order' => 10,
//                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
//                'used_in_product_listing' => true,
//                'group' => 'Search Engine Optimization',
//                'is_used_in_grid' => true,
//                'is_visible_in_grid' => false,
//                'is_filterable_in_grid' => true,
//            ]
//        );
//
//        $eavSetup->addAttribute(
//            \Magento\Catalog\Model\Product::ENTITY,
//            'url_path',
//            [
//                'type' => 'varchar',
//                'required' => false,
//                'sort_order' => 11,
//                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
//                'visible' => false,
//            ]
//        );
    }
}
