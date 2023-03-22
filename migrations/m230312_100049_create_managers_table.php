<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%managers}}`.
 */
class m230312_100049_create_managers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('managers', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(255)->notNull(),
            'last_name' => $this->string(255)->notNull(),
            'first_phone' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'position' => $this->string(255)->notNull(),
            'status' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('managers');
    }
}
