<?php

namespace Footballexperience\Stadium\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

use Footballexperience\Stadium\Api\Data\StadiumInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        
        $installer = $setup;
        
        /**
         * Prepare database for install
         */
        $installer->startSetup();
        
        /**
         * Create table for Stadium
         */
        $tableStadium = $installer->getConnection()->newTable(
            $installer->getTable(StadiumInterface::TABLE)
        )->addColumn(
            StadiumInterface::ID,
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Id'
        )->addColumn(
            StadiumInterface::NAME,
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Name'
        )->addColumn(
            StadiumInterface::CITY,
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'City'
        )->addColumn(
            StadiumInterface::COUNTRY,
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Country'
        )->addColumn(
            StadiumInterface::DESCRIPTION,
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Description'
        )->addColumn(
            StadiumInterface::CAPACITY,
            Table::TYPE_INTEGER,
            10,
            ['nullable' => false],
            'Capacity'
        )->addColumn(
            StadiumInterface::MAP,
            Table::TYPE_TEXT,
            255,
            ['nullable' => true],
            'Map'
        )->setComment(
            'Stadium entity'
        );
  
      
        
        /**
         * Prepare database after install
         */
        $installer->getConnection()->createTable($tableStadium);
//        $installer->getConnection()->createTable($tableTeam);
        $installer->endSetup();
    }
}