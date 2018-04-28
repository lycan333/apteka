<?php

use yii\db\Migration;

/**
 * Handles the creation of table `dori`.
 */
class m180428_194832_create_dori_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('dori', [
            'id' => $this->primaryKey(),
            'nomi'=>$this->string(300),
            'firmaId'=>$this->integer(11)->notNull(),
            'seria'=>$this->string(11)->notNull(),
            'madeDate'=>$this->date()->notNull(),
            'DeadLine'=>$this->date()->notNull()
        ]);
        $this->createIndex('IndexFirma','dori','firmaId');
        $this->addForeignKey('fkfirmadori','dori','firmaId','firma','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('dori');
    }
}
