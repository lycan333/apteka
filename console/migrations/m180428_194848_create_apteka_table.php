<?php

use yii\db\Migration;

/**
 * Handles the creation of table `apteka`.
 */
class m180428_194848_create_apteka_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('apteka', [
            'id' => $this->primaryKey(),
            'nomi'=>$this->string(300)->notNull(),
            'manzili'=>$this->text()->notNull(),
            'meneger'=>$this->integer(11)->notNull()
        ]);
        $this->createIndex('meneger',
            'apteka',
            'meneger');
        $this->addForeignKey('fkmeneger',
            'apteka',
            'meneger',
            'user',
            'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('apteka');
    }
}
