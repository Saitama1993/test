<?php

$installer = $this;
$tableNews = $installer->getTable('maxgallery/table_gallery');

die($tableNews);

$installer->startSetup();

$installer->getConnection()->dropTable($tableNews);
$table = $installer->getConnection()
    ->newTable($tableNews)
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
        ))
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
        'nullable'  => false,
        ))
    ->addColumn('image', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
        ))
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
        ))
   ->addColumn('sort', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ));

$installer->getConnection()->createTable($table);

$installer->endSetup();