<?php

namespace Footballexperience\Team\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

use Footballexperience\Team\Api\Data\MatchInterface;
use Footballexperience\Team\Api\Data\TeamInterface;

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
         * Create table for Team
         */
        $tableTeam = $installer->getConnection()->newTable($installer->getTable(TeamInterface::TABLE)
        )->addColumn(
            TeamInterface::ID,
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Id'
        )->addColumn(
            TeamInterface::NAME,
            Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'Name'
        )->addColumn(
            TeamInterface::COUNTRY,
            Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'Country'
        )->addColumn(
            TeamInterface::DESCRIPTION,
            Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'Description'
        )->addColumn(
            TeamInterface::LOGO,
            Table::TYPE_TEXT,
            null,
            ['nullable' => true],
            'Image logo'
        )->setComment(
            'Team entity'
        );
    
    
        
      
        
        /**
         * Prepare database after install
         */
        $installer->getConnection()->createTable($tableTeam);
//        $installer->getConnection()->createTable($tableTeam);
        $installer->endSetup();
    }
}