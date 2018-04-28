<?php

use yii\db\Migration;

/**
 * Handles the creation of table `buyurtma`.
 */
class m180428_194907_create_buyurtma_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('buyurtma', [
            'id' => $this->primaryKey(),
            'doriId'=>$this->integer(11)->notNull(),
            'soni'=>$this->integer(11)->defaultValue(1),
            'aptekaId'=>$this->integer(11)->notNull()
        ]);
        $this->createIndex('buyurtma1',
            'buyurtma',
            'doriId'
            );
        $this->createIndex(
            'buyurtma2',
            'buyurtma',
            'aptekaId'
        );
        $this->addForeignKey('fkb1',
            'buyurtma',
            'doriId',
            'dori',
            'id');
        $this->addForeignKey(
            'fkb2',
            'buyurtma',
            'aptekaId',
            'apteka',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('buyurtma');
    }
}
