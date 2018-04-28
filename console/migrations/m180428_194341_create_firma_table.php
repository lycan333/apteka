<?php

use yii\db\Migration;

/**
 * Handles the creation of table `firma`.
 */
class m180428_194341_create_firma_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('firma', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(300)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('firma');
    }
}
