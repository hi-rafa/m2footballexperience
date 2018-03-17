<?php

namespace Footballexperience\Match\Setup;

use Footballexperience\Stadium\Api\Data\StadiumInterface;
use Footballexperience\Team\Api\Data\TeamInterface;
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
        
        
        $installer = $setup;
        
        /**
         * Prepare database for install
         */
        $installer->startSetup();
    
        $connection = $installer->getConnection();


        /**
         * Create table for Match
         */
        $tableMatch = $connection->newTable($installer->getTable(MatchInterface::TABLE)
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
            ['nullable' => false, 'unsigned' => true],
            'Stadium'
        )->addColumn(
            MatchInterface::TEAM1,
            Table::TYPE_INTEGER,
            null,
            ['nullable' => false, 'unsigned' => true],
            'Team 1'
        )->addColumn(
            MatchInterface::TEAM2,
            Table::TYPE_INTEGER,
            null,
            ['nullable' => false, 'unsigned' => true],
            'Team 1'
        )->addForeignKey(//Match foreign key
            $installer->getFkName(
                MatchInterface::TABLE,
                MatchInterface::STADIUM,
                StadiumInterface::TABLE,
                StadiumInterface::ID
            ),
            MatchInterface::STADIUM,
            $installer->getTable(StadiumInterface::TABLE),
            StadiumInterface::ID,
            \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
        )->addForeignKey(//Team1 foreign key
            $installer->getFkName(
                MatchInterface::TABLE,
                MatchInterface::TEAM1,
                TeamInterface::TABLE,
                TeamInterface::ID
            ),
            MatchInterface::TEAM1,
            $installer->getTable(TeamInterface::TABLE),
            TeamInterface::ID,
            \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
        )->addForeignKey(//Team2 foreign key
            $installer->getFkName(
                MatchInterface::TABLE,
                MatchInterface::TEAM2,
                TeamInterface::TABLE,
                TeamInterface::ID
            ),
            MatchInterface::TEAM2,
            $installer->getTable(TeamInterface::TABLE),
            TeamInterface::ID,
            \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
        )->setComment(
            'Match entity'
        );
        
        
        /**
         * Prepare database after install
         */
        $installer->getConnection()->createTable($tableMatch);
        
//        $installer->getConnection()->createTable($tableMatch);
        $installer->endSetup();
    }
}