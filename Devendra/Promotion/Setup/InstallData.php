<?php

/**
 * Copyright © Devendra. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Devendra\Promotion\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        if (!$installer->tableExists('devpromo_product_lebel')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('devpromo_product_lebel')
            )
                ->addColumn(
                    'label_id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'nullable' => false,
                        'primary' => true,
                        'unsigned' => true,
                    ],
                    'Label ID'
                )
                ->addColumn(
                    'name',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    ['nullable => false'],
                    'Label Name'
                )
                ->addColumn(
                    'status',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    ['default' => 0],
                    'Label Status'
                )
                ->addColumn(
                    'product_tag_label',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    '255',
                    [],
                    'Product Tag Label'
                )
                ->addColumn(
                    'product_page_label_position',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    100,
                    [],
                    'Product Page Label Position'
                )
                ->addColumn(
                    'category_tag_label',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    255,
                    [],
                    'Category Tag Label'
                )
                ->addColumn(
                    'category_page_label_position',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    100,
                    [],
                    'Category Page Label Position'
                )
                ->addColumn(
                    'condition',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    4094,
                    [],
                    'Display Setting Condition'
                )
                ->addColumn(
                    'from_date',
                    \Magento\Framework\DB\Ddl\Table::TYPE_DATE,
                    100,
                    [],
                    'From Date'
                )
                ->addColumn(
                    'from_time',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    100,
                    [],
                    'From Time'
                )
                ->addColumn(
                    'to_date',
                    \Magento\Framework\DB\Ddl\Table::TYPE_DATE,
                    100,
                    [],
                    'To Date'
                )
                ->addColumn(
                    'to_time',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    100,
                    [],
                    'To Time'
                )
                ->addColumn(
                    'created_at',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                    'Created At'
                )->addColumn(
                    'updated_at',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
                    'Updated At')
                ->setComment('Promotion Product Label Table');
            $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();
    }
}
