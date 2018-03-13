<?php

namespace Footballexperience\Match\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

use Footballexperience\Match\Api\Data\MatchInterface;

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
        die('NO INSTALAR FALTA LA FOREIGN KEY');
        
        $installer = $setup;
        
        /**
         * Prepare database for install
         */
        $installer->startSetup();
        


        /**
         * Create table for Match
         */
        $tableMatch = $installer->getConnection()->newTable($installer->getTable(MatchInterface::TABLE)
        )->addColumn(
            MatchInterface::ID,
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Id'
        )->addColumn(
            MatchInterface::DATE,
            Table::TYPE_DATE,
            null,
            ['nullable' => false],
            'Date'
        )->addColumn(
            MatchInterface::TIME,
            Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'Time'
        )->addColumn(
            MatchInterface::STADIUM,
            Table::TYPE_INTEGER,
            null,
            ['nullable' => false],
            'Stadium'
        )->addColumn(
            MatchInterface::TEAM1,
            Table::TYPE_INTEGER,
            null,
            ['nullable' => false],
            'Team 1'
        )->addColumn(
            MatchInterface::TEAM2,
            Table::TYPE_INTEGER,
            null,
            ['nullable' => false],
            'Team 1'
        )->setComment(
            'Match entity'
        );
    
//        ->addForeignKey(
//        $installer->getFkName('<ChildTable>', 'entity_id', '<ParentTable>', 'entity_id'),
//        'entity_id',
//        $installer->getTable('<ParentTable>'),
//        'entity_id',
//        \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
//    )
    
    
        
      
        
        /**
         * Prepare database after install
         */
        $installer->getConnection()->createTable($tableMatch);
//        $installer->getConnection()->createTable($tableMatch);
        $installer->endSetup();
    }
}