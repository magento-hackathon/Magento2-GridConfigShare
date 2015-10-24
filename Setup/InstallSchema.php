<?php

Namespace MagentoHackathon\GridConfigShare\Setup;


use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

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

        $installer->startSetup();

        if (!$installer->tableExists('ui_bookmark_share')) {
            $table = $installer->getConnection()->newTable($installer->getTable('ui_bookmark_share'));
            $table->addColumn(
                    'bookmark_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => false
                    ],
                    'Bookmark ID'
                )
                ->addForeignKey(
                    $installer->getFkName('ui_bookmark_share', 'bookmark_id', 'ui_bookmarks', 'bookmark_id'),
                    'bookmark_id',
                    $installer->getTable('ui_bookmark'),
                    'bookmark_id',
                    Table::ACTION_CASCADE
                )
                ->setComment('Shared Grid Views Table');
            $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();
    }
}