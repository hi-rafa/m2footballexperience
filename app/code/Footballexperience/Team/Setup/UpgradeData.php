<?php

namespace Footballexperience\Team\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
//    /**
//     * Sales setup factory
//     *
//     * @var SalesSetupFactory
//     */
//    protected $salesSetupFactory;
//
//    /**
//     * @var \Magento\Eav\Model\Config
//     */
//    protected $eavConfig;

//    /**
//     * @param SalesSetupFactory $salesSetupFactory
//     * @param \Magento\Eav\Model\Config $eavConfig
//     */
//    public function __construct(
//        SalesSetupFactory $salesSetupFactory,
//        \Magento\Eav\Model\Config $eavConfig
//    ) {
//        $this->salesSetupFactory = $salesSetupFactory;
//        $this->eavConfig = $eavConfig;
//    }

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        /** @var SalesSetup $salesSetup */
//        $salesSetup = $this->salesSetupFactory->create(['setup' => $setup]);

        if (version_compare($context->getVersion(), '2.0.1', '<')) {
//            $salesSetup->updateEntityType(
//                \Magento\Sales\Model\Order::ENTITY,
//                'entity_model',
//                'Magento\Sales\Model\ResourceModel\Order'
//            );
        
        }
//        $this->eavConfig->clear();
//        $setup->endSetup();
    }
}
