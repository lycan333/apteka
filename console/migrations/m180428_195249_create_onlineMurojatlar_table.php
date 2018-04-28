<?php

use yii\db\Migration;

/**
 * Handles the creation of table `onlineMurojatlar`.
 */
class m180428_195249_create_onlineMurojatlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('onlineMurojatlar', [
            'id' => $this->primaryKey(),
            'level'=>$this->string(11)->notNull(),
            'xabar'=>$this->text()->notNull(),
            'mavzu'=>$this->string(300)->notNull(),
            'UserId'=>$this->integer(11)->notNull()
        ]);
        $this->createIndex('IndexOM',
            'onlineMurojatlar','UserId');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('onlineMurojatlar');
    }
}
